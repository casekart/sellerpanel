<?php 
/**
* Orders csv upload
*/
class Orders extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('user_id')) {
			$this->load->view('login');
		}else{
			$this->load->view('orders');
		}
	}
}
?>