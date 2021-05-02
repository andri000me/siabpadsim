<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listorderrekanan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_listorderrekanan');        
        $this->load->library('session');

    }

	function index($id_fakturrekanan)
	{
            $data['hasilparsing'] = $this->uri->segment(3);
		    $data['hasil']=$this->model_listorderrekanan->TampilListOrderRekanan($id_fakturrekanan);
			$this->load->view('listorderrekanan/listorderrekanan',$data);
	}
	
	function tambah()
		{
            $data['hasilparsing'] = $this->uri->segment(3);
            $this->load->view('listorderrekanan/add',$data); 
		}
	
	function simpan_listorderrekanan($hasilparsing)
    {
       $data = array(
			'id_orderrekanan'=>$this->input->post('id_orderrekanan'),
			'id_fakturrekanan'=>$this->input->post('id_fakturrekanan'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang'=>$this->input->post('total_barang'),
            'username'=>$this->input->post('username')
        );
        $data['id_fakturrekanan'] = $hasilparsing;
        $data['username'] = $this->session->userdata('username');
        $this->db->insert('tbl_orderrekanan',$data);
    
        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_faktur', $hasilparsing);
        $this->db->update('tbl_fakturrekanan',$data2);


        redirect('listorderrekanan/index/'.$hasilparsing);
	}

	function update($id_orderrekanan)
    {
        $data['hasilparsing'] = $this->uri->segment(4);
        $data['ambil']=$this->model_listorderrekanan->Getid_listorderrekanan($id_orderrekanan);
        $this->load->view('listorderrekanan/update',$data);
	}
	
    function simpan_update($hasilparsing)
    {
        $data = array(
			'id_orderrekanan'=>$this->input->post('id_orderrekanan'),
			'id_fakturrekanan'=>$this->input->post('id_fakturrekanan'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang'=>$this->input->post('total_barang'),
            'username'=>$this->input->post('username')
        );
        $data['id_fakturrekanan'] = $hasilparsing;    
        $data['username'] = $this->session->userdata('username');
		$id_orderrekanan = $this->input->post('id_orderrekanan');
		$this->db->where('id_orderrekanan', $id_orderrekanan);
        $this->db->update('tbl_orderrekanan',$data);

        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_faktur', $hasilparsing);
        $this->db->update('tbl_fakturrekanan',$data2);

        redirect('listorderrekanan/index/'.$hasilparsing);
	}

	function hapus($id_orderrekanan,$hasilparsing)
    {
        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_faktur', $hasilparsing);
        $this->db->update('tbl_fakturrekanan',$data2);
        
        $this->model_listorderrekanan->Hapuslistorderrekanan($id_orderrekanan);
        redirect('listorderrekanan/index/'.$hasilparsing);
    }

}

/* End of file listorderrekanan.php */
/* Location: ./application/controllers/listorderrekanan.php */