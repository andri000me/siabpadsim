<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_laporan');            
        $this->load->library('session');
    }

	function penerimaan()
	{
		$data['hasil']=$this->model_laporan->GetDetailPengadaan();
		$this->load->view('laporan/penerimaan',$data);
	}

	function lihatpenerimaan($tahun_order)
    {
        $data['hasil']=$this->model_laporan->Gettahun_order($tahun_order);
        $this->load->view('laporan/penerimaan',$data);
	}
	
    function printpenerimaan($tahun_order)
	{
        $data['hasilatas'] = $this->model_laporan->GetHasilAtas();
        $data['hasil'] = $this->model_laporan->GetDetailPengadaanTahun($tahun_order);
        $this->load->view('laporan/printpenerimaan',$data);
	}

    function pengeluaran()
	{
		$data['hasil']=$this->model_laporan->GetDetailPenyaluran();
		$this->load->view('laporan/pengeluaran',$data);
	}

	function lihatpengeluaran($tahun_order)
    {
        $data['hasil']=$this->model_laporan->Gettahun_order($tahun_order);
        $this->load->view('laporan/pengeluaran',$data);
	}
	
    function printpengeluaran($tahun_order)
	{
        $data['hasilatas'] = $this->model_laporan->GetHasilAtas();
        $data['hasil'] = $this->model_laporan->GetDetailPenyaluranTahun($tahun_order);
        $this->load->view('laporan/printpengeluaran',$data);
	}

    function buku()
	{
		$data['hasil']=$this->model_laporan->GetDetailPenyaluran();
		$this->load->view('laporan/buku',$data);
	}

	function lihatbuku($tahun_order)
    {
        $data['hasil']=$this->model_laporan->Gettahun_order($tahun_order);
        $this->load->view('laporan/buku',$data);
	}
	
    function printbuku($tahun_order)
	{
        $data['hasilatas'] = $this->model_laporan->GetHasilAtas();
        $data['hasil'] = $this->model_laporan->GetDetailPenyaluranTahun($tahun_order);
        $this->load->view('laporan/printbuku',$data);
	}

    function rekapitulasi()
	{
		$data['hasil']=$this->model_laporan->GetDetailPenyaluran();
		$this->load->view('laporan/rekapitulasi',$data);
	}

	function lihatrekapitulasi($tahun_order)
    {
        $data['hasil']=$this->model_laporan->Gettahun_order($tahun_order);
        $this->load->view('laporan/rekapitulasi',$data);
	}
	
    function printrekapitulasi($tahun_order)
	{
        $data['hasilatas'] = $this->model_laporan->GetHasilAtas();
        $data['hasil'] = $this->model_laporan->GetDetailPenyaluranTahun($tahun_order);
        $this->load->view('laporan/printrekapitulasi',$data);
	}

}

/* End of file laporanbukubarangpersediaan.php */
/* Location: ./application/controllers/laporanbukubarangpersediaan.php */