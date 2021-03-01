<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_rekanan extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function menambahdatarekanan($data)
	{
		$this->db->insert('tbl_rekanan', $data);
	}
	
	public function updatedatarekanan($data, $id_rekanan)
	{
		$this->db->where('id_rekanan', $id_rekanan);
		$this->db->update('tbl_rekanan', $data);
	}

	public function deletedatarekanan($id_rekanan)
	{
		$this->db->where('id_rekanan', $id_rekanan);
		$this->db->delete('tbl_rekanan');
	}

}