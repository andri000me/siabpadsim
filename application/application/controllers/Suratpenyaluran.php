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
			'id_penyaluran'=>$this->input->post('id_penyaluran'),
            'keterangan'=>$this->input->post('keterangan'),            
			'memesan'=>$this->input->post('memesan'),			        
			'belanja'=>$this->input->post('belanja'),
            'statusorder'=>$this->input->post('statusorder'),
            'username'=>$this->input->post('username')
					);
					$data['keterangan'] = "Menunggu Konfirmasi";
					$data['statusorder'] = "Belum Diterima";
					$data['username'] = $this->session->userdata('username');
					
					$this->model_suratpenyaluran->menambahdatapenyaluran($data);
					redirect('penyaluran','refresh');
	}

	function update($id_penyaluran = NULL)
    {
        $data['ambil']=$this->model_suratpenyaluran->GetId_suratpenyaluran($id_penyaluran);
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
        $id_penyaluran = $this->input->post('id_penyaluran');
		$this->db->where('id_penyaluran', $id_penyaluran);
        $this->db->update('tbl_penyaluran',$data);
        redirect('suratpenyaluran');
	}

    function surat1($id_penyaluran)
	{
        
        $data['penyaluran']= $this->model_suratpenyaluran->penyaluran($id_penyaluran);

        $detailpenyaluran = $this->model_suratpenyaluran->detailpenyaluran();
        if ($detailpenyaluran)
        {
            $data['detailpenyaluran'] = $this->model_suratpenyaluran->detailpenyaluransurat($id_penyaluran);
        }

        $this->load->view('suratpenyaluran/surat1',$data);
        
	}

    function surat2($id_penyaluran)
	{
        
        $data['penyaluran']= $this->model_suratpenyaluran->penyaluran($id_penyaluran);

        $detailpenyaluran = $this->model_suratpenyaluran->detailpenyaluran();
        if ($detailpenyaluran)
        {
            $data['detailpenyaluran'] = $this->model_suratpenyaluran->detailpenyaluransurat($id_penyaluran);
        }

        $this->load->view('suratpenyaluran/surat2',$data);
        
	}

}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */