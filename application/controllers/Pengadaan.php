<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengadaan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_pengadaan'); //load model model_pengadaan

    }

	function index()
	{
        $data['content'] = $this->model_pengadaan->Getpengadaan();
        $this->load->view('pengadaan/pengadaan', $data);
	}

   	function menambahdatapengadaan()
		{
			$this->load->view('pengadaan/add');   
		}
	
	function action_menambahdatapengadaan()
    {       
            $data = array(
            'tanggal_pesan'=>$this->input->post('tanggal_pesan'),
			'id_rekanan'=>$this->input->post('id_rekanan'),
            'keterangan'=>$this->input->post('keterangan'),            
			'memesan'=>$this->input->post('memesan'),			        
			'belanja'=>$this->input->post('belanja'),
            'statusorder'=>$this->input->post('statusorder'),
            'username'=>$this->input->post('username')
					);
					$data['keterangan'] = "Menunggu Konfirmasi";
					$data['statusorder'] = "Belum Diterima";
					$data['username'] = $this->session->userdata('username');
					
					$this->model_pengadaan->menambahdatapengadaan($data);
					redirect('pengadaan','refresh');
	}
	

	public function action_deletedatapengadaan($id_pengadaan = '')
	{
			$this->model_pengadaan->deletedatapengadaan($id_pengadaan);
			redirect('pengadaan','refresh');
	}


}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */