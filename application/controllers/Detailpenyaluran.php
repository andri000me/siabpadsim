<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailpenyaluran extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_detailpenyaluran');        
        $this->load->library('session');

    }

	function index($id_penyaluran)
	{
            $data['hasilparsing'] = $this->uri->segment(3);
		    $data['hasil']=$this->model_detailpenyaluran->Tampildetailpenyaluran($id_penyaluran);
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
			'id_detailpenyaluran'=>$this->input->post('id_detailpenyaluran'),
			'id_penyaluran'=>$this->input->post('id_penyaluran'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang'=>$this->input->post('total_barang'),
            'username'=>$this->input->post('username')
        );
        $data['id_penyaluran'] = $hasilparsing;
        $data['username'] = $this->session->userdata('username');
        $this->db->insert('tbl_detailpenyaluran',$data);
    
        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_penyaluran', $hasilparsing);
        $this->db->update('tbl_penyaluran',$data2);


        redirect('detailpenyaluran/index/'.$hasilparsing);
	}

	function update($id_detailpenyaluran)
    {
        $data['hasilparsing'] = $this->uri->segment(4);
        $data['ambil']=$this->model_detailpenyaluran->Getid_detailpenyaluran($id_detailpenyaluran);
        $this->load->view('detailpenyaluran/update',$data);
	}
	
    function simpan_update($hasilparsing)
    {
        $data = array(
			'id_detailpenyaluran'=>$this->input->post('id_detailpenyaluran'),
			'id_penyaluran'=>$this->input->post('id_penyaluran'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang'=>$this->input->post('total_barang'),
            'username'=>$this->input->post('username')
        );
        $data['id_penyaluran'] = $hasilparsing;    
        $data['username'] = $this->session->userdata('username');
		$id_detailpenyaluran = $this->input->post('id_detailpenyaluran');
		$this->db->where('id_detailpenyaluran', $id_detailpenyaluran);
        $this->db->update('tbl_detailpenyaluran',$data);

        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_penyaluran', $hasilparsing);
        $this->db->update('tbl_penyaluran',$data2);

        redirect('detailpenyaluran/index/'.$hasilparsing);
	}

	function hapus($id_detailpenyaluran,$hasilparsing)
    {
        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_penyaluran', $hasilparsing);
        $this->db->update('tbl_penyaluran',$data2);
        
        $this->model_detailpenyaluran->Hapusdetailpenyaluran($id_detailpenyaluran);
        redirect('detailpenyaluran/index/'.$hasilparsing);
    }

}

/* End of file detailpenyaluran.php */
/* Location: ./application/controllers/detailpenyaluran.php */