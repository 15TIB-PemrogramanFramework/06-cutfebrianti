<?php 
/**
* 
*/
class Pesan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pesan_model');
		$this->load->model('member_model');
		$this->load->model('makanan_model');
	}

	function index()
	{
		$data['pesan'] = $this->pesan_model->ambil_data();
		$this->load->view('admin/pesan_list',$data);
	}
	
	function tambah($id_makanan)
	{
		$username = $this->session->userdata('username');
		$makanan = $this->makanan_model->ambil_data_id($id_makanan);
		$member = $this->member_model->ambil_data_user($username);
		$data = array(
			'aksi' 				=> site_url('pesan/tambah_aksi'),
			'id_pesan' 			=> set_value('id_pesan'),
			'id_member' 		=> set_value('id_member',$member->id_member),
			'id_makanan'		=> set_value('id_makanan',$makanan->id_makanan),
			'jumlah_pesanan' 	=> set_value('jumlah_pesanan'),
			'status_pesan' 		=> set_value('status_pesan'),
			'button' 			=> 'Insert'
			);
		$this->load->view('User/pemesanan',$data);
	}

	

	function tambah_aksi()
	{

		$data = array(
			'id_pesan' 			=> $this->input->post('id_pesan'),
			'id_member' 		=> $this->input->post('id_member'),
			'id_makanan' 		=> $this->input->post('id_makanan'),
			'jumlah_pesanan'	=> $this->input->post('jumlah_pesanan'),
			'status_pesan'		=> $this->input->post('status_pesan')
			);
		$this->pesan_model->tambah_data($data);
		 $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil !!</div></div>");
                redirect('coba');
	}


	function delete($id)
	{
		$this->pesan_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('pesan');
	}

	function update($id)
	{
		$pesan = $this->pesan_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('pesan/update_aksi'),
			'status' 			=> set_value('status',$pesan->status_pesan),
			'id_pesan' 			=> set_value('id_pesan',$pesan->id_pesan),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/pesan_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'status_pesan' 		=> $this->input->post('status')
			);	
		$id_pesan = $this->input->post('id_pesan');
		$this->pesan_model->edit_data($id_pesan,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('pesan');
	}

	function pemesanan(){

		$this->load->view('User/pemesanan');
	}

}

 ?>