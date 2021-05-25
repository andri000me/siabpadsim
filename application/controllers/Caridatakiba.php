<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class caridatakiba extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_caridatakiba');
	   $this->load->library('session');

    }

	function index()
	{
        $data['content'] = $this->model_caridatakiba->Tampilcaridatakiba();
        $this->load->view('caridatakiba/caridatakiba', $data);
	}

   	function menambahdatacaridatakiba()
		{
			$this->load->view('caridatakiba/add');   
		}
	
	function action_menambahdatacaridatakiba()
    {       
		$data['content'] = $this->model_caridatakiba->Tampilcaridatakiba();
        $this->load->view('caridatakiba/hasil', $data);
	}
}