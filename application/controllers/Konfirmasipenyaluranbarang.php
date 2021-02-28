<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasipenyaluranbarang extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_order');        
        $this->load->library('session');

    }

    function index()    
	{
		$data['hasil']=$this->model_order->Tampilkonfirmasipenyaluranbarang();
			$this->load->view('konfirmasipenyaluranbarang/konfirmasipenyaluranbarang',$data);
	}
	
	function updatebarangditerima($id_penyaluran)
    {
        $data = array(
            'statusorder'=>$this->input->post('statusorder')
        );
        $data['statusorder'] = "Sudah Disalurkan";      
		$id = $this->input->post('id_penyaluran');
		$this->db->where('id_penyaluran', $id_penyaluran);
        $this->db->update('tbl_penyaluran',$data);
        redirect('konfirmasipenyaluranbarang');
    }

}

/* End of file order.php */
/* Location: ./application/controllers/order.php */