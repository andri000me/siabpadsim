<?php

class Model_laporanrekapitulasibarangpersediaan extends CI_Model {

	function Tampillaporanrekapitulasibarangpersediaan() 
    {
        $this->db->order_by('id_faktur', 'ASC');
        $this->db->where('keterangan', "Disetujui");
        $this->db->group_by('tahun_pesan');
        return $this->db->from('tbl_fakturrekanan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
          ->get()
          ->result();
      
    }

    function TampilOrder() 
    {
      $this->db->order_by('id_orderrekanan', 'ASC');
      return $this->db->from('tbl_orderrekanan')
        ->get()
        ->result();
      
    }

    function Gettahun_pesan ($tahun_pesan='')
    {
        $this->db->order_by('id_orderrekanan', 'ASC');        
        $this->db->where('tahun_pesan',$tahun_pesan);
        return $this->db->from('tbl_orderrekanan')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_orderrekanan.id_ssh')
          ->join('tbl_fakturrekanan','tbl_fakturrekanan.id_faktur=tbl_orderrekanan.id_fakturrekanan')          
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')      
          ->join('tbl_akun','tbl_akun.username=tbl_fakturrekanan.username')   
          ->join('tbl_opd','tbl_opd.id_opd=tbl_akun.id_opd')
          ->get()
          ->result();
    }

    function GetId_Print($id_faktur='') 
    {
      return $this->db->get_where('tbl_fakturrekanan', array('id_faktur' => $id_faktur))
            ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
            ->row();
      
    }

    function GetId_Faktur($id_faktur='')
    {
      return $this->db->get_where('tbl_fakturrekanan', array('id_faktur' => $id_faktur))->row();
    }

}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */