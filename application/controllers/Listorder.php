<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listorder extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_listorder');        
        $this->load->library('session');

    }

	function index($id_penyaluran)
	{
            $data['hasilparsing'] = $this->uri->segment(3);
		    $data['hasil']=$this->model_listorder->Tampillistorder($id_penyaluran);
			$this->load->view('listorder/listorder',$data);
	}
	
	function tambah()
		{
            $data['hasilparsing'] = $this->uri->segment(3);
            $this->load->view('listorder/add',$data); 
		}
	
	function simpan_listorder($hasilparsing)
    {
       $data = array(
			'id_order'=>$this->input->post('id_order'),
			'id_penyaluran'=>$this->input->post('id_penyaluran'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang'=>$this->input->post('total_barang'),
            'username'=>$this->input->post('username')
        );
        $data['id_penyaluran'] = $hasilparsing;
        $data['username'] = $this->session->userdata('username');
        $this->db->insert('tbl_order',$data);
    
        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_penyaluran', $hasilparsing);
        $this->db->update('tbl_penyaluran',$data2);


        redirect('listorder/index/'.$hasilparsing);
	}

	function update($id_order)
    {
        $data['hasilparsing'] = $this->uri->segment(4);
        $data['ambil']=$this->model_listorder->Getid_listorder($id_order);
        $this->load->view('listorder/update',$data);
	}
	
    function simpan_update($hasilparsing)
    {
        $data = array(
			'id_order'=>$this->input->post('id_order'),
			'id_penyaluran'=>$this->input->post('id_penyaluran'),
            'id_ssh'=>$this->input->post('id_ssh'),
            'total_barang'=>$this->input->post('total_barang'),
            'username'=>$this->input->post('username')
        );
        $data['id_penyaluran'] = $hasilparsing;    
        $data['username'] = $this->session->userdata('username');
		$id_order = $this->input->post('id_order');
		$this->db->where('id_order', $id_order);
        $this->db->update('tbl_order',$data);

        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_penyaluran', $hasilparsing);
        $this->db->update('tbl_penyaluran',$data2);

        redirect('listorder/index/'.$hasilparsing);
	}

	function hapus($id_order,$hasilparsing)
    {
        $data2 =array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data2['keterangan'] = "Menunggu Konfirmasi";
        $this->db->where('id_penyaluran', $hasilparsing);
        $this->db->update('tbl_penyaluran',$data2);
        
        $this->model_listorder->Hapuslistorder($id_order);
        redirect('listorder/index/'.$hasilparsing);
    }

}

/* End of file listorder.php */
/* Location: ./application/controllers/listorder.php */