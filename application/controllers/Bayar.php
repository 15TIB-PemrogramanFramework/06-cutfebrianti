<?php 
/**
* 
*/
class Bayar extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('bayar_model');
		$this->load->model('member_model');
		$this->load->model('makanan_model');
		
	}

	function index()
	{
		$data['bayar'] = $this->bayar_model->ambil_data();
		$this->load->view('admin/konfirmasi_list',$data);
	}

	function tambah($id_makanan)
	{
		$username = $this->session->userdata('username');
		$makanan = $this->makanan_model->ambil_data_id($id_makanan);
		$member = $this->member_model->ambil_data_user($username);
		$data = array(
			'aksi' 				=> site_url('bayar/tambah_aksi'),
			'id_konfirmasi' 	=> set_value('id_konfirmasi'),
			
			'rek_nama' 			=> set_value('rek_nama'),
			'met_transfer'		=> set_value('met_transfer'),
			'bukti_transfer'	=> set_value('bukti_transfer'),
			'button' 			=> 'Insert'
			);
		$this->load->view('User/pembayaran',$data);
	}
	function tambah_aksi()
	{
		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/admin/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar'			=>$gbr['file_name'],
                'id_konfirmasi'		=> $this->input->post('id_konfirmasi'),
				 
				'rek_nama'	 		=> $this->input->post('rek_nama'),
				'met_transfer'	 	=> $this->input->post('met_transfer'),
				'bukti_transfer'	=> $this->input->post('bukti_transfer')                 
                );
                $this->bayar_model->tambah_data($data); //akses model untuk menyimpan ke database
                redirect('coba/makanan_member'); //jika berhasil maka akan ditampilkan view upload
            }else{
                
                redirect('coba/gagal'); //jika gagal maka akan ditampilkan form upload
            }
        }

		$data = array(
			'id_konfirmasi' 	=> $this->input->post('id_konfirmasi'),
			'id_pesan' 			=> $this->input->post('id_pesan'),
			'rek_nama'	 		=> $this->input->post('rek_nama'),
			'met_transfer'	 	=> $this->input->post('met_transfer'),
			'bukti_transfer'	=> $this->input->post('bukti_transfer')     
			);
		$this->bayar_model->tambah_data($data);
		 $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil !!</div></div>");
                redirect(site_url('bayar'));
	}


	function delete($id)
	{
		$this->bayar_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('bayar');
	}

	
	public function download($id){
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->bayar_model->ambil_data_id($id);
            
            $gambar = $fileInfo->gambar;
            //file path
            $file = 'assets/admin/uploads/'.$gambar;            
            //download file from directory
            force_download($file, NULL);
        }
    }

}

 ?>