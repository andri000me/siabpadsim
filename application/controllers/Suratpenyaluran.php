<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratpenyaluran extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_suratpenyaluran'); //load model model_suratpenyaluran
	 

    }

	function index()
	{
        $data['content'] = $this->model_suratpenyaluran->Getpenyaluran();
        $this->load->view('suratpenyaluran/suratpenyaluran', $data);
	}

 	function action_menambahdatapenyaluran()
    {       
            $data = array(
            'tanggal_pesan'=>$this->input->post('tanggal_pesan'),
			'id_mutasi'=>$this->input->post('id_mutasi'),
            'keterangan'=>$this->input->post('keterangan'),            
			'memesan'=>$this->input->post('memesan'),			        
			'belanja'=>$this->input->post('belanja'),
            'statuspenyaluran'=>$this->input->post('statuspenyaluran'),
            'username'=>$this->input->post('username')
					);
					$data['keterangan'] = "Menunggu Konfirmasi";
					$data['statuspenyaluran'] = "Sedang Diproses";
					$data['username'] = $this->session->userdata('username');
					
					$this->model_suratpenyaluran->menambahdatapenyaluran($data);
					redirect('penyaluran','refresh');
	}

	function update($id_mutasi = NULL)
    {
        $data['ambil']=$this->model_suratpenyaluran->GetId_suratpenyaluran($id_mutasi);
        $this->load->view('suratpenyaluran/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'no_sppb'=>$this->input->post('no_sppb'),
			'no_bapenyaluranbarang'=>$this->input->post('no_bapenyaluranbarang'),
            'tanggal_sppb'=>$this->input->post('tanggal_sppb'),
			'tanggal_bapenyaluranbarang'=>$this->input->post('tanggal_bapenyaluranbarang'),

        );
        $id_mutasi = $this->input->post('id_mutasi');
		$this->db->where('id_mutasi', $id_mutasi);
        $this->db->update('tbl_mutasi',$data);
        redirect('suratpenyaluran');
	}

    function surat1($id_mutasi)
	{
        
        $data['penyaluran']= $this->model_suratpenyaluran->penyaluran($id_mutasi);

        $detailpenyaluran = $this->model_suratpenyaluran->detailpenyaluran();
        if ($detailpenyaluran)
        {
            $data['detailpenyaluran'] = $this->model_suratpenyaluran->detailpenyaluransurat($id_mutasi);
        }

        $this->load->view('suratpenyaluran/surat1',$data);
        
	}

    function surat2($id_mutasi)
	{
        
        $data['penyaluran']= $this->model_suratpenyaluran->penyaluran($id_mutasi);

        $detailpenyaluran = $this->model_suratpenyaluran->detailpenyaluran();
        if ($detailpenyaluran)
        {
            $data['detailpenyaluran'] = $this->model_suratpenyaluran->detailpenyaluransurat($id_mutasi);
        }

        $this->load->view('suratpenyaluran/surat2',$data);
        
	}

}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */