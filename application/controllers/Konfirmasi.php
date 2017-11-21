<?php 
/**
* 
*/
class Konfirmasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('konfirmasi_model');
	}

	function index()
	{
		$data['konfirmasi'] = $this->konfirmasi_model->ambil_data();
		$this->load->view('admin/konfirmasi_list',$data);
	}

	public function download($id){
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->konfirmasi_model->ambil_data_id($id);
            
            $bukti_transfer = $fileInfo->bukti_transfer;
            //file path
            $file = 'assets/admin/uploads/'.$bukti_transfer;            
            //download file from directory
            force_download($file, NULL);
        }
    }
}

 ?>