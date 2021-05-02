<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lihatlist extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_lihatlist');        
        $this->load->library('session');

    }

	function index($id_penyaluran)
	{
        $data['hasilparsing'] = $this->uri->segment(3);
        $data['hasil']=$this->model_lihatlist->Tampilihatlist($id_penyaluran);
        $this->load->view('lihatlist/lihatlist',$data);
	}

}

/* End of file lihatlist.php */
/* Location: ./application/controllers/lihatlist.php */