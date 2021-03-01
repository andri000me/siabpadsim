<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekanan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_rekanan'); //load model model_rekanan

    }

	function index()
	{
        $data['content'] = $this->db->get('tbl_rekanan');
        $this->load->view('rekanan/rekanan', $data);
	}

   	function menambahdatarekanan()
		{
			$this->load->view('rekanan/add');   
		}
	
	function action_menambahdatarekanan()
    {       
                    	$data = array(
                            'nama_pimpinan'=>$this->input->post('nama_pimpinan'),
                            'nama_rekanan'=>$this->input->post('nama_rekanan'),
                            'alamat_rekanan'=>$this->input->post('alamat_rekanan')
					);

					$this->model_rekanan->menambahdatarekanan($data);
					redirect('rekanan','refresh');
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
            'alamat_rekanan'=>$this->input->post('alamat_rekanan')
        );
		
        $this->model_rekanan->updatedatarekanan($data, $id_rekanan);
        redirect('rekanan');
	}

	public function action_deletedatarekanan($id_rekanan = '')
	{
			$this->model_rekanan->deletedatarekanan($id_rekanan);
			redirect('rekanan','refresh');
	}


}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */