<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Actions extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model');
		$this->load->library('encryption');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$res = $this->main_model->login($email, $password);
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
		}else{
			echo false;
		}
	}

	public function register()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = array("email" => $email,
			"password" => $this->encryption->encrypt($password));
		$res = $this->main_model->register($data);
		if ($res) {
			$session_data = array('email' => $email);
			$this->session->set_userdata($session_data);
			echo true;
		} else {
			echo false;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->load->view('pages/home');
	}

	public function personal_area()
	{
		if ($this->session->userdata('email')) {
				$data['email'] = $this->session->userdata('email');
			if ($this->session->userdata('is_admin') != '') { //is admin
				$data['users_data'] = $this->main_model->getUsersData();
				$this->load->view('pages/admin_area', $data);
			} else /*not admin*/{
				$data['services'] = $this->main_model->getActiveServices($data['email']);
				$this->load->view('pages/personal_area', $data);
			}
		} else {
			$this->load->view('pages/login');
		}
	}

}
