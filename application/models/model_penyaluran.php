<?php

class Model_penyaluran extends CI_Model {

	function Tampilpenyaluran() 
    {
        $this->db->order_by('id_mutasi', 'ASC');
        $this->db->where('jenis_mutasi', 'Penyaluran');
        return $this->db->from('tbl_mutasi')
          ->join('tbl_akun','tbl_akun.username=tbl_mutasi.username')
          ->get()
          ->result();
    }

    function Getpenyaluran() 
    {
        $username=$this->session->userdata('username');
        $this->db->where('jenis_mutasi', 'Penyaluran');
        $this->db->order_by('id_mutasi', 'ASC');
        return $this->db->from('tbl_mutasi')
        ->join('tbl_akun','tbl_akun.username=tbl_mutasi.username')
          ->where('tbl_mutasi.username', $username)
          ->get()
          ->result();
    }

    
    function Getid($id_mutasi='')
    {
      return $this->db->get_where('tbl_mutasi', array('id_mutasi' => $id_mutasi))->row();
    }
    function deletedatapenyaluran($id_mutasi)
    {
        $this->db->delete('tbl_mutasi',array('id_mutasi' => $id_mutasi));
    }


    public function menambahdatapenyaluran($data)
	{
		$this->db->insert('tbl_mutasi', $data);
	}
}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */