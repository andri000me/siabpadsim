<?php

class Model_penyaluranPBP extends CI_Model {

	function Tampilpenyaluran() 
    {
      $id_opd=$this->session->userdata('id_opd');
      $this->db->where('tbl_akun.id_opd', $id_opd);
      $this->db->where('tbl_mutasi.jenis_mutasi', 'Penyaluran');
      $this->db->order_by('keterangan', 'ASC');
        return $this->db->from('tbl_mutasi')
          ->join('tbl_akun','tbl_akun.username=tbl_mutasi.username')
          ->get()
          ->result();
    }

    function Getpenyaluran() 
    {
      $id_opd=$this->session->userdata('id_opd');
      $this->db->where('tbl_akun.id_opd', $id_opd);
      $this->db->where('tbl_mutasi.jenis_mutasi', 'Penyaluran');
      $this->db->order_by('id_mutasi', 'ASC');
        return $this->db->from('tbl_mutasi')
          ->join('tbl_akun','tbl_akun.username=tbl_mutasi.username')
          ->get()
          ->result();
    }

    
    function Getid_mutasiPBP($id_mutasi='')
    {
      return $this->db->get_where('tbl_mutasi', array('id_mutasi' => $id_mutasi))->row();
    }

    function Lihatlistpenyaluran($id_mutasi='') 
    {
        $this->db->order_by('id_detailmutasi', 'ASC');
        $this->db->where('id_mutasi', $id_mutasi);
        return $this->db->from('tbl_detailmutasi')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailmutasi.id_ssh')
          ->get()
          ->result();
    }


}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */