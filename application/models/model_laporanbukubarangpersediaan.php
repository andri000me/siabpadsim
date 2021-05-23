<?php

class Model_laporanbukubarangpersediaan extends CI_Model {

	function Tampillaporanbukubarangpersediaan() 
    {
        $this->db->order_by('id_pengadaan', 'ASC');
        $this->db->where('keterangan', "Disetujui");
        $this->db->group_by('tahun_pesan');
        return $this->db->from('tbl_pengadaan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->get()
          ->result();
      
    }

    function TampilPenerimaanPengeluaran() 
    {
      $this->db->order_by('id_detailpengadaan', 'ASC');
      return $this->db->from('tbl_detailpengadaan')
        ->get()
        ->result();
      
    }
  
    function GetPenerimaanPengeluaran($tahun_order='')
    {
      $sql = "
      SELECT * FROM `tbl_detailmutasi` 
	      JOIN tbl_ssh ON tbl_ssh.id_ssh=tbl_detailmutasi.id_ssh
        JOIN tbl_akun ON tbl_akun.username=tbl_detailmutasi.username
          WHERE tbl_akun.id_opd=35 AND tbl_detailmutasi.tahun_order=2021
      ";
      $query = $this->db->query($sql);
      return $query->result();

      /*
      $sql = "
      SELECT * FROM `tbl_detailpengadaan` 
	      JOIN tbl_ssh ON tbl_ssh.id_ssh=tbl_detailpengadaan.id_ssh
        JOIN tbl_akun ON tbl_akun.username=tbl_detailpengadaan.username
          WHERE tbl_akun.id_opd=35 AND tbl_detailpengadaan.tahun_order=2021 AND tbl_detailpengadaan.statusorder='Sudah Diterima'
      UNION ALL
      SELECT * from `tbl_detailpenyaluran` 
	      JOIN tbl_ssh ON tbl_ssh.id_ssh=tbl_detailpenyaluran.id_ssh
        JOIN tbl_akun ON tbl_akun.username=tbl_detailpenyaluran.username
          WHERE tbl_akun.id_opd=35 AND tbl_detailpenyaluran.tahun_penyaluran=2021 AND tbl_detailpenyaluran.statusorder= 'Sudah Disalurkan' 
          OR tbl_detailpenyaluran.statusorder= 'Sudah Diterima'
      ";
      $query = $this->db->query($sql);
      return $query->result();
    */

      /*
        $this->db->select('*,tbl_detailpengadaan.id_ssh AS id_ssh_masuk,tbl_detailpengadaan.total_barang AS total_barang_masuk,tbl_detailpengadaan.tanggal_input AS tanggal_input_masuk,tbl_detailpengadaan.tahun_order AS tahun_order_masuk');
        $this->db->order_by('id_detailpengadaan', 'ASC');        
        $this->db->where('tbl_detailpengadaan.tahun_order',$tahun_order);
        return $this->db->from('tbl_detailpengadaan')
          ->join('tbl_order','tbl_order.id_ssh=tbl_detailpengadaan.id_ssh')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailpengadaan.id_ssh')          
          ->join('tbl_pengadaan','tbl_pengadaan.id_pengadaan=tbl_detailpengadaan.id_pengadaanrekanan')          
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')             
          ->join('tbl_akun','tbl_akun.username=tbl_pengadaan.username')   
          ->join('tbl_opd','tbl_opd.id_opd=tbl_akun.id_opd')  
          ->group_by('tbl_detailpengadaan.tanggal_input,tbl_order.tanggal_input,tbl_order.tanggal_input,tbl_order.id_ssh')
          ->get()
          ->result();
          */
    }

    function GetSisa($tahun_order='')
    {
      $sql = "
      SELECT * FROM `tbl_detailmutasi` 
	      JOIN tbl_ssh ON tbl_ssh.id_ssh=tbl_detailmutasi.id_ssh
        JOIN tbl_akun ON tbl_akun.username=tbl_detailmutasi.username
          WHERE tbl_akun.id_opd=35 AND tbl_detailmutasi.tahun_order=2021
      ";
      $query = $this->db->query($sql);
      return $query->result();
    }




    function GetPenerimaan ($tahun_order='')
    {
        $this->db->order_by('id_detailpengadaan', 'ASC');        
        $this->db->where('tahun_order',$tahun_order);
        return $this->db->from('tbl_detailpengadaan')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailpengadaan.id_ssh')
          ->join('tbl_pengadaan','tbl_pengadaan.id_pengadaan=tbl_detailpengadaan.id_pengadaanrekanan')          
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')             
          ->join('tbl_akun','tbl_akun.username=tbl_pengadaan.username')   
          ->join('tbl_opd','tbl_opd.id_opd=tbl_akun.id_opd')   
          
          ->get()
          ->result();
    }

    function TampilPengeluaran() 
    {
      $this->db->order_by('id_order', 'ASC');
      return $this->db->from('tbl_order')
        ->get()
        ->result();
      
    }

    

}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */