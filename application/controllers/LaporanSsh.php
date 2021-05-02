<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanSsh extends CI_Controller {

	function __construct()
    {
        parent::__construct();    
        $this->load->library('session');

    }

	function index()
	{
		
	}

    public function barangPersediaan()
	{
		$mpdf = new \Mpdf\Mpdf();
		$data = $this->load->view('laporan/barang_persediaan', [], TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();
	}
}