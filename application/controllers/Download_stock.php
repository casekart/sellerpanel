<?php 
class Download_stock extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('user_id')) {
			$this->load->view('login');
		}else{
			$this->load->view('download_stock');
		}
	}
// 	public function table()
// {

// }
}