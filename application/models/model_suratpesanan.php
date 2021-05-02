<?php

class Model_suratpesanan extends CI_Model {

	function Tampilsuratpesanan() 
    {
        $this->db->order_by('id_faktur', 'ASC');
        $this->db->where('keterangan', "Disetujui");
        return $this->db->from('tbl_fakturrekanan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
          ->get()
          ->result();
      
    }

    function TampilOrder() 
    {
      $this->db->order_by('id_orderrekanan', 'ASC');
      return $this->db->from('tbl_orderrekanan')
        ->get()
        ->result();
      
    }

    function GetId_order($id_faktur='')
    {
        $this->db->order_by('id_orderrekanan', 'ASC');        
        $this->db->where('id_fakturrekanan',$id_faktur);
        return $this->db->from('tbl_orderrekanan')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_orderrekanan.id_ssh')
          ->get()
          ->result();
    }

    function GetId_Print($id_faktur='') 
    {
      return $this->db->get_where('tbl_fakturrekanan', array('id_faktur' => $id_faktur))
            ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
            ->row();
      
    }

    function GetId_Faktur($id_faktur='')
    {
      return $this->db->get_where('tbl_fakturrekanan', array('id_faktur' => $id_faktur))->row();
    }

}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */