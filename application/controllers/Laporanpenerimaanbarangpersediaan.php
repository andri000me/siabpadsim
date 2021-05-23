<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanpenerimaanbarangpersediaan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_laporanpenerimaanbarangpersediaan');           
        $this->load->model('model_lihatlistorder');      
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_laporanpenerimaanbarangpersediaan->Tampillaporanpenerimaanbarangpersediaan();
			$this->load->view('laporanpenerimaanbarangpersediaan/laporanpenerimaanbarangpersediaan',$data);
	}
	
    function print()
	{   
        $tahun_order = $this->input->post('tahun_order');
        $data['hasil']=$this->model_laporanpenerimaanbarangpersediaan->Gettahun_pesan($tahun_order);
        $this->load->view('laporanpenerimaanbarangpersediaan/print',$data);
	}

}

/* End of file laporanpenerimaanbarangpersediaan.php */
/* Location: ./application/controllers/laporanpenerimaanbarangpersediaan.php */