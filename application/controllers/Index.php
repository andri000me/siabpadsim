<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('session');
	}
	
	public function index()
	{
		if ($this->session->userdata('level') == "PPTK") {
			redirect('pptk','refresh');
		} elseif ($this->session->userdata('level') == "Pengurus Barang Pengguna") {
			redirect('pengurusbarangpengguna','refresh');
		} elseif ($this->session->userdata('level') == "Operator") {
			redirect('operator','refresh');
		} elseif ($this->session->userdata('level') == "Admin") {
			redirect('admin','refresh');
		} else {
			redirect('login','refresh');
		}
	}

}

/* End of file Index.php */
/* Location: ./application/controllers/Index.php */