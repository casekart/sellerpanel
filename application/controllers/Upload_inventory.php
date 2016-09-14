<?php 
/**
* upload the inventory file....
*/
class Upload_orders extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('user_id')) {
			$this->load->view('login');
		}else{
			$this->load->view('upload_inventory');
		}
	}
	public function do_upload()
	{
		$config['upload_path']          ='assets/csvfiles/';
		$config['allowed_types']        = 'csv';
		$config['max_size']             = 10000000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_inventory', $error);
		}
		else
		{	
			$file['data'] = array('upload_data' => $this->upload->data());
			$fn=$file['data']['upload_data']['file_name'];
			$fp=$file['data']['upload_data']['full_path'];
			$file = fopen($fp,"r");
			$res=fgetcsv($file);
			$a = $res;
			$tn=explode(".", $fn);
			$tname='inventory';
			array_unshift($a,"_id");
			while(! feof($file))
			{
				$b =fgetcsv($file);
				if(!empty($b))
				{
					// $sku = $this->mongo_db->get_where(array('sku'=>$b[6]));
					// var_dump($sku);
					$b[3] = new MongoDate(strtotime($b[3]));
					$b[4] = new MongoDate(strtotime($b[4]));
					$b[9] = mb_convert_encoding($b[9], 'ISO-8859-1', 'UTF-8');
					array_unshift($b, $b[7].$b[8]);
					$c = array_combine($a, $b);
					$this->mongo_db->insert($tname,$c);
				}
			}
			fclose($file);
		}
	}
}

?>