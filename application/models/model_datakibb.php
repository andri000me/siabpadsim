<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_datakibb extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');
	}

	function Tampildatakibb() 
    {
		
        return $this->db->from('tbl_kibb')
			->join('tbl_opd','tbl_opd.id_opd=tbl_kibb.id_opd')
			->get();
    }

	public function menambahdatadatakibb($data)
	{
		$this->db->insert('tbl_kibb', $data);
	}
	
	public function updatedatadatakibb($data, $id_kibb)
	{
		$this->db->where('id_kibb', $id_kibb);
		$this->db->update('tbl_kibb', $data);
	}

	public function deletedatadatakibb($id_kibb)
	{
		$this->db->where('id_kibb', $id_kibb);
		$this->db->delete('tbl_kibb');
	}

}