<?php 
/**
* upload the file....
*/
class Upload extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('user_id')) {
			$this->load->view('login');
		}else{
			$this->load->view('upload');
		}
	}
	public function upload_pnl(){
		$f_data ['submit'] = false;
		if (isset ( $_POST ['submit'] )) {
			$ext = pathinfo ( $_FILES ['filename'] ['name'], PATHINFO_EXTENSION );
			if ($ext === "csv") {
				$f_data['submit'] = true;
				// Read uploaded file one by one
				if (($handle = fopen ( $_FILES ['filename'] ['tmp_name'], "r" )) !== FALSE) {
					$this->load->model('order_model');
					$row = 0;
					while ( ($input_data = fgetcsv ( $handle, "," )) !== FALSE ) {
						$column_count = count($input_data);
						if ($row == 0) {
							$result = mysql_query("describe `orders_main`");
							while ($fields = mysql_fetch_array($result)){ 
								$data[$fields['Field']] = "";
								$columns[] = $fields['Field'] ;
							}
							array_shift($columns);
						}else{
							if ($column_count > 15) {
								unset($columns[28]);
								array_unshift($input_data, md5($input_data[4].$input_data[5]));
								$this->order_model->update_main_table(array_combine($columns,$input_data));
							}elseif ($column_count == 15) {
								$this->order_model->insert_pnl_data($input_data);
							}
						}
						$row++;
					}
				}

			}
		}
		$this->load->view('upload_pnl', $f_data);
	}
}

?>