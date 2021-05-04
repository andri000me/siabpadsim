<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekanan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_rekanan');
	   $this->load->library('session');

    }

	function index()
	{
        $data['content'] = $this->model_rekanan->Tampilrekanan();
        $this->load->view('rekanan/rekanan', $data);
	}

   	function menambahdatarekanan()
		{
			$this->load->view('rekanan/add');   
		}
	
	function action_menambahdatarekanan()
    {       
		$nama_rekanan = $this->input->post('nama_rekanan');
        $this->db->from('tbl_rekanan');
        $this->db->where('nama_rekanan', $nama_rekanan);
        $query = $this->db->get();  
        $rowcount = $query->num_rows();
 
        if ($rowcount>0){
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Nama Rekanan sudah Terdaftar</div>');
					redirect('rekanan','refresh');
        }else{
                    	$data = array(
                            'nama_pimpinan'=>$this->input->post('nama_pimpinan'),
                            'nama_rekanan'=>$this->input->post('nama_rekanan'),
                            'alamat_rekanan'=>$this->input->post('alamat_rekanan'),
							'username'=>$this->input->post('username'),
							'id_opd'=>$this->input->post('id_opd')
						);
					$data['username']=$this->session->userdata('username');
					$data['id_opd']=$this->session->userdata('id_opd');
					$this->model_rekanan->menambahdatarekanan($data);
					$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Rekanan Berhasil di Tambah</div>');
					redirect('rekanan','refresh');
		}
	}

	function updatedatarekanan($id_rekanan = NULL)
    {
        $this->db->where('id_rekanan', $id_rekanan);
            $data['content'] = $this->db->get('tbl_rekanan');
			$this->load->view('rekanan/update', $data);
	}
	
    function action_updatedatarekanan($id_rekanan ='')
    {
        $data = array(
            'nama_pimpinan'=>$this->input->post('nama_pimpinan'),
            'nama_rekanan'=>$this->input->post('nama_rekanan'),
            'alamat_rekanan'=>$this->input->post('alamat_rekanan'),
			'username'=>$this->input->post('username'),
			'id_opd'=>$this->input->post('id_opd')
        );
		$data['username']=$this->session->userdata('username');
		$data['id_opd']=$this->session->userdata('id_opd');
        $this->model_rekanan->updatedatarekanan($data, $id_rekanan);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Rekanan berhasil diubah</div>');
        redirect('rekanan');
	}

	public function action_deletedatarekanan($id_rekanan = '')
	{
			$this->model_rekanan->deletedatarekanan($id_rekanan);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data Rekanan berhasil dihapus</div>');
			redirect('rekanan','refresh');
	}


}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */