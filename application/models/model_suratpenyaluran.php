<?php

class Model_suratpenyaluran extends CI_Model {

	function Tampilpenyaluran() 
    {
      $id_opd=$this->session->userdata('id_opd');
      $this->db->where('tbl_akun.id_opd', $id_opd);
      $this->db->where('tbl_mutasi.jenis_mutasi', 'Penyaluran');
      $this->db->order_by('id_mutasi', 'ASC');
        return $this->db->from('tbl_mutasi')
          ->join('tbl_akun','tbl_akun.username=tbl_mutasi.username')
          ->get()
          ->result();
    }

    function Getpenyaluran() 
    {
      $id_opd=$this->session->userdata('id_opd');
      $this->db->where('tbl_akun.id_opd', $id_opd);
      $this->db->where('tbl_mutasi.jenis_mutasi', 'Penyaluran');
      $this->db->order_by('id_mutasi', 'ASC');
        return $this->db->from('tbl_mutasi')
          ->join('tbl_akun','tbl_akun.username=tbl_mutasi.username')
          ->get()
          ->result();
    }

    
    function GetId_suratpenyaluran($id_mutasi='')
    {
      return $this->db->get_where('tbl_mutasi', array('id_mutasi' => $id_mutasi))->row();
    }

    function detailpenyaluran() 
    {
      $this->db->order_by('id_detailmutasi', 'ASC');
      return $this->db->from('tbl_detailmutasi')
        ->get()
        ->result();
    }

    function penyaluran($id_mutasi='') 
    {
      $this->db->select('*, tbl_akun.username as nip_pptk');
      $this->db->order_by('id_mutasi', 'ASC');
        $this->db->where('id_mutasi', $id_mutasi);
        return $this->db->from('tbl_mutasi')
          //->join('tbl_paketpekerjaan','tbl_paketpekerjaan.id_paketpekerjaan=tbl_mutasi.id_paketpekerjaan')
          //->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_mutasi.id_rekanan')
          ->join('tbl_akun','tbl_akun.username=tbl_mutasi.username')
          ->join('tbl_opd','tbl_opd.kode_opd=tbl_akun.id_opd')
          
          ->get()
          ->row();
      
    }

    function detailpenyaluransurat($id_mutasi='') 
    {
      $this->db->order_by('id_detailmutasi', 'ASC');
      $this->db->where('id_mutasi', $id_mutasi);
      return $this->db->from('tbl_detailmutasi')
      ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailmutasi.id_ssh')
      ->join('tbl_akun','tbl_akun.username=tbl_detailmutasi.username')
        ->get()
        ->result();
    }

}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */