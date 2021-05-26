<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stnk extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_stnk');
	   $this->load->library('session');

    }

	function index()
	{
        $data['content'] = $this->model_stnk->Tampilstnk();
        $this->load->view('stnk/stnk', $data);
	}

   	function menambahdatastnk()
		{
			$this->load->view('stnk/add');   
		}
	
	function action_caridatastnk()
    {       
		$data['content'] = $this->model_stnk->caristnk();
        $this->load->view('stnk/hasil', $data);
	}
}