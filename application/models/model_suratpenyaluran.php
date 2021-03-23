<?php

class Model_suratpenyaluran extends CI_Model {

	function Tampilpenyaluran() 
    {
      $id_opd=$this->session->userdata('id_opd');
      $this->db->where('tbl_akun.id_opd', $id_opd);
      $this->db->order_by('id_penyaluran', 'ASC');
        return $this->db->from('tbl_penyaluran')
          ->join('tbl_akun','tbl_akun.username=tbl_penyaluran.username')
          ->get()
          ->result();
    }

    function Getpenyaluran() 
    {
      $id_opd=$this->session->userdata('id_opd');
      $this->db->where('tbl_akun.id_opd', $id_opd);
      $this->db->order_by('id_penyaluran', 'ASC');
        return $this->db->from('tbl_penyaluran')
          ->join('tbl_akun','tbl_akun.username=tbl_penyaluran.username')
          ->get()
          ->result();
    }

    
    function GetId_suratpenyaluran($id_penyaluran='')
    {
      return $this->db->get_where('tbl_penyaluran', array('id_penyaluran' => $id_penyaluran))->row();
    }


}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */