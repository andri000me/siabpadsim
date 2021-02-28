<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasipengadaanbarang extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_orderrekanan');        
        $this->load->library('session');

    }

    function index()    
	{
		$data['hasil']=$this->model_orderrekanan->Tampilkonfirmasipengadaanbarang();
			$this->load->view('konfirmasipengadaanbarang/konfirmasipengadaanbarang',$data);
	}
	
	function updatebarangditerima($id_faktur)
    {
        $data = array(
            'statusorder'=>$this->input->post('statusorder'),
            'tanggalterimabarang'=>$this->input->post('tanggalterimabarang')
        );
        $data['statusorder'] = "Sudah Diterima";
        $data['tanggalterimabarang'] = date("Y-m-d");        
		$id = $this->input->post('id_faktur');
		$this->db->where('id_faktur', $id_faktur);
        $this->db->update('tbl_fakturrekanan',$data);
        redirect('konfirmasipengadaanbarang');
    }

}

/* End of file order.php */
/* Location: ./application/controllers/order.php */