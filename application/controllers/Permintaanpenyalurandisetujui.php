<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaanpenyalurandisetujui extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_order');        
        $this->load->library('session');

    }

    function index()
	{
		$data['hasil']=$this->model_order->TampilorderbyDisetujui();
		$this->load->view('permintaanpenyalurandisetujui/permintaanpenyalurandisetujui',$data);
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
        redirect('permintaanpenyalurandisetujui');
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
        redirect('permintaanpenyalurandisetujui');
    }
    

}

/* End of file order.php */
/* Location: ./application/controllers/order.php */