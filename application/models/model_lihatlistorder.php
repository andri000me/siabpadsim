<?php

class Model_lihatlistorder extends CI_Model {

	function Tampilihatlistorder($id_faktur='') 
    {
        $this->db->order_by('id_orderrekanan', 'ASC');
        $this->db->where('id_fakturrekanan', $id_faktur);
        return $this->db->from('tbl_orderrekanan')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_orderrekanan.id_ssh')
          ->get()
          ->result();
    }
  }
/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */