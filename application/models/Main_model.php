<?php


class Main_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
		$this->load->library('encryption');
		$this->_ssl_labs_url = "https://api.ssllabs.com/api/v3/analyze";

	}

	public function login($email, $password)
	{
		$query = $this->db->get_where('users', array('email' => $email));
		if ($query->num_rows() > 0) {
			$row_arr = $query->row_array();
			$stored_password = $row_arr['password'];

			if ($this->encryption->decrypt($stored_password) === $password) {
				if ($row_arr['is_admin']) {
					return 'admin';
				} else {
					return 'login';
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function getActiveServices($email)
	{
		$user_id = $this->getUserIdByEmail($email);
		if ($user_id > 0) {
			$query_2 = $this->db->get_where('services', array('user_id' => $user_id));
			return $query_2->result_array();
		} else {
			return false;
		}
	}

	public function register($data)
	{
		$this->db->insert('users', $data['users']);
		if ($this->db->affected_rows() > 0) {
			$current_user_id = $this->getUserIdByEmail($data['users']['email']);
			$data['services']['user_id'] = $current_user_id;
			$this->db->insert('services', $data['services']);
			return ($this->db->affected_rows() != 1) ? 0 : 1;
		} else {
			if ((($this->db->error())['code']) == 1062) {
				return -1;
			}
		}
	}

	public function getUserIdByEmail($email)
	{
		$query = $this->db->get_where('users', array('email' => $email));
		if ($query->num_rows() > 0) {
			$user_id = $query->row('id');
		} else {
			$user_id = -1;
		}
		return $user_id;
	}

	public function getUsersData()
	{
		$q = <<<HEREDOC
select u.email,u.active,u.registered_on,s.* from users u join services s on u.id = s.user_id where u.is_admin = 0 
HEREDOC;
		$res = $this->db->query($q);
		return $res->result_array();
	}

	public function getCustomersStatistics()
	{
		$q = <<<HEREDOC
select sum(case when u.is_admin = 0 and u.closed_on is null then 1 else 0 end) paying_users,
		sum(case when u.is_admin = 0 and MONTH(u.registered_on) = MONTH(sysdate()) then 1 else 0 end) new_users,
		sum(case when u.is_admin = 0 and MONTH(u.closed_on) = MONTH(sysdate()) and u.closed_on is not null then 1 else 0 end) abandoned_users
from `users` u
HEREDOC;
		$res = $this->db->query($q);
		return $res->row_array();
	}

	//TODO: complete if there is extra time
//	public function get_apex_data(){
//		$q = <<<HEREDOC
//select --new
//		sum(case when u.is_admin = 0 and MONTH(u.registered_on) = 1 and YEAR(u.registered_on) = YEAR(sysdate()) then 1 else 0 end) new_jan,
//from `users` u
//union
//select --abandoned
//		sum(case when u.is_admin = 0 and MONTH(u.closed_on) = MONTH(sysdate()) and u.closed_on is not null then 1 else 0 end) abandoned_users
//from `users` u
//
//select --paying
//		sum(case when u.is_admin = 0 and u.closed_on is null and YEAR(u.registered_on) = YEAR(sysdate()) then 1 else 0 end)  jan,
//		sum(case when u.is_admin = 0 and u.closed_on is null and YEAR(u.registered_on) = YEAR(sysdate()) then 1 else 0 end)  feb,
//		sum(case when u.is_admin = 0 and u.closed_on is null and YEAR(u.registered_on) = YEAR(sysdate()) then 1 else 0 end)  mar,
//		sum(case when u.is_admin = 0 and u.closed_on is null and YEAR(u.registered_on) = YEAR(sysdate()) then 1 else 0 end)  apr,
//		sum(case when u.is_admin = 0 and u.closed_on is null and YEAR(u.registered_on) = YEAR(sysdate()) then 1 else 0 end)  may,
//		sum(case when u.is_admin = 0 and u.closed_on is null and YEAR(u.registered_on) = YEAR(sysdate()) then 1 else 0 end)  jun,
//		sum(case when u.is_admin = 0 and u.closed_on is null and YEAR(u.registered_on) = YEAR(sysdate()) then 1 else 0 end)  jul,
//		sum(case when u.is_admin = 0 and u.closed_on is null and YEAR(u.registered_on) = YEAR(sysdate()) then 1 else 0 end)  aug,
//		sum(case when u.is_admin = 0 and u.closed_on is null and YEAR(u.registered_on) = YEAR(sysdate()) then 1 else 0 end)  sep,
//		sum(case when u.is_admin = 0 and u.closed_on is null and YEAR(u.registered_on) = YEAR(sysdate()) then 1 else 0 end)  oct,
//		sum(case when u.is_admin = 0 and u.closed_on is null and YEAR(u.registered_on) = YEAR(sysdate()) then 1 else 0 end)  nov,
//		sum(case when u.is_admin = 0 and u.closed_on is null and YEAR(u.registered_on) = YEAR(sysdate()) then 1 else 0 end)  dece
//from `users` u
//
//HEREDOC;
//		$res = $this->db->query($q);
//		return $res->row_array();
//	}


	public function updateServiceStatus($email, $data, $website)
	{
		$user_id = $this->getUserIdByEmail($email);
		$this->db->where('user_id', $user_id);
		$this->db->where('website', $website);
		$this->db->update('services', $data);
		return 1;
	}

	public function adminUpdateServiceStatus($email, $update_data)
	{
		$this->db->update('services', $update_data);
		return 1;
	}

	public function addNewWebsite($email,$services)
	{
		$current_user_id = $this->getUserIdByEmail($email);
		$services['user_id'] = $current_user_id;
		$this->db->insert('services', $services);
		return ($this->db->affected_rows() != 1) ? 0 : 1;
	}

	public function getWebReport($host_name){
		$res = new stdClass();
		$first_time=true;
		$status = 'IN PROGRESS';
		$counter = 0;
	do{
		$url = $this->_ssl_labs_url .'?host='. $host_name;

		if($first_time){
			$url = $this->_ssl_labs_url . '?host=' . $url . '&publish=off&startNew=on&all=done&ignoreMismatch=on';
		}else{
			sleep(10);
		}

		$tuCurl = curl_init();

		curl_setopt($tuCurl, CURLOPT_URL, $url);
		curl_setopt($tuCurl, CURLOPT_PORT , 443);
		curl_setopt($tuCurl, CURLOPT_VERBOSE, 0);
		curl_setopt($tuCurl, CURLOPT_SSL_CIPHER_LIST, 'TLSv1.2');
		curl_setopt($tuCurl, CURLOPT_HEADER, 0);
		curl_setopt($tuCurl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($tuCurl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($tuCurl, CURLOPT_POST, 0);
		curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, 1);

		$res = json_decode(curl_exec($tuCurl));

		if(!$first_time) {
			if(isset($res->status)){
				$status = $res->status;
			}
		}else{
			$first_time=false;
		}
			$counter++;


	}while(!isset($status) || ($status != 'READY' && $status != 'ERROR' && $counter < 3));

		if(!curl_errno($tuCurl)){
			$info = curl_getinfo($tuCurl);
//			echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
			echo json_encode($res);
		} else {
			echo 'Curl error: ' . curl_error($tuCurl);
		}

	}

}
