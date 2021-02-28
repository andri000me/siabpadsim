<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurusbarangpengguna extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('pengurusbarangpengguna/index');
    } 
	
	public function barangpersediaan()
	{
		$this->load->view('pengurusbarangpengguna/barangpersediaan/index');
    }       
}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */