<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orderrekanan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_orderrekanan');        
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_orderrekanan->Tampilorderrekanan();
			$this->load->view('orderrekanan/orderrekanan',$data);
	}
	
	function tambah()
		{
			$this->load->view('orderrekanan/add'); 
		}
	
	function simpan_orderrekanan()
    {
        $data = array(
			'id_faktur'=>$this->input->post('id_faktur'),
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

        $this->db->insert('tbl_fakturrekanan',$data);
        redirect('orderrekanan');
	}

	function update($id_faktur)
    {
        $data['ambil']=$this->model_orderrekanan->Getid_faktur($id_faktur);
        $this->load->view('orderrekanan/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'id_faktur'=>$this->input->post('id_faktur'),
            'tanggal_pesan'=>$this->input->post('tanggal_pesan'),
			'id_rekanan'=>$this->input->post('id_rekanan'),
            'keterangan'=>$this->input->post('keterangan'),            
			'id_paketpekerjaan'=>$this->input->post('id_paketpekerjaan'),
            'username'=>$this->input->post('username')
        );
        $data['keterangan'] = "Menunggu Konfirmasi";        
        $data['username'] = $this->session->userdata('username');
		$id = $this->input->post('id_faktur');
		$this->db->where('id_faktur', $id_faktur);
        $this->db->update('tbl_fakturrekanan',$data);
        redirect('orderrekanan');
	}

	function hapus($id_faktur)
    {
        $this->model_orderrekanan->Hapusorderrekanan($id_faktur);
        redirect('orderrekanan');
    }

}

/* End of file orderrekanan.php */
/* Location: ./application/controllers/orderrekanan.php */