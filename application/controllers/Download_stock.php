<?php 
class Download_stock extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('user_id')) {
			$this->load->view('login');
		}else{

			$data['user_portal'] = $this->mongo_db->get('user_portal');
			$this->load->view('download_stock',$data);
			// $this->load->view('download_stock');
		}
	}
	public function table()
	{
		$data['user_portal'] = $this->mongo_db->get('user_portal');
		$this->load->view('download_stock',$data);
	}
	public function change_status()
	{
		$condition = array('_id' => new MongoId($id));
		$data = array('city' => 'surat');
		$this->mongo_db->where($condition);
		$this->mongo_db->update('user',$data);
	}
}