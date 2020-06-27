<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actions extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model');
		$this->load->library('encryption');
	}

	public function login(){

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$res = $this->main_model->login($email,$password);
		if($res){
			$session_data = array('email' => $email);
			$this->session->set_userdata($session_data);
			echo true;
		}else{
			echo false;
		}
	}

	public function register(){
		$data["email"] = $this->input->post('email');
		$data["password"] = $this->input->post('password');
		$this->main_model->register($data);
	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->load->view('pages/home');
	}

	public function personal_area(){

		if($this->session->userdata('email') != ''){
			$data['email'] = $this->session->userdata('email');
			$data['services'] = $this->main_model->getActiveServices($data['email']);
			$this->load->view('pages/personal_area',$data);
		}else{
			$this->load->view('pages/login');
		}
	}

}
