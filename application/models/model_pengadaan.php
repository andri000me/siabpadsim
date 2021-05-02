<?php

class Model_pengadaan extends CI_Model {

	function Tampilpengadaan() 
    {
        $this->db->order_by('id_pengadaan', 'ASC');
        return $this->db->from('tbl_pengadaan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->get()
          ->result();
    }

    function Getpengadaan() 
    {
        $username=$this->session->userdata('username');
        $this->db->order_by('id_pengadaan', 'ASC');
        return $this->db->from('tbl_pengadaan')
          ->where('tbl_pengadaan.username', $username)
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->get()
          ->result();
    }

    
    function Getid($id_pengadaan='')
    {
      return $this->db->get_where('tbl_pengadaan', array('id_pengadaan' => $id_pengadaan))->row();
    }
    function deletedatapengadaan($id_pengadaan)
    {
        $this->db->delete('tbl_pengadaan',array('id_pengadaan' => $id_pengadaan));
    }

    public function TampilorderbyMenungguKonfirmasi()
		{
			$this->db->order_by('id_pengadaan', 'ASC');
			$this->db->where('keterangan', "Menunggu Konfirmasi");
      $this->db->where('statusorder', "Belum Diterima");
        return $this->db->from('tbl_pengadaan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->get()
          ->result();
		}

    public function TampilorderbyDisetujui()
		{
			$this->db->order_by('id_pengadaan', 'ASC');
			$this->db->where('keterangan', "Disetujui");
        return $this->db->from('tbl_pengadaan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->get()
          ->result();
		}

    public function TampilorderbyDitolak()
		{
			$this->db->order_by('id_pengadaanid', 'ASC');
			$this->db->where('keterangan', "Ditolak");
        return $this->db->from('tbl_pengadaan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->get()
          ->result();
		}

    public function Tampilkonfirmasipengadaanbarang()
		{
			$this->db->order_by('statusorder', 'ASC');
			$this->db->where('keterangan', "Disetujui");
			$this->db->where('statusorder', "Belum Diterima");
        return $this->db->from('tbl_pengadaan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->get()
          ->result();
		}

    public function Tampilpengadaanbarangselesai()
		{
			$this->db->order_by('statusorder', 'ASC');
			$this->db->where('keterangan', "Disetujui");
			$this->db->where('statusorder', "Sudah Diterima");
        return $this->db->from('tbl_pengadaan')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_pengadaan.id_rekanan')
          ->get()
          ->result();
		}

    public function menambahdatapengadaan($data)
	{
		$this->db->insert('tbl_pengadaan', $data);
	}
}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */