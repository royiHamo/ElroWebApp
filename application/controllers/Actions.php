<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Actions extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model');
		$this->load->library('encryption');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$res = $this->Main_model->login($email, $password);
		if ($res === 'login'){
			$session_data = array('email' => $email,
									'is_admin'=> false);
			$this->session->set_userdata($session_data);
			echo true;
		} else if($res === 'admin') { //admin
			$session_data = array('email' => $email,
								  'is_admin'=> true);
			$this->session->set_userdata($session_data);
			echo true;
		} else{
			echo false;
		}
	}

	public function register()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$services = $this->input->post('services');
		$data = array();
		$users = array("email" => $email,
					  "password" => $this->encryption->encrypt($password));

		//remove ddos because there is no such service
		unset($services["ddos_box"]);
		$data['services'] = $services;
		$data['users'] = $users;
		$res = $this->Main_model->register($data);
		if ($res > 0) {
			$session_data = array('email' => $email,'is_admin'=> false);
			$this->session->set_userdata($session_data);
			echo true;
		} else {
			echo $res;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email','is_admin');
		$this->load->view('pages/home');
	}

	public function personal_area()
	{
		if ($this->session->userdata('email')) {
				$data['email'] = $this->session->userdata('email');
			if ($this->session->userdata('is_admin') != '') { //is admin
				$data['users_data'] = $this->Main_model->getUsersData();
				//TODO: build admin area
				$this->load->view('pages/admin_area', $data);
			} else /*not admin*/{
				$data['services'] = $this->Main_model->getActiveServices($data['email']);
				$this->load->view('pages/personal_area', $data);
			}
		} else {
			$this->load->view('pages/login');
		}
	}

	public function updateServiceStatus()
	{
		$data = $this->input->post('dataToUpdate');
		$email = $this->input->post('email');
		$res = $this->Main_model->updateServiceStatus($email,$data);
		echo $res;

	}

}
