<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('External_model');
		$this->load->library('encryption');
	}

	public function index($page = 'home')
	{
		$this->load->view('pages/'.$page);
	}



}
