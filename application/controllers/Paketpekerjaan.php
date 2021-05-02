<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paketpekerjaan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_paketpekerjaan');         
		$this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_paketpekerjaan->Tampilpaketpekerjaan();
			$this->load->view('paketpekerjaan/paketpekerjaan',$data);
	}
	
	function tambah()
		{
			$this->load->view('paketpekerjaan/add'); 
		}
	
	function simpan_paketpekerjaan()
    {
        $data = array(
			'id_paketpekerjaan'=>$this->input->post('id_paketpekerjaan'),
			'paketpekerjaan'=>$this->input->post('paketpekerjaan'),
            'spk_paketpekerjaan'=>$this->input->post('spk_paketpekerjaan'),
            'username'=>$this->input->post('username')
        );
        $data['username'] = $this->session->userdata('username');
        $this->db->insert('tbl_paketpekerjaan',$data);
        redirect('paketpekerjaan');
	}

	function update($id_paketpekerjaan)
    {
        $data['ambil']=$this->model_paketpekerjaan->GetId_paketpekerjaan($id_paketpekerjaan);
        $this->load->view('paketpekerjaan/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'id_paketpekerjaan'=>$this->input->post('id_paketpekerjaan'),
			'paketpekerjaan'=>$this->input->post('paketpekerjaan'),
            'spk_paketpekerjaan'=>$this->input->post('spk_paketpekerjaan'),
            'username'=>$this->input->post('username')
        );
        $data['username'] = $this->session->userdata('username');
		$id_paketpekerjaan = $this->input->post('id_paketpekerjaan');
		$this->db->where('id_paketpekerjaan', $id_paketpekerjaan);
        $this->db->update('tbl_paketpekerjaan',$data);
        redirect('paketpekerjaan');
	}

	function hapus($id_paketpekerjaan)
    {
        $this->model_paketpekerjaan->Hapuspaketpekerjaan($id_paketpekerjaan);
        redirect('paketpekerjaan');
    }

}

/* End of file rekanan.php */
/* Location: ./application/controllers/rekanan.php */