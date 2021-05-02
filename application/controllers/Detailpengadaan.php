<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailpengadaan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_detailpengadaan');        
        $this->load->library('session');

    }

	function index($id_pengadaan)
	{
            $data['hasilparsing'] = $this->uri->segment(3);
		    $data['hasil']=$this->model_detailpengadaan->Tampildetailpengadaan($id_pengadaan);
			$this->load->view('detailpengadaan/detailpengadaan',$data);
	}
	
	function tambah()
		{
            $data['hasilparsing'] = $this->uri->segment(3);
            $this->load->view('detailpengadaan/add',$data); 
		}
	
	function simpan_detailpengadaan($hasilparsing)
    {
       $data = array(
			'id_detailpengadaan'=>$this->input->post('id_detailpengadaan'),
			'id_pengadaan'=>$this->input->post('id_pengadaan'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang'=>$this->input->post('total_barang'),
            'username'=>$this->input->post('username')
        );
        $data['id_pengadaan'] = $hasilparsing;
        $data['username'] = $this->session->userdata('username');
        $this->db->insert('tbl_detailpengadaan',$data);
    
        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_pengadaan', $hasilparsing);
        $this->db->update('tbl_pengadaan',$data2);


        redirect('detailpengadaan/index/'.$hasilparsing);
	}

	function update($id_detailpengadaan)
    {
        $data['hasilparsing'] = $this->uri->segment(4);
        $data['ambil']=$this->model_detailpengadaan->Getid_detailpengadaan($id_detailpengadaan);
        $this->load->view('detailpengadaan/update',$data);
	}
	
    function simpan_update($hasilparsing)
    {
        $data = array(
			'id_detailpengadaan'=>$this->input->post('id_detailpengadaan'),
			'id_pengadaan'=>$this->input->post('id_pengadaan'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang'=>$this->input->post('total_barang'),
            'username'=>$this->input->post('username')
        );
        $data['id_pengadaan'] = $hasilparsing;    
        $data['username'] = $this->session->userdata('username');
		$id_detailpengadaan = $this->input->post('id_detailpengadaan');
		$this->db->where('id_detailpengadaan', $id_detailpengadaan);
        $this->db->update('tbl_detailpengadaan',$data);

        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_pengadaan', $hasilparsing);
        $this->db->update('tbl_pengadaan',$data2);

        redirect('detailpengadaan/index/'.$hasilparsing);
	}

	function hapus($id_detailpengadaan,$hasilparsing)
    {
        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_pengadaan', $hasilparsing);
        $this->db->update('tbl_pengadaan',$data2);
        
        $this->model_detailpengadaan->Hapusdetailpengadaan($id_detailpengadaan);
        redirect('detailpengadaan/index/'.$hasilparsing);
    }

}

/* End of file detailpengadaan.php */
/* Location: ./application/controllers/detailpengadaan.php */