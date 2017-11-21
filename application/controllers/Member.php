	<?php 
	/**
	* 
	*/
	class Member extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('member_model');
			$this->load->helper('url');
		}

		function index()
		{
			//print_r($this->member_model->ambil_data());
			$data['member'] = $this->member_model->ambil_data();
			$this->load->view('berhasil',$data);
		}

		function data_member()
		{
			//print_r($this->member_model->ambil_data());
			$data['member'] = $this->member_model->ambil_data();
			$this->load->view('admin/member_list',$data);
		}

		function daftar()
		{
			$data = array(
				'aksi' 			=> site_url('Member/daftar_aksi'),
				'email_member' 	=> set_value('email_member'),
				'password' 		=> set_value('password'),			
				'nama_member' 	=> set_value('nama_member'),
				'alamat_member' => set_value('alamat_member'),
				'button' 		=> 'Submit'
				);
			
			redirect('Login');
		}

		function daftar_aksi()
		{
			$data = array(
				'email_member' 		=> $this->input->post('email_member'),
				'password'		 	=> $this->input->post('password'),
				'nama_member' 		=> $this->input->post('nama_member'),
				'alamat_member' 	=> $this->input->post('alamat_member')
				);
			$this->member_model->tambah_data($data);
			redirect('Login');

		}

		function login()
		{
			$this->load->view('login');
		}

		function berhasil()
		{
			$this->load->view('berhasil');
		}

		function home_user()
		{
			$this->load->view('user/home_user');
		}




	/* ADMIN */

		function delete($id)
		{
			$this->member_model->hapus_data($id);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
			redirect(site_url('member/data_member'));
		}

		function update($id)
		{
			$member = $this->member_model->ambil_data_id($id);
			$data = array(
				'aksi' 				=> site_url('member/update_aksi'),
				'email_member' 		=> set_value('email_member',$member->email_member),
				'password' 			=> set_value('password',$member->password),
				'nama_member'		=> set_value('nama_member',$member->nama_member),
				'alamat_member' 	=> set_value('alamat_member',$member->alamat_member),
				'id_member' 		=> set_value('id_member',$member->id_member),
				'button' 			=> 'Update'
				);
			$this->load->view('admin/member_form',$data);		
		}

		function update_aksi()
		{
			$data = array(
				'email_member' 		=> $this->input->post('email_member'),
				'password'		 	=> $this->input->post('password'),
				'nama_member' 		=> $this->input->post('nama_member'),
				'alamat_member' 	=> $this->input->post('alamat_member')
				);	
			$id_member = $this->input->post('id_member');
			$this->member_model->edit_data($id_member,$data);
			$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
	        redirect('member/data_member');
		}

		function mau_daftar()
		{
			
			$this->load->view('user/daftar');
		}
	}

	 ?>