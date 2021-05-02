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

    function detailpenyaluran() 
    {
      $this->db->order_by('id_detailpenyaluran', 'ASC');
      return $this->db->from('tbl_detailpenyaluran')
        ->get()
        ->result();
    }

    function penyaluran($id_penyaluran='') 
    {
      $this->db->select('*, tbl_akun.username as nip_pptk');
      $this->db->order_by('id_penyaluran', 'ASC');
        $this->db->where('id_penyaluran', $id_penyaluran);
        return $this->db->from('tbl_penyaluran')
          //->join('tbl_paketpekerjaan','tbl_paketpekerjaan.id_paketpekerjaan=tbl_penyaluran.id_paketpekerjaan')
          //->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_penyaluran.id_rekanan')
          ->join('tbl_akun','tbl_akun.username=tbl_penyaluran.username')
          ->join('tbl_opd','tbl_opd.kode_opd=tbl_akun.id_opd')
          
          ->get()
          ->row();
      
    }

    function detailpenyaluransurat($id_penyaluran='') 
    {
      $this->db->order_by('id_detailpenyaluran', 'ASC');
      $this->db->where('id_penyaluran', $id_penyaluran);
      return $this->db->from('tbl_detailpenyaluran')
      ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailpenyaluran.id_ssh')
      ->join('tbl_akun','tbl_akun.username=tbl_detailpenyaluran.username')
        ->get()
        ->result();
    }

}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */