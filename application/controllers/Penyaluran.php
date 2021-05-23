<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyaluran extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_penyaluran'); //load model model_penyaluran

    }

	function index()
	{
        $data['content'] = $this->model_penyaluran->Getpenyaluran();
        $this->load->view('penyaluran/penyaluran', $data);
	}

   	function menambahdatapenyaluran()
		{
			$this->load->view('penyaluran/add');   
		}
	
	function action_menambahdatapenyaluran()
    {       
            $data = array(
			'jenis_mutasi'=>$this->input->post('jenis_mutasi'),
            'tanggal_pesan'=>$this->input->post('tanggal_pesan'), 
            'statuspenyaluran'=>$this->input->post('statuspenyaluran'),
            'username'=>$this->input->post('username')
					);
					$data['jenis_mutasi'] = "Penyaluran";
					$data['statuspenyaluran'] = "Belum Diproses";
					$data['username'] = $this->session->userdata('username');
					
					$this->model_penyaluran->menambahdatapenyaluran($data);
					redirect('penyaluran','refresh');
	}
	

	public function action_deletedatapenyaluran($id_mutasi = '')
	{
			$this->model_penyaluran->deletedatapenyaluran($id_mutasi);
			redirect('penyaluran','refresh');
	}


}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */