<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_rekanan extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');
	}

	function Tampilrekanan() 
    {
		
		$id_opd=$this->session->userdata('id_opd');
        $this->db->order_by('nama_rekanan', 'ASC');
        $this->db->where('tbl_rekanan.id_opd', $id_opd);
        return $this->db->from('tbl_rekanan')
			->join('tbl_akun','tbl_akun.username=tbl_rekanan.username') 
			->get();
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