<?php

class Model_detailpenyaluran extends CI_Model {

	function Tampildetailpenyaluran($id_penyaluran='') 
    {
        $this->db->order_by('id_detailpenyaluran', 'ASC');
        $this->db->where('tbl_detailpenyaluran.id_penyaluran', $id_penyaluran);
        return $this->db->from('tbl_detailpenyaluran')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailpenyaluran.id_ssh')          
          ->join('tbl_penyaluran','tbl_penyaluran.id_penyaluran=tbl_detailpenyaluran.id_penyaluran')   
          ->get()
          ->result();
    }

    function Getid_detailpenyaluran($id_detailpenyaluran='',$id_penyaluran='')
    {
      return $this->db->get_where('tbl_detailpenyaluran', array('id_detailpenyaluran' => $id_detailpenyaluran))->row();
    }

    function Hapusdetailpenyaluran($id_detailpenyaluran)
    {
        $this->db->delete('tbl_detailpenyaluran',array('id_detailpenyaluran' => $id_detailpenyaluran));
    }
}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */