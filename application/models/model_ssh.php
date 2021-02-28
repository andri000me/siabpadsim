<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_ssh extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function menambahdatassh($data)
	{
		$this->db->insert('tbl_ssh', $data);
	}
	
	public function updatedatassh($data, $id_ssh)
	{
		$this->db->where('id_ssh', $id_ssh);
		$this->db->update('tbl_ssh', $data);
	}

	public function deletedatassh($id_ssh)
	{
		$this->db->where('id_ssh', $id_ssh);
		$this->db->delete('tbl_ssh');
	}

}