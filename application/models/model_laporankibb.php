<?php

class Model_laporankibb extends CI_Model {

  function Tampillaporanrekap() 
  {
      $this->db->order_by('id_kibb', 'ASC');
      $this->db->group_by('tahun_pembelian');
      return $this->db->from('tbl_kibb')
        ->get()
        ->result();
  }

  function Getmutasi($tahun_pembelian)
  {
      $this->db->select('*');
      $this->db->where('tahun_pembelian =',$tahun_pembelian);
      $this->db->group_by('roda_dua');
      $this->db->group_by('roda_tiga');
      $this->db->group_by('roda_empat');
      $this->db->group_by('roda_enam');
      return $this->db->from('tbl_kibb') 
        ->join('tbl_opd','tbl_opd.id_opd=tbl_kibb.id_opd')
        ->get()
        ->result();
  }

  function Getsaldoawal($tahun_pembelian)
  {
      $this->db->select('*');
      $this->db->where('tahun_pembelian <',$tahun_pembelian);
      $this->db->group_by('roda_dua');
      $this->db->group_by('roda_tiga');
      $this->db->group_by('roda_empat');
      $this->db->group_by('roda_enam');
      return $this->db->from('tbl_kibb') 
        ->join('tbl_opd','tbl_opd.id_opd=tbl_kibb.id_opd')
        ->get()
        ->result();
  }

  function Tampillaporanrekapjeniskendaraan() 
  {
      $this->db->order_by('id_kibb', 'ASC');
      $this->db->group_by('tahun_pembelian');
      return $this->db->from('tbl_kibb')
        ->get()
        ->result();
  }

  function Getrekapjeniskendaraan($tahun_pembelian)
  {
      $this->db->select('*');
      $this->db->select_sum('roda_dua','roda_dua');
      $this->db->select_sum('roda_tiga','roda_tiga');
      $this->db->select_sum('roda_empat','roda_empat');
      $this->db->select_sum('roda_enam','roda_enam');
      $this->db->where('tahun_pembelian =',$tahun_pembelian);
      $this->db->group_by('tbl_kibb.id_opd');
      return $this->db->from('tbl_kibb') 
        ->join('tbl_opd','tbl_opd.id_opd=tbl_kibb.id_opd')
        ->get()
        ->result();
  }

  function Tampillaporanopd() 
  {
      $this->db->order_by('id_kibb', 'ASC');
      return $this->db->from('tbl_kibb')
        ->get()
        ->result();
  }

  function Getopd($id_opd)
  {
      $this->db->select('*');
      $this->db->where('tbl_kibb.id_opd',$id_opd);
      return $this->db->from('tbl_kibb') 
        ->join('tbl_opd','tbl_opd.id_opd=tbl_kibb.id_opd')
        ->get()
        ->result();
  }



















  function Getrekap_a($tahun_pembelian)
  {
      $this->db->select('*');
      $this->db->where('tahun_pembelian <=',$tahun_pembelian);
      $this->db->group_by('roda_dua');
      $this->db->group_by('roda_tiga');
      $this->db->group_by('roda_empat');
      $this->db->group_by('roda_enam');
      return $this->db->from('tbl_kibb') 
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