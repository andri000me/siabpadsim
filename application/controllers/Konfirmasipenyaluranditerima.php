<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasipenyaluranditerima extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_order');        
        $this->load->library('session');

    }

    function index()    
	{
		$data['hasil']=$this->model_order->Tampilkonfirmasipenyaluranbarang();
			$this->load->view('Konfirmasipenyaluranditerima/Konfirmasipenyaluranditerima',$data);
	}
	
	function updatebarangditerima($id_penyaluran)
    {
        $data = array(
            'statusorder'=>$this->input->post('statusorder'),
            'tanggalterimabarang'=>$this->input->post('tanggalterimabarang')
        );
        $data['statusorder'] = "Sudah Diterima";      
        $data['tanggalterimabarang'] = date("Y-m-d"); 
		$id = $this->input->post('id_penyaluran');
		$this->db->where('id_penyaluran', $id_penyaluran);
        $this->db->update('tbl_penyaluran',$data);
        redirect('konfirmasipenyaluranditerima');
    }

}

/* End of file order.php */
/* Location: ./application/controllers/order.php */