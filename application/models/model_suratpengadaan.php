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

    /*function pengadaan() 
    {
        $this->db->order_by('id_pengadaan', 'ASC');
        $this->db->where('keterangan', "Disetujui");
        return $this->db->from('tbl_pengadaan')
          ->get()
          ->result();
 
    }*/

    function detailpengadaan() 
    {
      $this->db->order_by('id_detailpengadaan', 'ASC');
      return $this->db->from('tbl_detailpengadaan')
        ->get()
        ->result();
    }

    function pengadaan($id_pengadaan='') 
    {
      $this->db->select('*, tbl_akun.username as nip_pptk');
      $this->db->order_by('id_pengadaan', 'ASC');
        $this->db->where('id_pengadaan', $id_pengadaan);
        return $this->db->from('tbl_pengadaan')
          ->join('tbl_paketpekerjaan','tbl_paketpekerjaan.id_paketpekerjaan=tbl_pengadaan.id_paketpekerjaan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->join('tbl_akun','tbl_akun.username=tbl_pengadaan.username')
          ->join('tbl_opd','tbl_opd.kode_opd=tbl_akun.id_opd')
          
          ->get()
          ->row();
      
    }

    function detailpengadaansurat($id_pengadaan='') 
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