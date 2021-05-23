<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanpengeluaranbarangpersediaan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_laporanpengeluaranbarangpersediaan');           
        $this->load->model('model_lihatlistorder');      
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_laporanpengeluaranbarangpersediaan->Tampillaporanpengeluaranbarangpersediaan();
			$this->load->view('laporanpengeluaranbarangpersediaan/laporanpengeluaranbarangpersediaan',$data);
	}
	
    function print()
	{   
        $tahun_order = $this->input->post('tahun_order');
        $data['hasil']=$this->model_laporanpengeluaranbarangpersediaan->Gettahun_pesan($tahun_order);
        $this->load->view('laporanpengeluaranbarangpersediaan/print',$data);
	}
}

/* End of file laporanpengeluaranbarangpersediaan.php */
/* Location: ./application/controllers/laporanpengeluaranbarangpersediaan.php */