<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ssh extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_ssh'); //load model model_ssh 

    }

	function index()
	{
        $data['content'] = $this->db->get('tbl_ssh');
        $this->load->view('ssh/ssh', $data);
	}

   	function menambahdatassh()
		{
			$this->load->view('ssh/add');   
		}
	
	function action_menambahdatassh()
    {       
                    	$data = array(
                            'Kelompok_ssh'=>$this->input->post('Kelompok_ssh'),
                            'Namabarang_ssh'=>$this->input->post('Namabarang_ssh'),
                            'Spesifikasi_ssh'=>$this->input->post('Spesifikasi_ssh'),
                            'Satuan_ssh'=>$this->input->post('Satuan_ssh'),
                            'Hargasatuan_ssh'=>$this->input->post('Hargasatuan_ssh'),
                            'Tahun_ssh'=>$this->input->post('Tahun_ssh'),
                            'No_skpd'=>$this->input->post('No_skpd'),            
                            'id_opd'=>$this->input->post('id_opd'),
                            'username'=>$this->input->post('username')
					);
                    $data['username'] = $this->session->userdata('username');
                    $data['id_opd'] = $this->session->userdata('id_opd');

					$this->model_ssh->menambahdatassh($data);
					redirect('ssh','refresh');
	}

	function updatedatassh($id_ssh = NULL)
    {
            $this->db->where('id_ssh', $id_ssh);
            $data['content'] = $this->db->get('tbl_ssh');
			$this->load->view('ssh/update', $data);
	}
	
    function action_updatedatassh($id_ssh ='')
    {
        $data = array(
            'Kelompok_ssh'=>$this->input->post('Kelompok_ssh'),
            'Namabarang_ssh'=>$this->input->post('Namabarang_ssh'),
            'Spesifikasi_ssh'=>$this->input->post('Spesifikasi_ssh'),
            'Satuan_ssh'=>$this->input->post('Satuan_ssh'),
            'Hargasatuan_ssh'=>$this->input->post('Hargasatuan_ssh'),
            'Tahun_ssh'=>$this->input->post('Tahun_ssh'),
            'No_skpd'=>$this->input->post('No_skpd'),            
            'id_opd'=>$this->input->post('id_opd'),
            'username'=>$this->input->post('username')
        );
        $data['username'] = $this->session->userdata('username');
        $data['id_opd'] = $this->session->userdata('id_opd');
		
        $this->model_ssh->updatedatassh($data, $id_ssh);
        redirect('ssh');
	}

	public function action_deletedatassh($id_ssh = '')
	{
			$this->model_ssh->deletedatassh($id_ssh);
			redirect('ssh','refresh');
	}


}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */