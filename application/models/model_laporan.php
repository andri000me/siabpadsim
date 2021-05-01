<?php

class Model_laporan extends CI_Model {
  
  function TampilOrder() 
  {
    $this->db->order_by('id_detailpengadaan', 'ASC');
    return $this->db->from('tbl_detailpengadaan')
      ->get()
      ->result();
    
  }

  function GetHasilAtas()
    {
      $id_opd= $this->session->userdata('id_opd');
      $this->db->select('*');
      $this->db->where('kode_opd', $id_opd);
      $this->db->from('tbl_opd');
      return $this->db->get()->row_array();	
    }

	function GetDetailPengadaan() 
    {
        $this->db->order_by('id_pengadaan', 'ASC');
        $this->db->where('keterangan', "Disetujui");
        $this->db->group_by('tahun_pesan');
        return $this->db->from('tbl_pengadaan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->get()
          ->result();
      
    }

    function GetDetailPengadaanTahun($tahun_pesan='')
    {
        $this->load->library('session');
        $id_opd= $this->session->userdata('id_opd');
        $this->db->order_by('tbl_pengadaan.tanggal_pesan', 'ASC');        
        $this->db->where('tahun_order',$tahun_pesan);
        $this->db->where('kode_opd',$id_opd);
        return $this->db->from('tbl_detailpengadaan')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailpengadaan.id_ssh')
          ->join('tbl_pengadaan','tbl_pengadaan.id_pengadaan=tbl_detailpengadaan.id_pengadaan')          
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')             
          ->join('tbl_akun','tbl_akun.username=tbl_pengadaan.username')   
          ->join('tbl_opd','tbl_opd.kode_opd=tbl_akun.id_opd')
          ->get()
          ->result();
    }

    function GetDetailPenyaluran() 
    {
        $this->db->order_by('id_penyaluran', 'ASC');
        $this->db->where('keterangan', "Disetujui");
        $this->db->group_by('tahun_penyaluran');
        return $this->db->from('tbl_penyaluran')
          ->get()
          ->result();
      
    }

    function GetDetailPenyaluranTahun($tahun_pesan='')
    {
        $this->load->library('session');
        $id_opd= $this->session->userdata('id_opd');
        $this->db->order_by('tbl_penyaluran.tanggal_pesan', 'ASC');        
        $this->db->where('tbl_detailpenyaluran.tahun_penyaluran',$tahun_pesan);
        $this->db->where('kode_opd',$id_opd);
        return $this->db->from('tbl_detailpenyaluran')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailpenyaluran.id_ssh')
          ->join('tbl_penyaluran','tbl_penyaluran.id_penyaluran=tbl_detailpenyaluran.id_penyaluran')          
          ->join('tbl_akun','tbl_akun.username=tbl_penyaluran.username')   
          ->join('tbl_opd','tbl_opd.kode_opd=tbl_akun.id_opd')
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