<?php

class Model_order extends CI_Model {

	function TampilOrder() 
    {
        $this->db->order_by('id_penyaluran', 'ASC');
        return $this->db->from('tbl_penyaluran')
          ->get()
          ->result();
    }

    function Getid_penyaluran($id_penyaluran='')
    {
      return $this->db->get_where('tbl_penyaluran', array('id_penyaluran' => $id_penyaluran))->row();
    }
    function Hapusorder($id_penyaluran)
    {
        $this->db->delete('tbl_penyaluran',array('id_penyaluran' => $id_penyaluran));
    }




    public function TampilorderbyMenungguKonfirmasi()
		{
			$this->db->order_by('id_penyaluran', 'ASC');
			$this->db->where('keterangan', "Menunggu Konfirmasi");
        return $this->db->from('tbl_penyaluran')
          ->get()
          ->result();
		}

    public function TampilorderbyDisetujui()
		{
			$this->db->order_by('id_penyaluran', 'ASC');
			$this->db->where('keterangan', "Disetujui");
        return $this->db->from('tbl_penyaluran')
          ->get()
          ->result();
		}

    public function TampilorderbyDitolak()
		{
			$this->db->order_by('id_penyaluran', 'ASC');
			$this->db->where('keterangan', "Ditolak");
        return $this->db->from('tbl_penyaluran')
          ->get()
          ->result();
		}

    public function Tampilkonfirmasipenyaluranbarang()
		{
			$this->db->order_by('statusorder', 'ASC');
			$this->db->where('keterangan', "Disetujui");  
        return $this->db->from('tbl_penyaluran')
          ->get()
          ->result();
		}

    public function Tampilpenyaluranbarangselesai()
		{
			$this->db->order_by('statusorder', 'ASC');
			$this->db->where('keterangan', "Disetujui");
			$this->db->where('statusorder', "Sudah Diterima");
        return $this->db->from('tbl_penyaluran')
          ->get()
          ->result();
		}
}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */