<?php

class Model_suratpengadaan extends CI_Model {

	function Tampilpengadaan() 
    {
      $id_opd=$this->session->userdata('id_opd');
      $this->db->where('tbl_akun.id_opd', $id_opd);
      $this->db->order_by('id_pengadaan', 'ASC');
        return $this->db->from('tbl_pengadaan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->join('tbl_akun','tbl_akun.username=tbl_pengadaan.username')
          ->get()
          ->result();
    }

    function Getpengadaan() 
    {
      $id_opd=$this->session->userdata('id_opd');
      $this->db->where('tbl_akun.id_opd', $id_opd);
      $this->db->order_by('id_pengadaan', 'ASC');
        return $this->db->from('tbl_pengadaan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->join('tbl_akun','tbl_akun.username=tbl_pengadaan.username')
          ->get()
          ->result();
    }

    
    function GetId_suratpengadaan($id_pengadaan='')
    {
      return $this->db->get_where('tbl_pengadaan', array('id_pengadaan' => $id_pengadaan))->row();
    }


}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */