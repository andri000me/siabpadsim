<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailpenyaluran extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_detailpenyaluran');        
        $this->load->library('session');

    }

	function index($id_mutasi)
	{
            $data['hasilparsing'] = $this->uri->segment(3);
		    $data['hasil']=$this->model_detailpenyaluran->Tampildetailpenyaluran($id_mutasi);
			$this->load->view('detailpenyaluran/detailpenyaluran',$data);
	}
	
	function tambah()
		{
            $data['hasilparsing'] = $this->uri->segment(3);
            $this->load->view('detailpenyaluran/add',$data); 
		}
	
	function simpan_detailpenyaluran($hasilparsing)
    {
       $data = array(
			'id_detailmutasi'=>$this->input->post('id_detailmutasi'),
			'id_mutasi'=>$this->input->post('id_mutasi'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang_out'=>$this->input->post('total_barang_out'),
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


        redirect('detailpenyaluran/index/'.$hasilparsing);
	}

	function update($id_detailmutasi)
    {
        $data['hasilparsing'] = $this->uri->segment(4);
        $data['ambil']=$this->model_detailpenyaluran->Getid_detailpenyaluran($id_detailmutasi);
        $this->load->view('detailpenyaluran/update',$data);
	}
	
    function simpan_update($hasilparsing)
    {
        $data = array(
			'id_detailmutasi'=>$this->input->post('id_detailmutasi'),
			'id_mutasi'=>$this->input->post('id_mutasi'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang_out'=>$this->input->post('total_barang_out'),
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

        redirect('detailpenyaluran/index/'.$hasilparsing);
	}

	function hapus($id_detailmutasi,$hasilparsing)
    {
       
        $this->model_detailpenyaluran->Hapusdetailpenyaluran($id_detailmutasi);
        redirect('detailpenyaluran/index/'.$hasilparsing);
    }

}

/* End of file detailpenyaluran.php */
/* Location: ./application/controllers/detailpenyaluran.php */