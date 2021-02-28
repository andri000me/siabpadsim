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
		if ($this->session->userdata('level') == "Kepala") {
			$this->load->view('kepala','refresh');
		} elseif ($this->session->userdata('level') == "Sekretaris") {
			redirect('sekretaris','refresh');
		} elseif ($this->session->userdata('level') == "User") {
			redirect('user','refresh');
		} elseif ($this->session->userdata('level') == "Admin") {
			redirect('admin','refresh');
		} else {
			$this->load->view('login/login');
		}
	}

}

/* End of file Index.php */
/* Location: ./application/controllers/Index.php */