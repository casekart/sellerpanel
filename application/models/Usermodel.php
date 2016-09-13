<?php 
/**
* 
*/
class Usermodel extends CI_Model
{
	function checkuser($username,$password){
		$data = array(
			'user_name'=>$username,
			'password'=>$password
			);
		$data = $this->mongo_db->get_where('customer_login_details',$data);
		return $data;
	}
}

?>