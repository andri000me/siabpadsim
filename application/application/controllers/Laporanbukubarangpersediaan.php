<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanbukubarangpersediaan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_laporanbukubarangpersediaan');           
        $this->load->model('model_lihatlistorder');      
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_laporanbukubarangpersediaan->Tampillaporanbukubarangpersediaan();
			$this->load->view('laporanbukubarangpersediaan/laporanbukubarangpersediaan',$data);
	}

	function lihat($tahun_order)
    {
        $data['hasil']=$this->model_laporanbukubarangpersediaan->Gettahun_order($tahun_order);
        $this->load->view('laporanbukubarangpersediaan/lihat',$data);
	}
	
    function print($tahun_order)
	{
        $data['hasil'] = $this->model_laporanbukubarangpersediaan->GetPenerimaanPengeluaran($tahun_order);
        $this->load->view('laporanbukubarangpersediaan/print',$data);
	}

}

/* End of file laporanbukubarangpersediaan.php */
/* Location: ./application/controllers/laporanbukubarangpersediaan.php */