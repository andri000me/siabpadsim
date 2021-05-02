<?php

class Model_lihatlist extends CI_Model {

	function Tampilihatlist($id_penyaluran='') 
    {
        $this->db->order_by('id_order', 'ASC');
        $this->db->where('id_penyaluran', $id_penyaluran);
        return $this->db->from('tbl_order')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_order.id_ssh')
          ->get()
          ->result();
    }
  }
/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */