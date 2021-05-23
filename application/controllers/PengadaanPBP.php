<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengadaanPBP extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_pengadaanPBP'); //load model model_pengadaanPBP
	 

    }

	function index()
	{
        $data['content'] = $this->model_pengadaanPBP->Getpengadaan();
        $this->load->view('pengadaanPBP/pengadaanPBP', $data);
	}

    function updateketerangan($id_mutasi)
    {
        $data = array(
            'keterangan'=>$this->input->post('statusorder')
        );
        $data['keterangan'] = "Disetujui";
		$id = $this->input->post('id_mutasi');
		$this->db->where('id_mutasi', $id_mutasi);
        $this->db->update('tbl_mutasi',$data);
        redirect('pengadaanPBP');
    }

    function updatestatusorder($id_mutasi)
    {
        $data = array(
            'statusorder'=>$this->input->post('statusorder'),
            'tanggalterimabarang'=>$this->input->post('tanggalterimabarang')
        );
        $data['statusorder'] = "Selesai";
        $data['tanggalterimabarang'] = date("Y-m-d");        
		$id = $this->input->post('id_mutasi');
		$this->db->where('id_mutasi', $id_mutasi);
        $this->db->update('tbl_mutasi',$data);
        redirect('pengadaanPBP');
    }

    function lihatlistpengadaan($id_mutasi)
	{
        $data['hasil']=$this->model_pengadaanPBP->Lihatlistpengadaan($id_mutasi);
        $this->load->view('pengadaanPBP/lihatlistorder',$data);
	}

 
	

}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */