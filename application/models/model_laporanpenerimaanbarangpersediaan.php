<?php

class Model_laporanpenerimaanbarangpersediaan extends CI_Model {

	function Tampillaporanpenerimaanbarangpersediaan() 
    {
        $this->db->order_by('id_pengadaan', 'ASC');
        $this->db->where('keterangan', "Disetujui");
        $this->db->group_by('tahun_pesan');
        return $this->db->from('tbl_pengadaan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->get()
          ->result();
      
    }

    function TampilOrder() 
    {
      $this->db->order_by('id_detailpengadaan', 'ASC');
      return $this->db->from('tbl_detailpengadaan')
        ->get()
        ->result();
      
    }

    function Gettahun_pesan ($tahun_pesan='')
    {
        $this->db->order_by('id_detailpengadaan', 'ASC');        
        $this->db->where('tahun_pesan',$tahun_pesan);
        return $this->db->from('tbl_detailpengadaan')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailpengadaan.id_ssh')
          ->join('tbl_pengadaan','tbl_pengadaan.id_pengadaan=tbl_detailpengadaan.id_detailpengadaan')          
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')             
          ->join('tbl_akun','tbl_akun.username=tbl_pengadaan.username')   
          ->join('tbl_opd','tbl_opd.id_opd=tbl_akun.id_opd')   
          
          ->get()
          ->result();
    }

    function GetId_Print($id_pengadaan='') 
    {
      return $this->db->get_where('tbl_pengadaan', array('id_pengadaan' => $id_pengadaan))
            ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
            ->row();
      
    }

    function Getid_pengadaan($id_pengadaan='')
    {
      return $this->db->get_where('tbl_pengadaan', array('id_pengadaan' => $id_pengadaan))->row();
    }

}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */