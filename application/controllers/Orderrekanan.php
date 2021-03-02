<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orderrekanan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_orderrekanan'); //load model model_orderrekanan

    }

	function index()
	{
        $data['content'] = $this->db->get('tbl_fakturrekanan');
        $this->load->view('orderrekanan/orderrekanan', $data);
	}

   	function menambahdataorderrekanan()
		{
			$this->load->view('orderrekanan/add');   
		}
	
	function action_menambahdataorderrekanan()
    {       
            $data = array(
            'tanggal_pesan'=>$this->input->post('tanggal_pesan'),
			'id_rekanan'=>$this->input->post('id_rekanan'),
            'keterangan'=>$this->input->post('keterangan'),            
			'id_paketpekerjaan'=>$this->input->post('id_paketpekerjaan'),
            'statusorder'=>$this->input->post('statusorder'),
            'username'=>$this->input->post('username')
					);
					$data['keterangan'] = "Menunggu Konfirmasi";
					$data['statusorder'] = "Belum Diterima";
					$data['username'] = $this->session->userdata('username');
					
					$this->model_orderrekanan->menambahdataorderrekanan($data);
					redirect('orderrekanan','refresh');
	}
	

	public function action_deletedataorderrekanan($nama_rekanan = '')
	{
			$this->model_orderrekanan->deletedataorderrekanan($nama_rekanan);
			redirect('orderrekanan','refresh');
	}


}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */