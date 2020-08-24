<?php


class External_model extends CI_Model
{
	public function __construct()
	{
//		$this->load->database();
		$this->load->library('encryption');
		$this->_waf_url = "http://127.0.0.1:5000/";
		$this->_ssl_labs_url = "https://api.ssllabs.com/api/v2/analyze";
	}

	public function login($email, $password)
	{
		$data = array("email" => $email, "password" => $password);
		return $this->sendDataToElroWaf(json_encode($data),"login");
	}

	public function register($data)
	{
		return $this->sendDataToElroWaf(json_encode($data),"register");
	}

	public function getActiveServices($email)
	{
		$data = array("email"=> $email);
		return $this->sendDataToElroWaf(json_encode($data),"getActiveServices");
	}

	public function getUsersData()
	{
		$data= "{}";
		return $this->sendDataToElroWaf($data,"getUsersData");
	}

	//TODO: implement in waf if there is extra time
	public function getCustomersStatistics()
	{
//		$q = <<<HEREDOC
//		select sum(case when u.is_admin = 0 and u.closed_on is null then 1 else 0 end) paying_users,
//		sum(case when u.is_admin = 0 and MONTH(u.registered_on) = MONTH(sysdate()) then 1 else 0 end) new_users,
//		sum(case when u.is_admin = 0 and MONTH(u.closed_on) = MONTH(sysdate()) and u.closed_on is not null then 1 else 0 end) abandoned_users
//		from `users` u
//HEREDOC;
//		$res = $this->db->query($q);
//		return $res->row_array();
		$data= "{}";
		return $this->sendDataToElroWaf($data,"getCustomersStatistics");
	}

	public function getBlockCountForUser()
	{
//		$q = <<<HEREDOC
//		select sum(case when u.is_admin = 0 and u.closed_on is null then 1 else 0 end) paying_users,
//		sum(case when u.is_admin = 0 and MONTH(u.registered_on) = MONTH(sysdate()) then 1 else 0 end) new_users,
//		sum(case when u.is_admin = 0 and MONTH(u.closed_on) = MONTH(sysdate()) and u.closed_on is not null then 1 else 0 end) abandoned_users
//		from `users` u
//HEREDOC;
//		$res = $this->db->query($q);
//		return $res->row_array();
		$data= "{}";
		return $this->sendDataToElroWaf($data,"getCustomersStatistics");
	}

	public function updateServiceStatus($email, $update_data, $website)
	{
		$data = array("email"=>$email, "update_data"=>$update_data,"website"=>$website);
		return $this->sendDataToElroWaf(json_encode($data),"updateServiceStatus");
	}

	public function adminUpdateServiceStatus($email, $update_data)
	{
//		$this->db->update('services', $update_data);
//		return 1;
		$data = array("email"=>$email, "update_data"=>$update_data);

		return $this->sendDataToElroWaf(json_encode($data),"adminUpdateServiceStatus");
	}

	public function addNewWebsite($email,$services)
	{
		$data = array("email" => $email, "services" => $services);
		return $this->sendDataToElroWaf(json_encode($data),"addNewWebsite");
	}

	public function sendDataToElroWaf($data,$endpoint=""){
		$tuCurl = curl_init();
		curl_setopt($tuCurl, CURLOPT_URL, $this->_waf_url.$endpoint);
//		curl_setopt($tuCurl, CURLOPT_PORT , 443);
		curl_setopt($tuCurl, CURLOPT_VERBOSE, 0);
//		curl_setopt($tuCurl, CURLOPT_SSL_CIPHER_LIST, 'TLSv1.2');
		curl_setopt($tuCurl, CURLOPT_HEADER, 0);
//		curl_setopt($tuCurl, CURLOPT_SSL_VERIFYPEER, false);
//		curl_setopt($tuCurl, CURLOPT_SSL_VERIFYHOST, false);
//		curl_setopt($tuCurl, CURLOPT_SSLVERSION, 1);
		curl_setopt($tuCurl, CURLOPT_POST, 1);
		curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($tuCurl, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Content-length: ".strlen($data)));

		$tuData = curl_exec($tuCurl);
		if(!curl_errno($tuCurl)){
			$info = curl_getinfo($tuCurl);
//			echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
			return $tuData;
		} else {
			return 'Curl error: ' . curl_error($tuCurl);
		}
	}

	public function getWebReport($host_name)
	{
		$res = new stdClass();
		$first_time = true;
		$status = 'IN PROGRESS';
		$counter = 0;
		do {
			$url = $this->_ssl_labs_url . '?host=' . $host_name;

			if ($first_time) {
				$url = $this->_ssl_labs_url . '?host=' . $url . '&publish=off&startNew=on&all=done&ignoreMismatch=on';
			} else {
				sleep(4);
			}

			$tuCurl = curl_init();

			curl_setopt($tuCurl, CURLOPT_URL, $url);
			curl_setopt($tuCurl, CURLOPT_PORT, 443);
			curl_setopt($tuCurl, CURLOPT_VERBOSE, 0);
			curl_setopt($tuCurl, CURLOPT_SSL_CIPHER_LIST, 'TLSv1.2');
			curl_setopt($tuCurl, CURLOPT_HEADER, 0);
			curl_setopt($tuCurl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($tuCurl, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($tuCurl, CURLOPT_POST, 0);
			curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, 1);

			$res = json_decode(curl_exec($tuCurl));

			if (!$first_time) {
				if (isset($res->status)) {
					$status = $res->status;
				}
			} else {
				$first_time = false;
			}
			$counter++;


		} while (!isset($status) || ($status != 'READY' && $status != 'ERROR' && $counter < 10));

		if (!curl_errno($tuCurl)) {
			$info = curl_getinfo($tuCurl);
			return ($res);
		} else {
			return 'Curl error: ' . curl_error($tuCurl);
		}
	}

	public function getUserProtectionGrade($host_name)
	{
		$data = "{\"host_name\":\"$host_name\"}";
		return json_decode($this->sendDataToElroWaf($data,"userProtector"));
	}
}
