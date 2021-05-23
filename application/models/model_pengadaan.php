<?php

class Model_pengadaan extends CI_Model {

	function Tampilpengadaan() 
    {
        $this->db->order_by('id_mutasi', 'ASC');
        $this->db->where('jenis_mutasi', 'Pengadaan');
        return $this->db->from('tbl_mutasi')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_mutasi.id_rekanan')
          ->get()
          ->result();
    }

    function Getpengadaan() 
    {
        $username=$this->session->userdata('username');
        $this->db->where('jenis_mutasi', 'Pengadaan');
        $this->db->order_by('id_mutasi', 'ASC');
        return $this->db->from('tbl_mutasi')
          ->where('tbl_mutasi.username', $username)
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_mutasi.id_rekanan')
          ->get()
          ->result();
    }

    
    function Getid($id_mutasi='')
    {
      return $this->db->get_where('tbl_mutasi', array('id_mutasi' => $id_mutasi))->row();
    }
    function deletedatapengadaan($id_mutasi)
    {
        $this->db->delete('tbl_mutasi',array('id_mutasi' => $id_mutasi));
    }

    public function TampilorderbyMenungguKonfirmasi()
		{
			$this->db->order_by('id_mutasi', 'ASC');
      $this->db->where('jenis_mutasi', 'Pengadaan');
			$this->db->where('keterangan', "Menunggu Konfirmasi");
      $this->db->where('statusorder', "Sedang Diproses");
        return $this->db->from('tbl_mutasi')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_mutasi.id_rekanan')
          ->get()
          ->result();
		}

    public function TampilorderbyDisetujui()
		{
			$this->db->order_by('id_mutasi', 'ASC');
      $this->db->where('jenis_mutasi', 'Pengadaan');
			$this->db->where('keterangan', "Disetujui");
        return $this->db->from('tbl_mutasi')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_mutasi.id_rekanan')
          ->get()
          ->result();
		}

    public function TampilorderbyDitolak()
		{
			$this->db->order_by('id_mutasiid', 'ASC');
      $this->db->where('jenis_mutasi', 'Pengadaan');
			$this->db->where('keterangan', "Ditolak");
        return $this->db->from('tbl_mutasi')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_mutasi.id_rekanan')
          ->get()
          ->result();
		}

    public function Tampilkonfirmasipengadaanbarang()
		{
			$this->db->order_by('statusorder', 'ASC');
      $this->db->where('jenis_mutasi', 'Pengadaan');
			$this->db->where('keterangan', "Disetujui");
			$this->db->where('statusorder', "Sedang Diproses");
        return $this->db->from('tbl_mutasi')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_mutasi.id_rekanan')
          ->get()
          ->result();
		}

    public function Tampilpengadaanbarangselesai()
		{
			$this->db->order_by('statusorder', 'ASC');
      $this->db->where('jenis_mutasi', 'Pengadaan');
			$this->db->where('keterangan', "Disetujui");
			$this->db->where('statusorder', "Selesai");
        return $this->db->from('tbl_mutasi')
          ->join('tbl_rekanan','tbl_rekanan.id_rekanan=tbl_mutasi.id_rekanan')
          ->get()
          ->result();
		}

    public function menambahdatapengadaan($data)
	{
		$this->db->insert('tbl_mutasi', $data);
	}
}

/* End of file Model_rekanan.php */
/* Location: ./application/models/Model_rekanan.php */