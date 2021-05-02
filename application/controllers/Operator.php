<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        
        $this->load->model('model_order');        
        $this->load->library('session');
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('operator/index');
    }  
	
	public function barangpersediaan()
	{
		$this->load->view('operator/barangpersediaan/index');
    }

    public function sppb()
	{
		$this->load->view('sppb/sppb');
    }
    public function bpb()
	{
		$this->load->view('bpb/bpb');
    }
}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */