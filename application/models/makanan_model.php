<?php 
/**
* 
*/
class makanan_model extends CI_Model
{
	public $admin			= 'admin';
	public $makanan			= 'makanan';
	public $id				= 'id_makanan';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
 	}

	function cek_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->admin)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->makanan)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->makanan,$data);
	}



	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->makanan);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->makanan,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->makanan)->row();
	}

	function get_option(){
		$this->db->select('*');
		$this->db->from('makanan');
		$query = $this->db->get();
		return $query->result();
	}
}
 ?>