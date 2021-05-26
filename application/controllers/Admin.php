<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('admin/index');
    }     
	public function laporanbarangpersediaan()
	{
		$this->load->view('admin/laporanbarangpersediaan/index');
    }   
	public function laporanaset()
	{
		$this->load->view('admin/laporanaset/index');
    }              
}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */