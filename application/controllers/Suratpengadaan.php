<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratpengadaan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_suratpengadaan'); //load model model_suratpengadaan
	 

    }

	function index()
	{
        $data['content'] = $this->model_suratpengadaan->Getpengadaan();
        $this->load->view('suratpengadaan/suratpengadaan', $data);
	}

 	function action_menambahdatapengadaan()
    {       
            $data = array(
            'tanggal_pesan'=>$this->input->post('tanggal_pesan'),
			'id_mutasi'=>$this->input->post('id_mutasi'),
            'keterangan'=>$this->input->post('keterangan'),            
			'memesan'=>$this->input->post('memesan'),			        
			'belanja'=>$this->input->post('belanja'),
            'statusorder'=>$this->input->post('statusorder'),
            'username'=>$this->input->post('username')
					);
					$data['keterangan'] = "Menunggu Konfirmasi";
					$data['statusorder'] = "Sedang Diproses";
					$data['username'] = $this->session->userdata('username');
					
					$this->model_suratpengadaan->menambahdatapengadaan($data);
					redirect('pengadaan','refresh');
	}

	function update($id_mutasi = NULL)
    {
        $data['ambil']=$this->model_suratpengadaan->GetId_suratpengadaan($id_mutasi);
        $this->load->view('suratpengadaan/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'no_suratpermohonanpptk'=>$this->input->post('no_suratpermohonanpptk'),
			'no_suratpermohonanpenyedia'=>$this->input->post('no_suratpermohonanpenyedia'),
			'no_suratbalasan'=>$this->input->post('no_suratbalasan'),
            'no_suratperintahpengiriman'=>$this->input->post('no_suratperintahpengiriman'),
            'no_bapenyedia'=>$this->input->post('no_bapenyedia'),
			'no_bappk'=>$this->input->post('no_bappk'),
            'no_kwitansi'=>$this->input->post('no_kwitansi'),
            'no_faktur'=>$this->input->post('no_faktur'),
            'no_suratpermohonanpembayaran'=>$this->input->post('no_suratpermohonanpembayaran'),
            'no_bapembayaran'=>$this->input->post('no_bapembayaran'),
            'tanggal_suratpermohonanpptk'=>$this->input->post('tanggal_suratpermohonanpptk'),
			'tanggal_suratpermohonanpenyedia'=>$this->input->post('tanggal_suratpermohonanpenyedia'),
			'tanggal_suratbalasan'=>$this->input->post('tanggal_suratbalasan'),
            'tanggal_suratperintahpengiriman'=>$this->input->post('tanggal_suratperintahpengiriman'),
            'tanggal_bapenyedia'=>$this->input->post('tanggal_bapenyedia'),
			'tanggal_bappk'=>$this->input->post('tanggal_bappk'),
            'tanggal_kwitansi'=>$this->input->post('tanggal_kwitansi'),
            'tanggal_faktur'=>$this->input->post('tanggal_faktur'),
            'tanggal_suratpermohonanpembayaran'=>$this->input->post('tanggal_suratpermohonanpembayaran'),
            'tanggal_bapembayaran'=>$this->input->post('tanggal_bapembayaran'),

        );
        $id_mutasi = $this->input->post('id_mutasi');
		$this->db->where('id_mutasi', $id_mutasi);
        $this->db->update('tbl_mutasi',$data);
        redirect('suratpengadaan');
	}
    
    function surat1($id_mutasi)
	{
        
        $data['pengadaan']= $this->model_suratpengadaan->pengadaan($id_mutasi);

        $detailpengadaan = $this->model_suratpengadaan->detailpengadaan();
        if ($detailpengadaan)
        {
            $data['detailpengadaan'] = $this->model_suratpengadaan->detailpengadaansurat($id_mutasi);
        }

        $this->load->view('suratpengadaan/surat1',$data);
        
	}

    function surat2($id_mutasi)
	{
        
        $data['pengadaan']= $this->model_suratpengadaan->pengadaan($id_mutasi);

        $detailpengadaan = $this->model_suratpengadaan->detailpengadaan();
        if ($detailpengadaan)
        {
            $data['detailpengadaan'] = $this->model_suratpengadaan->detailpengadaansurat($id_mutasi);
        }

        $this->load->view('suratpengadaan/surat2',$data);
        
	}

    function surat3($id_mutasi)
	{
        
        $data['pengadaan']= $this->model_suratpengadaan->pengadaan($id_mutasi);

        $detailpengadaan = $this->model_suratpengadaan->detailpengadaan();
        if ($detailpengadaan)
        {
            $data['detailpengadaan'] = $this->model_suratpengadaan->detailpengadaansurat($id_mutasi);
        }

        $this->load->view('suratpengadaan/surat3',$data);
        
	}

    function surat4($id_mutasi)
	{
        
        $data['pengadaan']= $this->model_suratpengadaan->pengadaan($id_mutasi);

        $detailpengadaan = $this->model_suratpengadaan->detailpengadaan();
        if ($detailpengadaan)
        {
            $data['detailpengadaan'] = $this->model_suratpengadaan->detailpengadaansurat($id_mutasi);
        }

        $this->load->view('suratpengadaan/surat4',$data);
        
	}


    function surat5($id_mutasi)
	{
        
        $data['pengadaan']= $this->model_suratpengadaan->pengadaan($id_mutasi);

        $detailpengadaan = $this->model_suratpengadaan->detailpengadaan();
        if ($detailpengadaan)
        {
            $data['detailpengadaan'] = $this->model_suratpengadaan->detailpengadaansurat($id_mutasi);
        }

        $this->load->view('suratpengadaan/surat5',$data);
        
	}

    function surat6($id_mutasi)
	{
        
        $data['pengadaan']= $this->model_suratpengadaan->pengadaan($id_mutasi);

        $detailpengadaan = $this->model_suratpengadaan->detailpengadaan();
        if ($detailpengadaan)
        {
            $data['detailpengadaan'] = $this->model_suratpengadaan->detailpengadaansurat($id_mutasi);
        }

        $this->load->view('suratpengadaan/surat6',$data);
        
	}

    function surat7($id_mutasi)
	{
        
        $data['pengadaan']= $this->model_suratpengadaan->pengadaan($id_mutasi);

        $detailpengadaan = $this->model_suratpengadaan->detailpengadaan();
        if ($detailpengadaan)
        {
            $data['detailpengadaan'] = $this->model_suratpengadaan->detailpengadaansurat($id_mutasi);
        }

        $this->load->view('suratpengadaan/surat7',$data);
        
	}

    function surat8($id_mutasi)
	{
        
        $data['pengadaan']= $this->model_suratpengadaan->pengadaan($id_mutasi);

        $detailpengadaan = $this->model_suratpengadaan->detailpengadaan();
        if ($detailpengadaan)
        {
            $data['detailpengadaan'] = $this->model_suratpengadaan->detailpengadaansurat($id_mutasi);
        }

        $this->load->view('suratpengadaan/surat8',$data);
        
	}

   

    function surat9($id_mutasi)
	{
        
        $data['pengadaan']= $this->model_suratpengadaan->pengadaan($id_mutasi);

        $detailpengadaan = $this->model_suratpengadaan->detailpengadaan();
        if ($detailpengadaan)
        {
            $data['detailpengadaan'] = $this->model_suratpengadaan->detailpengadaansurat($id_mutasi);
        }

        $this->load->view('suratpengadaan/surat9',$data);
        
	}

    function surat10($id_mutasi)
	{
        
        $data['pengadaan']= $this->model_suratpengadaan->pengadaan($id_mutasi);

        $detailpengadaan = $this->model_suratpengadaan->detailpengadaan();
        if ($detailpengadaan)
        {
            $data['detailpengadaan'] = $this->model_suratpengadaan->detailpengadaansurat($id_mutasi);
        }

        $this->load->view('suratpengadaan/surat10',$data);
        
	}

   

}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */