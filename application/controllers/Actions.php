<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Actions extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
//		$this->load->model('Main_model');
		$this->load->model('External_model');
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
		$res = $this->External_model->login($email, $password);
		if ($res == 1){ //normal login
			$session_data = array(  'email' => $email,
									'is_admin'=> false);
			$this->session->set_userdata($session_data);
			echo true;
		} else if($res == 2) { //admin
			$session_data = array(  'email' => $email,
								    'is_admin'=> true);
			$this->session->set_userdata($session_data);
			echo true;
		} else{ // fail
			echo false;
		}
	}

	public function register()
	{
		$email = $this->security->xss_clean($this->input->post('email'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$services = $this->security->xss_clean($this->input->post('services'));
		$website = $this->security->xss_clean($this->input->post('website'));
		$ip = $this->security->xss_clean($this->input->post('ip'));
		$data = array();
		$users = array("email" => $email,
					  "password" => $password);

		//remove ddos because there is no such service
		unset($services["ddos_box"]);
		$services['website'] = $website;
		$services['ip'] = $ip;
		$data['services'] = $services;
		$data['users'] = $users;
		$res = $this->External_model->register($data);
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
	{//done!!!!
		if ($this->security->xss_clean($this->session->userdata('email'))) {
				$data['email'] = $this->security->xss_clean($this->session->userdata('email'));
			if ($this->security->xss_clean($this->session->userdata('is_admin')) != '') { //it's an admin
				$this->admin_login();
			} else /*not admin*/{
				$services =  $this->External_model->getActiveServices($data['email']);
				$data['services'] = $services;
				$this->load->view('pages/personal_area', $data);
			}
		} else {
			$this->load->view('pages/login');
		}
	}

	public function admin_login(){
		if ($this->security->xss_clean($this->session->userdata('is_admin')) == '') {
			$this->load->view('pages/home');
		}
		$data['email'] = $this->security->xss_clean($this->session->userdata('email'));
		$data['services'] = $this->External_model->getActiveServices($data['email']);//done!!!!
//		$statistics = $this->Main_model->getCustomersStatistics();
//		$data['new_users'] = $statistics['new_users'];
		$users_list = json_decode($this->External_model->getUsersData());
		$data['users_count'] = sizeof( $users_list);
//		$data['abandoned_users'] = $statistics['abandoned_users'];
//		$data['paying_users'] = $statistics['paying_users'];
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
		$res = $this->External_model->updateServiceStatus($email,$data,$website);
		echo $res;
	}

	public function adminUpdateServiceStatus()
	{
		$data = $this->security->xss_clean($this->input->post('dataToUpdate'));
		$email = $this->security->xss_clean($this->input->post('email'));
		$res = $this->External_model->adminUpdateServiceStatus($email,$data);
		echo $res;
	}

	public function users()
	{
		$data['email'] = $this->security->xss_clean($this->session->userdata('email'));
		$data['is_admin'] = $this->security->xss_clean($this->session->userdata('is_admin'));
		if($data['is_admin'] != '') { // it's an admin
			$data['users'] = $this->External_model->getUsersData();
			$this->load->view('pages/admin_users',$data);
		}else{
			$this->load->view('errors/index.html');
		}
	}

	public function webReport(){
		$data = new stdClass();
		$url = $this->security->xss_clean($this->input->post('url'));
		$data->ssl_report = $this->External_model->getWebReport($url);
		$data->user_protection = $this->External_model->getUserProtectionGrade($url);
		echo json_encode($data);
	}


	public function addNewWebsite(){
		$url = $this->security->xss_clean($this->input->post('url'));
		$ip = $this->security->xss_clean($this->input->post('ip'));
		$services = $this->security->xss_clean($this->input->post('services'));
		$email = $this->security->xss_clean($this->session->userdata('email'));
		$services['website'] = $url;
		$services['ip'] = $ip;
		//remove ddos because there is no such service
		unset($services["ddos_box"]);

		$res = $this->External_model->addNewWebsite($email,$services);
		echo $res;
	}

//	public function getActiveServices()
//	{
//		$email = $this->security->xss_clean($this->session->userdata('email'));
//		echo json_encode($this->Main_model->getActiveServices($email));
//	}

}
