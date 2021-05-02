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

    function updateketerangan($id_penyaluran)
    {
        $data = array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data['keterangan'] = "Disetujui";
		$id = $this->input->post('id_penyaluran');
		$this->db->where('id_penyaluran', $id_penyaluran);
        $this->db->update('tbl_penyaluran',$data);
        redirect('penyaluranPBP');
    }

    function updatestatusorder($id_penyaluran)
    {
        $data = array(
            'statusorder'=>$this->input->post('statusorder')
        );
        $data['statusorder'] = "Sudah Disalurkan";       
		$id = $this->input->post('id_penyaluran');
		$this->db->where('id_penyaluran', $id_penyaluran);
        $this->db->update('tbl_penyaluran',$data);
        redirect('penyaluranPBP');
    }

    function lihatlistpenyaluran($id_penyaluran)
	{
        $data['hasil']=$this->model_penyaluranPBP->Lihatlistpenyaluran($id_penyaluran);
        $this->load->view('penyaluranPBP/lihatlistorder',$data);
	}

 
	

}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */