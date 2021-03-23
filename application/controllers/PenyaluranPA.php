<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenyaluranPA extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_penyaluranPA'); //load model model_penyaluranPA
	 

    }

	function index()
	{
        $data['content'] = $this->model_penyaluranPA->Getpenyaluran();
        $this->load->view('penyaluranPA/penyaluranPA', $data);
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
        redirect('penyaluranPA');
    }

    function updatestatusorder($id_penyaluran)
    {
        $data = array(
            'statusorder'=>$this->input->post('statusorder'),
            'tanggalterimabarang'=>$this->input->post('tanggalterimabarang')
        );
        $data['statusorder'] = "Sudah Diterima";
        $data['tanggalterimabarang'] = date("Y-m-d");        
		$id = $this->input->post('id_penyaluran');
		$this->db->where('id_penyaluran', $id_penyaluran);
        $this->db->update('tbl_penyaluran',$data);
        redirect('penyaluranPA');
    }

    function lihatlistpenyaluran($id_penyaluran)
	{
        $data['hasil']=$this->model_penyaluranPA->Lihatlistpenyaluran($id_penyaluran);
        $this->load->view('penyaluranPA/lihatlistorder',$data);
	}

 
	

}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */