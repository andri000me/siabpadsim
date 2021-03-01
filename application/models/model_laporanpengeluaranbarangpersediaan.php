<?php

class Model_laporanpengeluaranbarangpersediaan extends CI_Model {

	function Tampillaporanpengeluaranbarangpersediaan() 
    {
        $this->db->order_by('id_penyaluran', 'ASC');
        $this->db->where('keterangan', "Disetujui");
        $this->db->group_by('tahun_penyaluran');
        return $this->db->from('tbl_penyaluran')
          ->get()
          ->result();
      
    }

    function TampilOrder() 
    {
      $this->db->order_by('id_order', 'ASC');
      return $this->db->from('tbl_order')
        ->get()
        ->result();
      
    }

    function Gettahun_penyaluran ($tahun_penyaluran='')
    {
        $this->db->order_by('id_order', 'ASC');        
        $this->db->where('tahun_penyaluran',$tahun_penyaluran);
        return $this->db->from('tbl_order')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_order.id_ssh')
          ->join('tbl_penyaluran','tbl_penyaluran.id_penyaluran=tbl_order.id_penyaluran')   
          ->join('tbl_akun','tbl_akun.username=tbl_penyaluran.username')   
          ->join('tbl_opd','tbl_opd.id_opd=tbl_akun.id_opd')
          ->get()
          ->result();
    }

    function GetId_Print($id_penyaluran='') 
    {
      return $this->db->get_where('tbl_penyaluran', array('id_penyaluran' => $id_penyaluran))
            ->row();
      
    }

    function Getid_penyaluran($id_penyaluran='')
    {
      return $this->db->get_where('tbl_penyaluran', array('id_penyaluran' => $id_penyaluran))->row();
    }

}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */