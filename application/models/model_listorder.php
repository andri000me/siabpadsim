<?php

class Model_listorder extends CI_Model {

	function Tampillistorder($id_penyaluran='') 
    {
        $this->db->order_by('id_order', 'ASC');
        $this->db->where('id_penyaluran', $id_penyaluran);
        return $this->db->from('tbl_order')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_order.id_ssh')
          ->get()
          ->result();
    }

    function Getid_listorder($id_order='',$id_penyaluran='')
    {
      return $this->db->get_where('tbl_order', array('id_order' => $id_order))->row();
    }

    function Hapuslistorder($id_order)
    {
        $this->db->delete('tbl_order',array('id_order' => $id_order));
    }
}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */