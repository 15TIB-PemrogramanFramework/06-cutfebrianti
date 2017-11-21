<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class coba extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('makanan_model');
        $this->load->model('member_model');
        $this->load->model('pesan_model');

    }

    public function index()
    {
        $data['makanan'] = $this->makanan_model->ambil_data();
    	$this->load->view('User/home_user',$data);
    }
    public function login(){
    	$this->load->view('login');
    }

    public function loginAdmin()
    {
    	$this->load->view('Admin/home_admin');
    }

     public function loginUser()
    {
        $data['makanan'] = $this->makanan_model->ambil_data();
    	$this->load->view('User/home_user',$data);
    }

     public function daftar(){
        $this->load->view('User/registrasi');
    }
    public function pemesanan()
    {
        $this->load->view('pemesanan');
    }

    public function status_pesan($id)
    {
        $member = $this->member_model->ambil_data($id);
        //$id2 = $member->id_member;
        $data['pemesanan'] = $this->pesan_model->ambil_data_id($member->id_member);
      
        $this->load->view('status_pesan',$data);
    }

    public function makanan_member()
    {
        $data['makanan'] = $this->makanan_model->ambil_data();
        
        $this->load->view('makanan_member', $data);
    }

}