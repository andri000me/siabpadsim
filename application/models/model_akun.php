<?php

class Model_akun extends CI_Model {

	function Tampilakun() 
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->from('tbl_akun')
          ->join('tbl_opd','tbl_opd.id_opd=tbl_akun.id_opd')
          ->get();
    }

    function GetId($id = '')
    {
      return $this->db->get_where('tbl_akun', array('id' => $id))->row();
    }
    function Hapusakun($id)
    {
        $this->db->delete('tbl_akun',array('id' => $id));
    }
}

/* End of file model_akun.php */
/* Location: ./application/models/model_akun.php */