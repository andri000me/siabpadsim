<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailpengadaan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_detailpengadaan');        
        $this->load->library('session');

    }

	function index($id_mutasi)
	{
            $data['hasilparsing'] = $this->uri->segment(3);
		    $data['hasil']=$this->model_detailpengadaan->Tampildetailpengadaan($id_mutasi);
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
			'id_detailmutasi'=>$this->input->post('id_detailmutasi'),
			'id_mutasi'=>$this->input->post('id_mutasi'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang_in_in'=>$this->input->post('total_barang_in_in'),
            'username'=>$this->input->post('username')
        );
        $data['id_mutasi'] = $hasilparsing;
        $data['username'] = $this->session->userdata('username');
        $this->db->insert('tbl_detailmutasi',$data);
    
        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_mutasi', $hasilparsing);
        $this->db->update('tbl_mutasi',$data2);


        redirect('detailpengadaan/index/'.$hasilparsing);
	}

	function update($id_detailmutasi)
    {
        $data['hasilparsing'] = $this->uri->segment(4);
        $data['ambil']=$this->model_detailpengadaan->Getid_detailpengadaan($id_detailmutasi);
        $this->load->view('detailpengadaan/update',$data);
	}
	
    function simpan_update($hasilparsing)
    {
        $data = array(
			'id_detailmutasi'=>$this->input->post('id_detailmutasi'),
			'id_mutasi'=>$this->input->post('id_mutasi'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang_in'=>$this->input->post('total_barang_in'),
            'username'=>$this->input->post('username')
        );
        $data['id_mutasi'] = $hasilparsing;    
        $data['username'] = $this->session->userdata('username');
		$id_detailmutasi = $this->input->post('id_detailmutasi');
		$this->db->where('id_detailmutasi', $id_detailmutasi);
        $this->db->update('tbl_detailmutasi',$data);

        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_mutasi', $hasilparsing);
        $this->db->update('tbl_mutasi',$data2);

        redirect('detailpengadaan/index/'.$hasilparsing);
	}

	function hapus($id_detailmutasi,$hasilparsing)
    {
        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_mutasi', $hasilparsing);
        $this->db->update('tbl_detailmutasi',$data2);
        
        $this->model_detailpengadaan->Hapusdetailpengadaan($id_detailmutasi);
        redirect('detailpengadaan/index/'.$hasilparsing);
    }

}

/* End of file detailpengadaan.php */
/* Location: ./application/controllers/detailpengadaan.php */