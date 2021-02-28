<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opd extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_opd');

    }

	function index()
	{
		$data['hasil']=$this->model_opd->TampilOpd();
			$this->load->view('opd/opd',$data);
	}
	
	function tambah()
		{
			$this->load->view('opd/add'); 
		}
	
	function simpan_opd()
    {
        $data = array(
			'id_opd'=>$this->input->post('id_opd'),
			'kode_opd'=>$this->input->post('kode_opd'),
            'nama_opd'=>$this->input->post('nama_opd'),
            'username'=>$this->input->post('username')
        );
        $data['username'] = $this->session->userdata('username');
        $this->db->insert('tbl_opd',$data);
        redirect('opd');
	}

	function update($id_opd)
    {
        $data['ambil']=$this->model_opd->GetId_opd($id_opd);
        $this->load->view('opd/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			
			'id_opd'=>$this->input->post('id_opd'),
			'kode_opd'=>$this->input->post('kode_opd'),
			'nama_opd'=>$this->input->post('nama_opd'),
            'username'=>$this->input->post('username')
        );
        $data['username'] = $this->session->userdata('username');
		$id_opd = $this->input->post('id_opd');
		$this->db->where('id_opd', $id_opd);
        $this->db->update('tbl_opd',$data);
        redirect('opd');
	}

	function hapus($id_opd)
    {
        $this->model_opd->HapusOpd($id_opd);
        redirect('opd');
    }

}

/* End of file opd.php */
/* Location: ./application/controllers/opd.php */