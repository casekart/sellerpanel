<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('user_id')) {
			$this->load->view('login');
		}else{
			$this->load->view('upload_orders');
		}
	}
	public function login_check()
	{
		$this->load->model('usermodel');
        $result = $this->usermodel->checkuser($_POST['username'], $_POST['password']);
        if (count($result) > 0) {
        	$this->session->set_userdata(array(
        		'user_id' => $result[0]['user_id'],
        		'user_name' => $result[0]['user_name']
        		));
        	$this->load->view('upload_orders');
        }else{
        	$this->load->view('login');
        }
	}
}