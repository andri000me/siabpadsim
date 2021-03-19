<?php

class Model_PengadaanPA extends CI_Model {

	function Tampilpengadaan() 
    {
      $id_opd=$this->session->userdata('id_opd');
      $this->db->where('tbl_akun.id_opd', $id_opd);
      $this->db->order_by('keterangan', 'ASC');
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

    
    function GetId_PengadaanPA($id_pengadaan='')
    {
      return $this->db->get_where('tbl_pengadaan', array('id_pengadaan' => $id_pengadaan))->row();
    }

    function Lihatlistpengadaan($id_pengadaan='') 
    {
        $this->db->order_by('id_detailpengadaan', 'ASC');
        $this->db->where('id_pengadaan', $id_pengadaan);
        return $this->db->from('tbl_detailpengadaan')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailpengadaan.id_ssh')
          ->get()
          ->result();
    }


}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */