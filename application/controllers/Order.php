<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_order');        
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_order->Tampilorder();
			$this->load->view('order/order',$data);
	}
	
	function tambah()
		{
			$this->load->view('order/add'); 
		}
	
	function simpan_order()
    {
        $data = array(
			'id_penyaluran'=>$this->input->post('id_penyaluran'),
            'tanggal_pesan'=>$this->input->post('tanggal_pesan'),
            'keterangan'=>$this->input->post('keterangan'),            
            'statusorder'=>$this->input->post('statusorder'),
            'username'=>$this->input->post('username')
        );
        $data['keterangan'] = "Menunggu Konfirmasi";
        $data['statusorder'] = "Belum Diterima";
        $data['username'] = $this->session->userdata('username');

        $this->db->insert('tbl_penyaluran',$data);
        redirect('order');
	}

	function update($id_penyaluran)
    {
        $data['ambil']=$this->model_order->Getid_penyaluran($id_penyaluran);
        $this->load->view('order/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'id_penyaluran'=>$this->input->post('id_penyaluran'),
            'tanggal_pesan'=>$this->input->post('tanggal_pesan'),
            'keterangan'=>$this->input->post('keterangan'),            
            'statusorder'=>$this->input->post('statusorder'),
            'username'=>$this->input->post('username')
        );
        $data['keterangan'] = "Menunggu Konfirmasi";        
        $data['username'] = $this->session->userdata('username');
		$id = $this->input->post('id_penyaluran');
		$this->db->where('id_penyaluran', $id_penyaluran);
        $this->db->update('tbl_penyaluran',$data);
        redirect('order');
	}

	function hapus($id_penyaluran)
    {
        $this->model_order->Hapusorder($id_penyaluran);
        redirect('order');
    }

}

/* End of file order.php */
/* Location: ./application/controllers/order.php */