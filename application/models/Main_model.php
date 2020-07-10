<?php


class Main_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
		$this->load->library('encryption');
		$this->_waf_url = "https://enditxqygmuje.x.pipedream.net/";
	}

	public function login($email, $password)
	{
//		$query = $this->db->get_where('users', array('email' => $email));
//		if ($query->num_rows() > 0) {
//			$row_arr = $query->row_array();
//			$stored_password = $row_arr['password'];
//			if ($this->encryption->decrypt($stored_password) === $password) {
//				if ($row_arr['is_admin']) {
//					return 'admin';
//				} else {
//					return 'login';
//				}
//			} else {
//				return false;
//			}
//		} else {
//			return false;
//		}

		$data = "{\"email\":\"$email\",\"password\":\"$password\"}";
		$res = $this->sendDataToElroWaf($data,"login");
		return $res;
	}

	public function sendDataToElroWaf($data,$endpoint=""){
		$tuCurl = curl_init();
		curl_setopt($tuCurl, CURLOPT_URL, $this->_waf_url.$endpoint);
		curl_setopt($tuCurl, CURLOPT_PORT , 443);
		curl_setopt($tuCurl, CURLOPT_VERBOSE, 0);
		curl_setopt($tuCurl, CURLOPT_SSL_CIPHER_LIST, 'TLSv1.2');
		curl_setopt($tuCurl, CURLOPT_HEADER, 0);
		curl_setopt($tuCurl, CURLOPT_SSLVERSION, 1);
		curl_setopt($tuCurl, CURLOPT_POST, 1);
		curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($tuCurl, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Content-length: ".strlen($data)));

		$tuData = curl_exec($tuCurl);
		if(!curl_errno($tuCurl)){
			$info = curl_getinfo($tuCurl);
//			echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
			echo $tuData;
		} else {
			echo 'Curl error: ' . curl_error($tuCurl);
		}
	}

	public function getActiveServices($email)
	{
//		$user_id = $this->getUserIdByEmail($email);
//		if ($user_id > 0) {
//			$query_2 = $this->db->get_where('services', array('user_id' => $user_id));
//			return $query_2->result_array();
//		} else {
//			return false;
//		}
		$data = "{\"email\":\"$email\"}";
		return $this->sendDataToElroWaf($data,"getActiveServices");
	}

	public function register($data)
	{
//		$this->db->insert('users', $data['users']);
//		if ($this->db->affected_rows() > 0) {
//			$current_user_id = $this->getUserIdByEmail($data['users']['email']);
//			$data['services']['user_id'] = $current_user_id;
//			$this->db->insert('services', $data['services']);
//			return ($this->db->affected_rows() != 1) ? 0 : 1;
//		} else {
//			if ((($this->db->error())['code']) == 1062) {
//				return -1;
//			}
//		}
		return $this->sendDataToElroWaf($data,"register");
	}

	public function getUserIdByEmail($email)
	{
		//TODO: move entire function to Elro
//		$query = $this->db->get_where('users', array('email' => $email));
//		if ($query->num_rows() > 0) {
//			$user_id = $query->row('id');
//		} else {
//			$user_id = -1;
//		}
//		return $user_id;
	}

	public function getUsersData()
	{
//		$q = <<<HEREDOC
//select u.email,u.active,u.registered_on,s.* from users u join services s on u.id = s.user_id where u.is_admin = 0
//HEREDOC;
//		$res = $this->db->query($q);
//		return $res->result_array();
		$data= "{}";
		return $this->sendDataToElroWaf($data,"getUsersData");
	}

	public function get_costumers_statistics()
	{
//		$q = <<<HEREDOC
//select sum(case when u.is_admin = 0 and u.closed_on is null then 1 else 0 end) paying_users,
//		sum(case when u.is_admin = 0 and MONTH(u.registered_on) = MONTH(sysdate()) then 1 else 0 end) new_users,
//		sum(case when u.is_admin = 0 and MONTH(u.closed_on) = MONTH(sysdate()) and u.closed_on is not null then 1 else 0 end) abandoned_users
//from `users` u
//HEREDOC;
//		$res = $this->db->query($q);
//		return $res->row_array();
		$data= "{}";
		return $this->sendDataToElroWaf($data,"get_costumers_statistics");
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


	public function updateServiceStatus($email, $update_data, $website)
	{
//		$user_id = $this->getUserIdByEmail($email);
//		$this->db->where('user_id', $user_id);
//		$this->db->where('website', $website);
//		$this->db->update('services', $update_data);
//		return 1;
		$data = "{\"email\":\"$email\",\"update_data\":\"$update_data\",\"website\":\"$website\"}";
		return $this->sendDataToElroWaf($data,"updateServiceStatus");
	}

	public function adminUpdateServiceStatus($email, $update_data)
	{
//		$this->db->update('services', $update_data);
//		return 1;
		$data = "{\"email\":\"$email\",\"update_data\":\"$update_data\"}";
		return $this->sendDataToElroWaf($data,"adminUpdateServiceStatus");
	}

	public function addNewWebsite($email,$services)
	{
//		$current_user_id = $this->getUserIdByEmail($email);
//		$services['user_id'] = $current_user_id;
//		$this->db->insert('services', $services);
//		return ($this->db->affected_rows() != 1) ? 0 : 1;

		$data = "{\"email\":\"$email\",\"services\":\"$services\"}";
		return $this->sendDataToElroWaf($data,"addNewWebsite");
	}
}
