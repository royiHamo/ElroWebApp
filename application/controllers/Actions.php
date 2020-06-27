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
		echo $res;
	}

	public function register(){
		$data["email"] = $this->input->post('email');
		$data["password"] = $this->input->post('password');
		$this->main_model->register($data);
	}

}
