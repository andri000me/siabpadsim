<?php

class Model_detailpengadaan extends CI_Model {

	function Tampildetailpengadaan($id_pengadaan='') 
    {
        $this->db->order_by('id_detailpengadaan', 'ASC');
        $this->db->where('tbl_detailpengadaan.id_pengadaan', $id_pengadaan);
        return $this->db->from('tbl_detailpengadaan')
          ->join('tbl_ssh','tbl_ssh.id_ssh=tbl_detailpengadaan.id_ssh')          
          ->join('tbl_pengadaan','tbl_pengadaan.id_pengadaan=tbl_detailpengadaan.id_pengadaan')              
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->get()
          ->result();
    }

    function Getid_detailpengadaan($id_detailpengadaan='',$id_pengadaan='')
    {
      return $this->db->get_where('tbl_detailpengadaan', array('id_detailpengadaan' => $id_detailpengadaan))->row();
    }

    function Hapusdetailpengadaan($id_detailpengadaan)
    {
        $this->db->delete('tbl_detailpengadaan',array('id_detailpengadaan' => $id_detailpengadaan));
    }
}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */