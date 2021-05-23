<?php

class Model_detailpenyaluran extends CI_Model {

	function Tampildetailpenyaluran($id_mutasi='') 
    {
        $this->db->order_by('id_detailmutasi', 'ASC');
        $this->db->where('tbl_detailmutasi.id_mutasi', $id_mutasi);
        return $this->db->from('tbl_detailmutasi')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailmutasi.id_ssh')          
          ->join('tbl_mutasi','tbl_mutasi.id_mutasi=tbl_detailmutasi.id_mutasi')   
          ->get()
          ->result();
    }

    function Getid_detailpenyaluran($id_detailmutasi='',$id_mutasi='')
    {
      return $this->db->get_where('tbl_detailmutasi', array('id_detailmutasi' => $id_detailmutasi))->row();
    }

    function Hapusdetailpenyaluran($id_detailmutasi)
    {
        $this->db->delete('tbl_detailmutasi',array('id_detailmutasi' => $id_detailmutasi));
    }
}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */