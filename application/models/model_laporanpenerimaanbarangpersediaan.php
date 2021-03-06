<?php

class Model_laporanpenerimaanbarangpersediaan extends CI_Model {

	function Tampillaporanpenerimaanbarangpersediaan() 
    {
        $this->db->order_by('id_mutasi', 'ASC');
        $this->db->where('jenis_mutasi', "Pengadaan");
        $this->db->where('tbl_mutasi.statusorder', "Selesai");
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
        $this->db->order_by('id_detailmutasi', 'ASC');    
        $this->db->where('tbl_mutasi.jenis_mutasi', "Pengadaan");
        $this->db->where('tbl_mutasi.statusorder', "Selesai");    
        $this->db->where('tahun_order',$tahun_order);
        return $this->db->from('tbl_detailmutasi')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailmutasi.id_ssh')
          ->join('tbl_mutasi','tbl_mutasi.id_mutasi=tbl_detailmutasi.id_mutasi')          
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_mutasi.id_rekanan')             
          ->join('tbl_akun','tbl_akun.username=tbl_mutasi.username')   
          ->join('tbl_opd','tbl_opd.id_opd=tbl_akun.id_opd')
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