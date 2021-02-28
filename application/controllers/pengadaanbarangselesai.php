<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengadaanbarangselesai extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_orderrekanan');        
        $this->load->library('session');

    }

    function index()    
	{
		$data['hasil']=$this->model_orderrekanan->Tampilpengadaanbarangselesai();
			$this->load->view('pengadaanbarangselesai/pengadaanbarangselesai',$data);
	}


}

/* End of file order.php */
/* Location: ./application/controllers/order.php */