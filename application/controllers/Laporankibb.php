<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporankibb extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_laporankibb');         
        $this->load->library('session');

    }

	function rekap()
	{
		$data['hasil']=$this->model_laporankibb->Tampillaporanrekap();
		$this->load->view('laporankibb/rekap',$data);
	}
	
    function printrekap()
	{   
        $tahun_pembelian = $this->input->post('tahun_pembelian');
        $data['tahun_pembelian'] = $this->input->post('tahun_pembelian');
        $data['hasil_mutasi']=$this->model_laporankibb->Getmutasi($tahun_pembelian);
        $data['hasil_saldoawal']=$this->model_laporankibb->Getsaldoawal($tahun_pembelian);
        $this->load->view('laporankibb/printrekap',$data);
	}

    function rekapjeniskendaraan()
	{
		$data['hasil']=$this->model_laporankibb->Tampillaporanrekapjeniskendaraan();
		$this->load->view('laporankibb/rekapjeniskendaraan',$data);
	}
	
    function printrekapjeniskendaraan()
	{   
        $tahun_pembelian = $this->input->post('tahun_pembelian');
        $data['tahun_pembelian'] = $this->input->post('tahun_pembelian');
        $data['hasil']=$this->model_laporankibb->Getrekapjeniskendaraan($tahun_pembelian);
        $this->load->view('laporankibb/printrekapjeniskendaraan',$data);
	}

    function opd()
	{
		$data['hasil']=$this->model_laporankibb->Tampillaporanopd();
		$this->load->view('laporankibb/opd',$data);
	}
	
    function printopd()
	{   
        $tahun_pembelian = $this->input->post('tahun_pembelian');
        $data['tahun_pembelian'] = $this->input->post('tahun_pembelian');
        $data['hasil']=$this->model_laporankibb->Getopd($tahun_pembelian);
        $this->load->view('laporankibb/printopd',$data);
	}
}

/* End of file laporankibb.php */
/* Location: ./application/controllers/laporankibb.php */