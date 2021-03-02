<?php

class Model_listorderrekanan extends CI_Model {

	function TampilListOrderRekanan($id_fakturrekanan='') 
    {
        $this->db->order_by('id_orderrekanan', 'ASC');
        $this->db->where('id_fakturrekanan', $id_fakturrekanan);
        return $this->db->from('tbl_orderrekanan')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_orderrekanan.id_ssh')          
          
          ->join('tbl_fakturrekanan','tbl_fakturrekanan.id_faktur=tbl_orderrekanan.id_fakturrekanan')              
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
          ->get()
          ->result();
    }

    function Getid_listorderrekanan($id_orderrekanan='',$id_fakturrekanan='')
    {
      return $this->db->get_where('tbl_orderrekanan', array('id_orderrekanan' => $id_orderrekanan))->row();
    }

    function Hapuslistorderrekanan($id_orderrekanan)
    {
        $this->db->delete('tbl_orderrekanan',array('id_orderrekanan' => $id_orderrekanan));
    }
}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */