<?php

class Model_laporanbukubarangpersediaan extends CI_Model {

	function Tampillaporanbukubarangpersediaan() 
    {
        $this->db->order_by('id_faktur', 'ASC');
        $this->db->where('keterangan', "Disetujui");
        $this->db->group_by('tahun_pesan');
        return $this->db->from('tbl_fakturrekanan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
          ->get()
          ->result();
      
    }

    function TampilPenerimaanPengeluaran() 
    {
      $this->db->order_by('id_orderrekanan', 'ASC');
      return $this->db->from('tbl_orderrekanan')
        ->get()
        ->result();
      
    }
  
    function GetPenerimaanPengeluaran($tahun_order='')
    {
        $this->db->select('*,tbl_orderrekanan.id_ssh AS id_ssh_masuk,tbl_orderrekanan.total_barang AS total_barang_masuk,tbl_orderrekanan.tanggal_input AS tanggal_input_masuk,tbl_orderrekanan.tahun_order AS tahun_order_masuk');
        $this->db->order_by('id_orderrekanan', 'ASC');        
        $this->db->where('tbl_orderrekanan.tahun_order',$tahun_order);
        return $this->db->from('tbl_orderrekanan')
          ->join('tbl_order','tbl_order.id_ssh=tbl_orderrekanan.id_ssh')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_orderrekanan.id_ssh')          
          ->join('tbl_fakturrekanan','tbl_fakturrekanan.id_faktur=tbl_orderrekanan.id_fakturrekanan')          
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')             
          ->join('tbl_akun','tbl_akun.username=tbl_fakturrekanan.username')   
          ->join('tbl_opd','tbl_opd.id_opd=tbl_akun.id_opd')  
          ->group_by('tbl_orderrekanan.tanggal_input,tbl_order.tanggal_input,tbl_order.tanggal_input,tbl_order.id_ssh')
          ->get()
          ->result();
    }





            





























    function GetPenerimaan ($tahun_order='')
    {
        $this->db->order_by('id_orderrekanan', 'ASC');        
        $this->db->where('tahun_order',$tahun_order);
        return $this->db->from('tbl_orderrekanan')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_orderrekanan.id_ssh')
          ->join('tbl_fakturrekanan','tbl_fakturrekanan.id_faktur=tbl_orderrekanan.id_fakturrekanan')          
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')             
          ->join('tbl_akun','tbl_akun.username=tbl_fakturrekanan.username')   
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