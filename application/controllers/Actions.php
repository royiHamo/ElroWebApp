<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Actions extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model');
		$this->load->library('encryption');
		$this->load->helper("security");
	}

	public function pre_login(){
		$data['email'] = $this->session->userdata('email');
		$data['is_admin'] = $this->session->userdata('is_admin');
		//if its not an anonymous, automatically redirect him
		if(isset($data['email']) && isset($data['is_admin'])){
			$this->personal_area();
		}else{
			$this->load->view("pages/login");
		}
	}

	public function login()
	{
		$email = $this->security->xss_clean($this->input->post('email'));
		$password = $this->security->xss_clean($this->input->post('password'));
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
		$email = $this->security->xss_clean($this->input->post('email'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$services = $this->security->xss_clean($this->input->post('services'));
		$website = $this->security->xss_clean($this->input->post('website'));
		$data = array();
		$users = array("email" => $email,
					  "password" => $this->encryption->encrypt($password));

		//remove ddos because there is no such service
		unset($services["ddos_box"]);
		$services['website'] = $website;
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
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('is_admin');
		$this->load->view('pages/home');
	}

	public function personal_area()
	{
		if ($this->security->xss_clean($this->session->userdata('email'))) {
				$data['email'] = $this->security->xss_clean($this->session->userdata('email'));
			if ($this->security->xss_clean($this->session->userdata('is_admin')) != '') { //it's an admin
				$this->admin_login();
			} else /*not admin*/{
				$data['services'] = $this->Main_model->getActiveServices($data['email']);
				$this->load->view('pages/personal_area', $data);
			}
		} else {
			$this->load->view('pages/login');
		}
	}

	public function admin_login(){
		$data['email'] = $this->security->xss_clean($this->session->userdata('email'));
		$data['services'] = $this->Main_model->getActiveServices($data['email']);
		$statistics = $this->Main_model->get_costumers_statistics();
		$data['new_users'] = $statistics['new_users'];
		$data['abandoned_users'] = $statistics['abandoned_users'];
		$data['paying_users'] = $statistics['paying_users'];
		$this->load->view('pages/admin_home', $data);
	}

	public function updateServiceStatus()
	{
		$data = $this->security->xss_clean($this->input->post('dataToUpdate'));

		foreach ($data as $service => $value){
			if($value != 0 && $value != 1){
				//someone is trying to do something wrong!!!!
				//$this->email('royihamo@gmail.com','elirandroid@gmail.com');
				//email-smtp.us-east-1.amazonaws.com
				die(0);
			}
		}

		$email = $this->security->xss_clean($this->input->post('email'));
		$website = $this->security->xss_clean($this->input->post('website'));
		$res = $this->Main_model->updateServiceStatus($email,$data,$website);
		echo $res;
	}

	public function adminUpdateServiceStatus()
	{
		$data = $this->security->xss_clean($this->input->post('dataToUpdate'));
		$email = $this->security->xss_clean($this->input->post('email'));
		$res = $this->Main_model->adminUpdateServiceStatus($email,$data);
		echo $res;
	}

	public function users()
	{
		$data['email'] = $this->security->xss_clean($this->session->userdata('email'));
		$data['is_admin'] = $this->security->xss_clean($this->session->userdata('is_admin'));
		if($data['is_admin'] != '') { // it's an admin
			$data['users'] = $this->Main_model->getUsersData();
			$this->load->view('pages/admin_users',$data);
		}else{
			$this->load->view('errors/index.html');
		}
	}

	public function web_report(){
		$url = $this->security->xss_clean($this->input->post('url'));
		//TODO: finish this<--
	}


	public function addNewWebsite(){
		$url = $this->security->xss_clean($this->input->post('url'));
		$services = $this->security->xss_clean($this->input->post('services'));
		$email = $this->security->xss_clean($this->session->userdata('email'));
		$services['website'] = $url;
		//remove ddos because there is no such service
		unset($services["ddos_box"]);

		$res = $this->Main_model->addNewWebsite($email,$services);
		echo $res;
	}

	public function getActiveServices()
	{
		$email = $this->security->xss_clean($this->session->userdata('email'));
		echo json_encode($this->Main_model->getActiveServices($email));
	}

}
