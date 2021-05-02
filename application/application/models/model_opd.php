<?php

class Model_opd extends CI_Model {

	function TampilOpd() 
    {
        $this->db->order_by('id_opd', 'ASC');
        return $this->db->from('tbl_opd')
          ->get()
          ->result();
    }

    function GetId_opd($id_opd='')
    {
      return $this->db->get_where('tbl_opd', array('id_opd' => $id_opd))->row();
    }
    function HapusOpd($id_opd)
    {
        $this->db->delete('tbl_opd',array('id_opd' => $id_opd));
    }
}

/* End of file Model_opd.php */
/* Location: ./application/models/Model_opd.php */