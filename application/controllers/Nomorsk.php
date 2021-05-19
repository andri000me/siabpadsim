<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nomorsk extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
       $this->load->model('model_nomorsk'); 
	   $this->load->library('session');   
    }

	function index()
	{
        $data['content'] = $this->model_nomorsk->GetNomorsk();
        $this->load->view('nomorsk/nomorsk', $data);
	}
    
    function nomorsk()
	{
        $data['content'] = $this->model_nomorsk->GetNomorsk();
        $this->load->view('nomorsk/nomorsk', $data);
	}

   	function menambahdatanomorsk()
		{
			$this->load->view('nomorsk/add');   
		}
	
	function action_menambahdatanomorsk()
    {       
                    $data = array(
                            'no_sk'=>$this->input->post('no_sk'),
                            'tanggal_sk'=>$this->input->post('tanggal_sk'),
                            'tanggal_skberakhir'=>$this->input->post('tanggal_skberakhir'),
                            'nama'=>$this->input->post('nama'),
                            'nip'=>$this->input->post('nip'),
                            'jabatan'=>$this->input->post('jabatan'),
                            'gol_jabatan'=>$this->input->post('gol_jabatan'),
                            'gol'=>$this->input->post('gol')
					);
					$data['id_user']=$this->session->userdata('username');
		            $data['id_opd']=$this->session->userdata('id_opd');
					$this->model_nomorsk->menambahdatanomorsk($data);
					redirect('nomorsk','refresh');
	}

    function updatedatanomorsk($id = NULL)
    {
            $this->db->where('id', $id);
            $data['content'] = $this->db->get('tbl_sk');
			$this->load->view('nomorsk/update', $data);
	}
	
    function action_updatedatanomorsk($id='')
    {
        $data = array(
            'no_sk'=>$this->input->post('no_sk'),
            'tanggal_sk'=>$this->input->post('tanggal_sk'),
            'tanggal_skberakhir'=>$this->input->post('tanggal_skberakhir'),
            'nama'=>$this->input->post('nama'),
            'nip'=>$this->input->post('nip'),
            'jabatan'=>$this->input->post('jabatan'),
            'gol_jabatan'=>$this->input->post('gol_jabatan'),
            'gol'=>$this->input->post('gol')
        );
		$data['id_user']=$this->session->userdata('username');
		$data['id_opd']=$this->session->userdata('id_opd');
        $this->model_nomorsk->updatedatanomorsk($data, $id,$no_sk);
        redirect('nomorsk');
	}

	public function action_deletedatanomorsk($id = '')
	{
			$this->model_nomorsk->deletedatanomorsk($id);
			redirect('nomorsk','refresh');
	}


}
