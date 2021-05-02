<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lihatlistorder extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_lihatlistorder');        
        $this->load->library('session');

    }

	function index($id_faktur)
	{
        $data['hasilparsing'] = $this->uri->segment(3);
        $data['hasil']=$this->model_lihatlistorder->Tampilihatlistorder($id_faktur);
        $this->load->view('lihatlistorder/lihatlistorder',$data);
	}

}

/* End of file lihatlistorder.php */
/* Location: ./application/controllers/lihatlistorder.php */