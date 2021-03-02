<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaanpengadaandisetujui extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_orderrekanan');        
        $this->load->library('session');

    }

	function index()
	{
		    $data['hasil']=$this->model_orderrekanan->TampilorderbyDisetujui();
			$this->load->view('permintaanpengadaandisetujui/permintaanpengadaandisetujui',$data);
	}
	
	function updatesetuju($id_faktur)
    {
        $data = array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data['keterangan'] = "Disetujui";        
		$id = $this->input->post('id_faktur');
		$this->db->where('id_faktur', $id_faktur);
        $this->db->update('tbl_fakturrekanan',$data);
        redirect('permintaanpengadaanbarang');
    }

    function updatetolak($id_faktur)
    {
        $data = array(
            'keterangan'=>$this->input->post('keterangan')
        );
        $data['keterangan'] = "Ditolak";        
		$id = $this->input->post('id_faktur');
		$this->db->where('id_faktur', $id_faktur);
        $this->db->update('tbl_fakturrekanan',$data);
        redirect('permintaanpengadaandisetujui');
    }
    

}

/* End of file order.php */
/* Location: ./application/controllers/order.php */