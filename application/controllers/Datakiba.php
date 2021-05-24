<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakiba extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_datakiba');
	   $this->load->library('session');

    }

	function index()
	{
        $data['content'] = $this->model_datakiba->Tampildatakiba();
        $this->load->view('datakiba/datakiba', $data);
	}

   	function menambahdatadatakiba()
		{
			$this->load->view('datakiba/add');   
		}
	
	function action_menambahdatadatakiba()
    {       
		$nama_datakiba = $this->input->post('nama_datakiba');
        $this->db->from('tbl_kiba');
        $this->db->where('nama_datakiba', $nama_datakiba);
        $query = $this->db->get();  
        $rowcount = $query->num_rows();
 
        if ($rowcount>0){
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Nama datakiba sudah Terdaftar</div>');
					redirect('datakiba','refresh');
        }else{
                    	$data = array(
                            'nama_pimpinan'=>$this->input->post('nama_pimpinan'),
                            'nama_datakiba'=>$this->input->post('nama_datakiba'),
                            'alamat_datakiba'=>$this->input->post('alamat_datakiba'),
							'username'=>$this->input->post('username'),
							'id_opd'=>$this->input->post('id_opd')
						);
					$data['username']=$this->session->userdata('username');
					$data['id_opd']=$this->session->userdata('id_opd');
					$this->model_datakiba->menambahdatadatakiba($data);
					$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data datakiba Berhasil di Tambah</div>');
					redirect('datakiba','refresh');
		}
	}

	function updatedatadatakiba($id_kiba = NULL)
    {
        $this->db->where('id_kiba', $id_kiba);
            $data['content'] = $this->db->get('tbl_kiba');
			$this->load->view('datakiba/update', $data);
	}
	
    function action_updatedatadatakiba($id_kiba ='')
    {
        $data = array(
            'nama_pimpinan'=>$this->input->post('nama_pimpinan'),
            'nama_datakiba'=>$this->input->post('nama_datakiba'),
            'alamat_datakiba'=>$this->input->post('alamat_datakiba'),
			'username'=>$this->input->post('username'),
			'id_opd'=>$this->input->post('id_opd')
        );
		$data['username']=$this->session->userdata('username');
		$data['id_opd']=$this->session->userdata('id_opd');
        $this->model_datakiba->updatedatadatakiba($data, $id_kiba);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data datakiba berhasil diubah</div>');
        redirect('datakiba');
	}

	public function action_deletedatadatakiba($id_kiba = '')
	{
			$this->model_datakiba->deletedatadatakiba($id_kiba);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data datakiba berhasil dihapus</div>');
			redirect('datakiba','refresh');
	}


}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */