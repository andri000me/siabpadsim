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
            'keterangan'=>$this->input->post('keterangan'),       
            'statusorder'=>$this->input->post('statusorder'),
            'username'=>$this->input->post('username')
					);
					$data['jenis_mutasi'] = "Penyaluran";
					$data['keterangan'] = "Menunggu Konfirmasi";
					$data['statusorder'] = "Belum Diterima";
					$data['username'] = $this->session->userdata('username');
					
					$this->model_penyaluran->menambahdatapenyaluran($data);
					redirect('penyaluran','refresh');
	}
	

	public function action_deletedatapenyaluran($id_penyaluran = '')
	{
			$this->model_penyaluran->deletedatapenyaluran($id_penyaluran);
			redirect('penyaluran','refresh');
	}


}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */