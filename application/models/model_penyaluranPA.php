<?php

class Model_PenyaluranPA extends CI_Model {

	function Tampilpenyaluran() 
    {
      $id_opd=$this->session->userdata('id_opd');
      $this->db->where('tbl_akun.id_opd', $id_opd);
      $this->db->order_by('keterangan', 'ASC');
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

    
    function GetId_penyaluranPA($id_penyaluran='')
    {
      return $this->db->get_where('tbl_penyaluran', array('id_penyaluran' => $id_penyaluran))->row();
    }

    function Lihatlistpenyaluran($id_penyaluran='') 
    {
        $this->db->order_by('id_detailpenyaluran', 'ASC');
        $this->db->where('id_penyaluran', $id_penyaluran);
        return $this->db->from('tbl_detailpenyaluran')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailpenyaluran.id_ssh')
          ->get()
          ->result();
    }


}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */