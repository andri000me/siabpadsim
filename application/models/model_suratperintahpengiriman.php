<?php

class Model_suratperintahpengiriman extends CI_Model {

	function Tampilsuratperintahpengiriman() 
    {
        $this->db->order_by('id_faktur', 'ASC');
        $this->db->where('keterangan', "Disetujui");
        return $this->db->from('tbl_fakturrekanan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
          ->get()
          ->result();
      
    }
    function Tampilpenyaluran() {     
        $this->db->order_by('id_faktur', 'ASC');
        return $this->db->from('tbl_fakturrekanan')
          ->get()
          ->result();
    }

    function Tampilorder(){
        $this->db->order_by('id_order', 'ASC');
        return $this->db->from('tbl_order')
          ->get()
          ->result();
    }

    function GetId_order($id_faktur='')
    {
        $this->db->order_by('id_faktur', 'ASC');        
        $this->db->where('id_faktur',$id_faktur);
        return $this->db->from('tbl_fakturrekanan')
          ->get()
          ->result();
    }
 
    function Getid_faktur($id_faktur='')
    {
      return $this->db->get_where('tbl_fakturrekanan', array('id_faktur' => $id_faktur))->row();
    }

}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */