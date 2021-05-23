<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_nomorsk extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		//Do your magic here
        $this->load->library('session');
	}

	function GetNomorsk()
    {
		$id_opd = $this->session->userdata('id_opd');
        $this->db->where('id_opd', $id_opd);
        $this->db->order_by('no_sk', 'ASC');
        return $this->db->from('tbl_sk')
    		->get();
    }

	public function menambahdatanomorsk($data)
	{
		$this->db->insert('tbl_sk', $data);
	}
	
	public function updatedatanomorsk($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_sk', $data);
	}

	public function deletedatanomorsk($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_sk');
	}

}