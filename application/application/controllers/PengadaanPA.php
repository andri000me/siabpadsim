<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengadaanPA extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_PengadaanPA'); //load model model_PengadaanPA
	 

    }

	function index()
	{
        $data['content'] = $this->model_PengadaanPA->Getpengadaan();
        $this->load->view('PengadaanPA/PengadaanPA', $data);
	}

    function updateketerangan($id_pengadaan)
    {
        $data = array(
            'keterangan'=>$this->input->post('statusorder')
        );
        $data['keterangan'] = "Disetujui";
		$id = $this->input->post('id_pengadaan');
		$this->db->where('id_pengadaan', $id_pengadaan);
        $this->db->update('tbl_pengadaan',$data);
        redirect('PengadaanPA');
    }

    function updatestatusorder($id_pengadaan)
    {
        $data = array(
            'statusorder'=>$this->input->post('statusorder'),
            'tanggalterimabarang'=>$this->input->post('tanggalterimabarang')
        );
        $data['statusorder'] = "Sudah Diterima";
        $data['tanggalterimabarang'] = date("Y-m-d");        
		$id = $this->input->post('id_pengadaan');
		$this->db->where('id_pengadaan', $id_pengadaan);
        $this->db->update('tbl_pengadaan',$data);
        redirect('PengadaanPA');
    }

    function lihatlistpengadaan($id_pengadaan)
	{
        $data['hasil']=$this->model_PengadaanPA->Lihatlistpengadaan($id_pengadaan);
        $this->load->view('PengadaanPA/lihatlistorder',$data);
	}

 
	

}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */