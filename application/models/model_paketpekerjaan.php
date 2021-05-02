<?php

class Model_paketpekerjaan extends CI_Model {

	function TampilPaketPekerjaan() 
    {
        $this->db->order_by('id_paketpekerjaan', 'ASC');
        return $this->db->from('tbl_paketpekerjaan')
          ->get()
          ->result();
    }

    function GetId_paketpekerjaan($id_paketpekerjaan='')
    {
      return $this->db->get_where('tbl_paketpekerjaan', array('id_paketpekerjaan' => $id_paketpekerjaan))->row();
    }
    function Hapuspaketpekerjaan($id_paketpekerjaan)
    {
        $this->db->delete('tbl_paketpekerjaan',array('id_paketpekerjaan' => $id_paketpekerjaan));
    }
}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */