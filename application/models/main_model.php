<?php


class main_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
		$this->load->library('encryption');

	}

	public function login($email,$password){
		$query = $this->db->get_where('users',array('email'=>$email));
		if($query->num_rows() > 0){
			$row_arr = $query->row_array();
			$stored_password = $row_arr['password'];
			if($this->encryption->decrypt($stored_password) === $password){
				return true;
			}
			else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function register($data){
		$this->db->insert($data);
		return true;
	}
}
