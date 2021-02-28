<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekanan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_rekanan');

    }

	function index()
	{
		$data['hasil']=$this->model_rekanan->Tampilrekanan();
			$this->load->view('rekanan/rekanan',$data);
	}
	
	function tambah()
		{
			$this->load->view('rekanan/add'); 
		}
	
	function simpan_rekanan()
    {
        $data = array(
			'id_rekanan'=>$this->input->post('id_rekanan'),
			'nama_pimpinan'=>$this->input->post('nama_pimpinan'),
            'nama_rekanan'=>$this->input->post('nama_rekanan'),
            'alamat_rekanan'=>$this->input->post('alamat_rekanan'),
            'username'=>$this->input->post('username')
        );
        $data['username'] = $this->session->userdata('username');
        $this->db->insert('tbl_rekanan',$data);
        redirect('rekanan');
	}

	function update($id_rekanan)
    {
        $data['ambil']=$this->model_rekanan->GetId_rekanan($id_rekanan);
        $this->load->view('rekanan/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			
			'id_rekanan'=>$this->input->post('id_rekanan'),
			'nama_pimpinan'=>$this->input->post('nama_pimpinan'),
            'nama_rekanan'=>$this->input->post('nama_rekanan'),
            'alamat_rekanan'=>$this->input->post('alamat_rekanan'),
            'username'=>$this->input->post('username')
        );
        $data['username'] = $this->session->userdata('username');
		$id_rekanan = $this->input->post('id_rekanan');
		$this->db->where('id_rekanan', $id_rekanan);
        $this->db->update('tbl_rekanan',$data);
        redirect('rekanan');
	}

	function hapus($id_rekanan)
    {
        $this->model_rekanan->Hapusrekanan($id_rekanan);
        redirect('rekanan');
    }

}

/* End of file rekanan.php */
/* Location: ./application/controllers/rekanan.php */