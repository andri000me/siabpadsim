<?php

class Model_buktipenyaluranbarang extends CI_Model {

	function Tampilbuktipenyaluranbarang() 
    {
        $this->db->order_by('id_penyaluran', 'ASC');
        $this->db->where('keterangan', "Disetujui");
        return $this->db->from('tbl_penyaluran')
          ->get()
          ->result();
      
    }

    function TampilOrder() 
    {
      $this->db->order_by('id_order', 'ASC');
      return $this->db->from('tbl_order')
        ->get()
        ->result();
      
    }

    function GetId_order($id_penyaluran='')
    {
        $this->db->order_by('id_order', 'ASC');        
        $this->db->where('id_penyaluran',$id_penyaluran);
        return $this->db->from('tbl_order')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_order.id_ssh')
          ->get()
          ->result();
    }

    function GetId_Print($id_penyaluran='') 
    {
      return $this->db->get_where('tbl_penyaluran', array('id_penyaluran' => $id_penyaluran))
            ->row();
      
    }

    function Getid_penyaluran($id_penyaluran='')
    {
      return $this->db->get_where('tbl_penyaluran', array('id_penyaluran' => $id_penyaluran))->row();
    }

}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */