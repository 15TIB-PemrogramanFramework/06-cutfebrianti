<?php 
/**
* 
*/
class makanan extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('makanan_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		//print_r($this->prodi_model->ambil_data());
		$data['makanan'] = $this->makanan_model->ambil_data();
		$this->load->view('admin/makanan_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('makanan/tambah_aksi'),
			'nama' 				=> set_value('nama'),
			'harga' 			=> set_value('harga'),
			'jenis'		 		=> set_value('jenis'),
			'deskripsi' 		=> set_value('deskripsi'),
			'id_makanan' 		=> set_value('id_makanan'),
			'button' 			=> 'Insert'
			);
		$this->load->view('admin/makanan_form',$data);
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
                'gambar' 				=>$gbr['file_name'],
                'nama_makanan' 			=> $this->input->post('nama'),
				'jenis_makanan' 		=> $this->input->post('jenis'),
				'harga_makanan' 		=> $this->input->post('harga'),
				'deskripsi_makanan' 	=> $this->input->post('deskripsi')                  
                );
                $this->makanan_model->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('makanan'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('makanan_form'); //jika gagal maka akan ditampilkan form upload
            }
        }


		$data = array(
				'gambar' 				=>$gbr['file_name'],
				'nama_makanan' 			=> $this->input->post('nama'),
				'jenis_makanan' 		=> $this->input->post('jenis'),
				'harga_makanan' 		=> $this->input->post('harga'),
				'deskripsi_makanan' 	=> $this->input->post('deskripsi')                  
                );
		$this->makanan_model->tambah_data($data);
		redirect(site_url('makanan'));
	}

	function delete($id)
	{
		$this->makanan_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('makanan');
	}

	function update($id)
	{
		$makanan = $this->makanan_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('makanan/update_aksi'),
			'nama' 				=> set_value('nama',$makanan->nama_makanan),
			'jenis' 			=> set_value('jenis',$makanan->jenis_makanan),
			'harga'		 		=> set_value('harga',$makanan->harga_makanan),
			'deskripsi' 		=> set_value('deskripsi',$makanan->deskripsi_makanan),
			'id_makanan' 		=> set_value('id_makanan',$makanan->id_makanan),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/makanan_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'gambar' 			=>$gbr['file_name'],
			'nama_makanan' 		=> $this->input->post('nama'),
			'jenis_makanan' 	=> $this->input->post('jenis'),
			'harga_makanan'		=> $this->input->post('harga'),
			'deskripsi_makanan' => $this->input->post('deskripsi')
			
			);	
		$id_makanan = $this->input->post('id_makanan');
		$this->makanan_model->edit_data($id_makanan,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
                redirect('makanan');
	}
}

 ?>