<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_caridatakiba extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');
	}

	function Tampilcaridatakiba() 
    {
		$id_opd = $this->input->post('id_opd');
		$keterangan_tanah = $this->input->post('keterangan_tanah');
		$nama_barang = $this->input->post('nama_barang');
		$no_kode_barang = $this->input->post('no_kode_barang');
		$no_register = $this->input->post('no_register');
		$tahun_pengadaan = $this->input->post('tahun_pengadaan');
		$hak_status_tanah = $this->input->post('hak_status_tanah');
		$asal_usul = $this->input->post('asal_usul');
		$nomor_sertifikat = $this->input->post('nomor_sertifikat');
		$penggunaan = $this->input->post('penggunaan');
		$keterangan_perolehan = $this->input->post('keterangan_perolehan');
		$keterangan_penguasaan = $this->input->post('keterangan_penguasaan');

		$this->db->like('tbl_kiba.id_opd', $id_opd);
		$this->db->like('keterangan_tanah',$keterangan_tanah);
		$this->db->like('nama_barang',$nama_barang);
		$this->db->like('no_kode_barang',$no_kode_barang);
		$this->db->like('no_register',$no_register);
		$this->db->like('tahun_pengadaan',$tahun_pengadaan);
		$this->db->like('hak_status_tanah',$hak_status_tanah);
		$this->db->like('asal_usul',$asal_usul);
		$this->db->like('nomor_sertifikat',$nomor_sertifikat);
		$this->db->like('penggunaan',$penggunaan);
		$this->db->like('keterangan_perolehan',$keterangan_perolehan);
		$this->db->like('keterangan_penguasaan',$keterangan_penguasaan);
        return $this->db->from('tbl_kiba')
		->join('tbl_opd','tbl_opd.id_opd=tbl_kiba.id_opd')
			->get();
    }

	

}