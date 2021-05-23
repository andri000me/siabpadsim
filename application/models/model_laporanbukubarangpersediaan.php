<?php

class Model_laporanbukubarangpersediaan extends CI_Model {

  function Tampillaporanbukubarangpersediaan() 
  {
      $this->db->order_by('id_mutasi', 'ASC');
      $this->db->where('tbl_mutasi.statuspenyaluran', "Sudah Disalurkan");
      $this->db->group_by('tahun_pesan');
      return $this->db->from('tbl_mutasi')
        ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_mutasi.id_rekanan')
        ->get()
        ->result();
    
  }

  function TampilOrder() 
  {
    $this->db->order_by('id_detailmutasi', 'ASC');
    return $this->db->from('tbl_detailmutasi')
      ->get()
      ->result();
    
  }

  function Gettahun_pesan($tahun_order)
  {
      $this->db->select('*');
      $this->db->select_sum('tbl_detailmutasi.total_barang_in');
      $this->db->select_sum('tbl_detailmutasi.total_barang_out');
      $this->db->order_by('id_detailmutasi', 'ASC');    
      $this->db->or_where('tbl_mutasi.statusorder', 'Selesai');    
      $this->db->or_where('tbl_mutasi.statuspenyaluran', 'Sudah Disalurkan');  
      $this->db->where('tahun_order',$tahun_order); 
      $this->db->group_by('tbl_detailmutasi.id_ssh');
      return $this->db->from('tbl_detailmutasi')
        ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailmutasi.id_ssh')
        ->join('tbl_mutasi','tbl_mutasi.id_mutasi=tbl_detailmutasi.id_mutasi')    
        ->get()
        ->result();
  }

  function GetId_Print($id_mutasi='') 
  {
    return $this->db->get_where('tbl_mutasi', array('id_mutasi' => $id_mutasi))
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_mutasi.id_rekanan')
          ->row();
    
  }

  function Getid_mutasi($id_mutasi='')
  {
    return $this->db->get_where('tbl_mutasi', array('id_mutasi' => $id_mutasi))->row();
  }

    

}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */