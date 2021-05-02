<?php

class Model_penyaluran extends CI_Model {

	function Tampilpenyaluran() 
    {
        $this->db->order_by('id_penyaluran', 'ASC');
        return $this->db->from('tbl_penyaluran')
          ->get()
          ->result();
    }

    function Getpenyaluran() 
    {
        $username=$this->session->userdata('username');
        $this->db->order_by('id_penyaluran', 'ASC');
        return $this->db->from('tbl_penyaluran')
          ->where('tbl_penyaluran.username', $username)
          ->get()
          ->result();
    }

    
    function Getid($id_penyaluran='')
    {
      return $this->db->get_where('tbl_penyaluran', array('id_penyaluran' => $id_penyaluran))->row();
    }
    function deletedatapenyaluran($id_penyaluran)
    {
        $this->db->delete('tbl_penyaluran',array('id_penyaluran' => $id_penyaluran));
    }


    public function menambahdatapenyaluran($data)
	{
		$this->db->insert('tbl_penyaluran', $data);
	}
}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */