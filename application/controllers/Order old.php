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
			'id_order'=>$this->input->post('id_order'),
            'tanggal_pesan'=>$this->input->post('tanggal_pesan'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang'=>$this->input->post('total_barang'),
            'total_harga'=>$this->input->post('total_harga'),
            'keterangan'=>$this->input->post('keterangan'),
            'username'=>$this->input->post('username')
        );
        $data['keterangan'] = "Menunggu Konfirmasi";
        $data['total_harga'] = $data['total_barang']*1000;
        $data['username'] = $this->session->userdata('username');
        $this->db->insert('tbl_order',$data);
        redirect('order');
	}

	function update($id_order)
    {
        $data['ambil']=$this->model_order->GetId_order($id_order);
        $this->load->view('order/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'id_order'=>$this->input->post('id_order'),
            'tanggal_pesan'=>$this->input->post('tanggal_pesan'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang'=>$this->input->post('total_barang'),            
            'total_harga'=>$this->input->post('total_harga'),
            'keterangan'=>$this->input->post('keterangan'),
            'username'=>$this->input->post('username')
        );
        $data['keterangan'] = "Menunggu Konfirmasi";        
        $data['total_harga'] = $data['total_barang']*1000;
        $data['username'] = $this->session->userdata('username');
		$id_order = $this->input->post('id_order');
		$this->db->where('id_order', $id_order);
        $this->db->update('tbl_order',$data);
        redirect('order');
	}

	function hapus($id_order)
    {
        $this->model_order->Hapusorder($id_order);
        redirect('order');
    }

}

/* End of file order.php */
/* Location: ./application/controllers/order.php */