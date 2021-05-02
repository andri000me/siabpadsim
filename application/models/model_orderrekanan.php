<?php

class Model_orderrekanan extends CI_Model {

	function Tampilorderrekanan() 
    {
        $this->db->order_by('id_faktur', 'ASC');
        return $this->db->from('tbl_fakturrekanan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
          ->get()
          ->result();
    }

    function GetOrderRekanan() 
    {
        $this->db->order_by('id_faktur', 'ASC');
        return $this->db->from('tbl_fakturrekanan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
          ->get()
          ->result();
    }

    
    function Getid_faktur($id_faktur='')
    {
      return $this->db->get_where('tbl_fakturrekanan', array('id_faktur' => $id_faktur))->row();
    }
    function Hapusorderrekanan($id_faktur)
    {
        $this->db->delete('tbl_fakturrekanan',array('id_faktur' => $id_faktur));
    }

    public function TampilorderbyMenungguKonfirmasi()
		{
			$this->db->order_by('id_faktur', 'ASC');
			$this->db->where('keterangan', "Menunggu Konfirmasi");
      $this->db->where('statusorder', "Belum Diterima");
        return $this->db->from('tbl_fakturrekanan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
          ->get()
          ->result();
		}

    public function TampilorderbyDisetujui()
		{
			$this->db->order_by('id_faktur', 'ASC');
			$this->db->where('keterangan', "Disetujui");
        return $this->db->from('tbl_fakturrekanan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
          ->get()
          ->result();
		}

    public function TampilorderbyDitolak()
		{
			$this->db->order_by('id_faktur', 'ASC');
			$this->db->where('keterangan', "Ditolak");
        return $this->db->from('tbl_fakturrekanan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
          ->get()
          ->result();
		}

    public function Tampilkonfirmasipengadaanbarang()
		{
			$this->db->order_by('statusorder', 'ASC');
			$this->db->where('keterangan', "Disetujui");
			$this->db->where('statusorder', "Belum Diterima");
        return $this->db->from('tbl_fakturrekanan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
          ->get()
          ->result();
		}

    public function Tampilpengadaanbarangselesai()
		{
			$this->db->order_by('statusorder', 'ASC');
			$this->db->where('keterangan', "Disetujui");
			$this->db->where('statusorder', "Sudah Diterima");
        return $this->db->from('tbl_fakturrekanan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan')
          ->get()
          ->result();
		}

    public function menambahdataorderrekanan($data)
	{
		$this->db->insert('tbl_fakturrekanan', $data);
	}
}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */