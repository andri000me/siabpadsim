<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_stnk extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');
	}

	function Tampilstnk() 
    {

		return $this->db->from('tbl_kiba')
		->join('tbl_opd','tbl_opd.id_opd=tbl_kiba.id_opd')
		->get();
		
    }

	function caristnk() 
	{
		$berlaku_sampai = $this->input->post('berlaku_sampai');

		$this->db->where('berlaku_sampai <=',$berlaku_sampai);
        return $this->db->from('tbl_kibb')
		->join('tbl_opd','tbl_opd.id_opd=tbl_kibb.id_opd')
			->get();
	}
	

}