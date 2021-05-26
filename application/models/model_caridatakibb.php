<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_caridatakibb extends CI_Model {
  
 
    public function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');
	}

	function Tampilcaridatakibb() 
    {
		$id_opd = $this->input->post('id_opd');
		$nama_barang = $this->input->post('nama_barang');
		$tahun_pembelian = $this->input->post('tahun_pembelian');
		$nomor_pabrik = $this->input->post('nomor_pabrik');
		$nomor_rangka = $this->input->post('nomor_rangka');
		$nomor_mesin = $this->input->post('nomor_mesin');
		$nomor_polisi = $this->input->post('nomor_polisi');
		$nomor_bpkb = $this->input->post('nomor_bpkb');
		$pejabat_pengguna = $this->input->post('pejabat_pengguna');
		$keterangan = $this->input->post('keterangan');
		$no_stnk = $this->input->post('no_stnk');

		$this->db->like('tbl_kibb.id_opd', $id_opd);
		$this->db->like('nama_barang',$nama_barang);
		$this->db->like('tahun_pembelian',$tahun_pembelian);
		$this->db->like('nomor_pabrik',$nomor_pabrik);
		$this->db->like('nomor_rangka',$nomor_rangka);
		$this->db->like('nomor_mesin',$nomor_mesin);
		$this->db->like('nomor_polisi',$nomor_polisi);
		$this->db->like('nomor_bpkb',$nomor_bpkb);
		$this->db->like('pejabat_pengguna',$pejabat_pengguna);
		$this->db->like('keterangan',$keterangan);
		$this->db->like('no_stnk',$no_stnk);
        return $this->db->from('tbl_kibb')
		->join('tbl_opd','tbl_opd.id_opd=tbl_kibb.id_opd')
			->get();
    }

	

}