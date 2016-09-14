<?php 
class Upload_inventory extends CI_Controller
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

if (!$this->upload->do_upload('userfile'))
{
$error = array('error' => $this->upload->display_errors());

$this->load->view('up_csv', $error);
}
else
{
$file['data'] = array('upload_data' => $this->upload->data());
$fn=$file['data']['upload_data']['file_name'];
$fp=$file['data']['upload_data']['full_path'];
$file = fopen($fp,'r');
$res=fgetcsv($file);
$a = $res;
$tn=explode('.', $fn);
$tname=$this->input->post('inventory');
while(! feof($file))
{

$b =fgetcsv($file);
if(!empty($b))
{
$c = array_combine($a, $b);
$this->mongo_db->insert($tname,$c);
}
}
fclose($file);
$this->load->view('header');
$this->load->view('upload_success');
$this->load->view('footer');
}
}
}
?>