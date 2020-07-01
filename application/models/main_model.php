<?php


class main_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
		$this->load->library('encryption');

	}

	public function login($email,$password){
		$query = $this->db->get_where('users', array('email'=>$email));
		if($query->num_rows() > 0){
			$row_arr = $query->row_array();
			$stored_password = $row_arr['password'];
			if($this->encryption->decrypt($stored_password) === $password){
				if($row_arr['is_admin']){
					return 'admin';
				}else{
					return 'login';
				}
			}
			else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function getActiveServices($email){
		$user_id = $this->getUserIdByEmail($email);
		if($user_id > 0){
			$query_2 = $this->db->get_where('services',array('user_id'=>$user_id));
			return $query_2->result_array();
		}else{
			return false;
		}
	}

	public function register($data){
		$this->db->insert('users',$data['users']);
		if($this->db->affected_rows() > 0){
			$q =  <<<HEREDOC
	select max(u.id) id from users u
HEREDOC;
			$res = $this->db->query($q);
			$current_user_id = $res->row('id');
			$data['services']['user_id'] = $current_user_id;
			$this->db->insert('services',$data['services']);
			return ($this->db->affected_rows() != 1) ? 0 : 1;
		}else{
			if((($this->db->error())['code']) == 1062){
				return -1;
			}
		}
	}

	public function getUserIdByEmail($email){
		$query = $this->db->get_where('users',array('email'=>$email));
		if($query->num_rows() > 0) {
			$user_id = $query->row('id');
		}else{
			$user_id = -1;
		}
		return $user_id;
	}

	public function getUsersData(){
		$q =  <<<HEREDOC
select u.email,s.* from users u join services s on u.id = s.user_id 
HEREDOC;
		$res = $this->db->query($q);
		return $res->result_array();
	}

	public function updateServiceStatus($email,$data){
		$user_id = $this->getUserIdByEmail($email);
		$this->db->where('user_id', $user_id);
		$this->db->update('services',$data);
		return 1;
	}
}
