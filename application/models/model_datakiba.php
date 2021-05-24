<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_datakiba extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');
	}

	function Tampildatakiba() 
    {
		
        return $this->db->from('tbl_kiba')
			->get();
    }

	public function menambahdatadatakiba($data)
	{
		$this->db->insert('tbl_kiba', $data);
	}
	
	public function updatedatadatakiba($data, $id_kiba)
	{
		$this->db->where('id_kiba', $id_kiba);
		$this->db->update('tbl_kiba', $data);
	}

	public function deletedatadatakiba($id_kiba)
	{
		$this->db->where('id_kiba', $id_kiba);
		$this->db->delete('tbl_kiba');
	}

}