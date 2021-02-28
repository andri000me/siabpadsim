<?php

class Model_rekanan extends CI_Model {

	function TampilRekanan() 
    {
        $this->db->order_by('id_rekanan', 'ASC');
        return $this->db->from('tbl_rekanan')
          ->get()
          ->result();
    }

    function GetId_rekanan($id_rekanan='')
    {
      return $this->db->get_where('tbl_rekanan', array('id_rekanan' => $id_rekanan))->row();
    }
    function Hapusrekanan($id_rekanan)
    {
        $this->db->delete('tbl_rekanan',array('id_rekanan' => $id_rekanan));
    }
}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */