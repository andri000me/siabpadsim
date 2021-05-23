<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanrekapitulasibarangpersediaan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_laporanrekapitulasibarangpersediaan');           
        $this->load->model('model_lihatlistorder');      
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_laporanrekapitulasibarangpersediaan->Tampillaporanrekapitulasibarangpersediaan();
			$this->load->view('laporanrekapitulasibarangpersediaan/laporanrekapitulasibarangpersediaan',$data);
	}
	
    function print()
	{   
        $tahun_order = $this->input->post('tahun_order');
        $data['hasil']=$this->model_laporanrekapitulasibarangpersediaan->Gettahun_pesan($tahun_order);
        $this->load->view('laporanrekapitulasibarangpersediaan/print',$data);
	}

}

/* End of file laporanrekapitulasibarangpersediaan.php */
/* Location: ./application/controllers/laporanrekapitulasibarangpersediaan.php */