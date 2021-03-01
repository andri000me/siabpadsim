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

	function lihat($tahun_penyaluran)
    {
        $data['hasil']=$this->model_laporanpengeluaranbarangpersediaan->Gettahun_penyaluran($tahun_penyaluran);
        $this->load->view('laporanpengeluaranbarangpersediaan/lihat',$data);
	}
	
    function print($tahun_penyaluran)
	{
        $data['hasil']=$this->model_laporanpengeluaranbarangpersediaan->Gettahun_penyaluran($tahun_penyaluran);
        $this->load->view('laporanpengeluaranbarangpersediaan/print',$data);
	}

}

/* End of file laporanpengeluaranbarangpersediaan.php */
/* Location: ./application/controllers/laporanpengeluaranbarangpersediaan.php */