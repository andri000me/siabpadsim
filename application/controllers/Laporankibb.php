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
        $data['saldoawal']=$this->model_laporankibb->Getrekap($tahun_pembelian);
        $this->load->view('laporankibb/printrekap',$data);
	}
}

/* End of file laporankibb.php */
/* Location: ./application/controllers/laporankibb.php */