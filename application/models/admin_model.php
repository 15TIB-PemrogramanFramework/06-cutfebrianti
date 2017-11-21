<?php 
/**
* 
*/
class admin_model extends CI_Model
{
	public $nama_tabel	= 'admin';
	public $id			= 'username';
	//public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login_adm($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_tabel)->row();
	}



}
 ?>