<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class caridatakibb extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_caridatakibb');
	   $this->load->library('session');

    }

	function index()
	{
        $data['content'] = $this->model_caridatakibb->Tampilcaridatakibb();
        $this->load->view('caridatakibb/caridatakibb', $data);
	}

   	function menambahdatacaridatakibb()
		{
			$this->load->view('caridatakibb/add');   
		}
	
	function action_menambahdatacaridatakibb()
    {       
		$data['content'] = $this->model_caridatakibb->Tampilcaridatakibb();
        $this->load->view('caridatakibb/hasil', $data);
	}
}