<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaanpenyaluranbarang extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_order');        
        $this->load->library('session');

    }

    function index()
	{
		$data['hasil']=$this->model_order->TampilorderbyMenungguKonfirmasi();
		$this->load->view('permintaanpenyaluranbarang/permintaanpenyaluranbarang',$data);
	}
	
	function updatesetuju($id_penyaluran)
    {
        $data = array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data['keterangan'] = "Disetujui";        
		$id = $this->input->post('id_penyaluran');
		$this->db->where('id_penyaluran', $id_penyaluran);
        $this->db->update('tbl_penyaluran',$data);
        redirect('permintaanpenyaluranbarang');
    }

    function updatetolak($id_penyaluran)
    {
        $data = array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data['keterangan'] = "Ditolak";        
		$id = $this->input->post('id_penyaluran');
		$this->db->where('id_penyaluran', $id_penyaluran);
        $this->db->update('tbl_penyaluran',$data);
        redirect('permintaanpenyaluranbarang');
    }
    

}

/* End of file order.php */
/* Location: ./application/controllers/order.php */