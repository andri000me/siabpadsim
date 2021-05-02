<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_akun');

    }

	function index()
	{
		$data['hasil']=$this->model_akun->Tampilakun();
			$this->load->view('akun/akun',$data);
	}
	
	function tambah()
		{
			$this->load->view('akun/add'); 
		}
	
	function simpan_akun()
    {
        $data = array(
            'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
            'nama'=>$this->input->post('nama'),
            'jabatan'=>$this->input->post('jabatan'),
            'level'=>$this->input->post('level'),
            'id_opd'=>$this->input->post('id_opd'),
            'admin'=>$this->input->post('admin')
        );
        $data['admin'] = $this->session->userdata('username');
        $this->db->insert('tbl_akun',$data);
        redirect('akun');
	}

	function update($id)
    {
        $data['ambil']=$this->model_akun->GetId($id);
        $this->load->view('akun/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
            'nama'=>$this->input->post('nama'),
            'jabatan'=>$this->input->post('jabatan'),
            'level'=>$this->input->post('level'),
            'id_opd'=>$this->input->post('id_opd'),
            'admin'=>$this->input->post('admin')
        );
        $data['admin'] = $this->session->userdata('username');
		$id = $this->input->post('id');
		$this->db->where('id', $id);
        $this->db->update('tbl_akun',$data);
        redirect('akun');
	}

	function hapus($id)
    {
        $this->model_akun->Hapusakun($id);
        redirect('akun');
    }

}

/* End of file akun.php */
/* Location: ./application/controllers/akun.php */