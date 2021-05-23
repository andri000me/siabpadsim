<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenyaluranPBP extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_penyaluranPBP'); //load model model_penyaluranPBP
	 

    }

	function index()
	{
        $data['content'] = $this->model_penyaluranPBP->Getpenyaluran();
        $this->load->view('penyaluranPBP/penyaluranPBP', $data);
	}

    function updateketerangan($id_mutasi)
    {
        $data = array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data['keterangan'] = "Disetujui";
		$id = $this->input->post('id_mutasi');
		$this->db->where('id_mutasi', $id_mutasi);
        $this->db->update('tbl_mutasi',$data);
        redirect('penyaluranPBP');
    }

    function updatestatusorder($id_mutasi)
    {
        $data = array(
            'statuspenyaluran'=>$this->input->post('statuspenyaluran'),
            'tanggalpenyaluran'=>$this->input->post('tanggalpenyaluran')
        );
        $data['statuspenyaluran'] = "Sudah Disalurkan";    
        $data['tanggalpenyaluran'] = date("Y-m-d");   
		$id = $this->input->post('id_mutasi');
		$this->db->where('id_mutasi', $id_mutasi);
        $this->db->update('tbl_mutasi',$data);
        redirect('penyaluranPBP');
    }

    function lihatlistpenyaluran($id_mutasi)
	{
        $data['hasil']=$this->model_penyaluranPBP->Lihatlistpenyaluran($id_mutasi);
        $this->load->view('penyaluranPBP/lihatlistorder',$data);
	}

 
	

}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */