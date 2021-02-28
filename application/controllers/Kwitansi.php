<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kwitansi extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_kwitansi');        
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_kwitansi->Tampilkwitansi();
			$this->load->view('kwitansi/kwitansi',$data);
	}

	function update($id_faktur)
    {
        $data['ambil']=$this->model_kwitansi->Getid_faktur($id_faktur);
        $this->load->view('kwitansi/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'no_kwitansi'=>$this->input->post('no_kwitansi')
        );
		$id_faktur = $this->input->post('id_faktur');
		$this->db->where('id_faktur', $id_faktur);
        $this->db->update('tbl_fakturrekanan',$data);
        redirect('kwitansi');
	}

    function print($id_faktur)
	{
        $hasilorder = $this->model_kwitansi->Tampilorder();
        if ($hasilorder)
        {
            $data['hasilorder'] = $this->model_kwitansi->GetId_order($id_faktur);
        }
         
        $hasilpenyaluran = $this->model_kwitansi->Tampilpenyaluran();
        if ($hasilpenyaluran)
        {
            $data['hasilpenyaluran'] = $this->model_kwitansi->Getid_faktur($id_faktur);
        }
         
    	$this->load->view('kwitansi/print',$data);
	}

}

/* End of file kwitansi.php */
/* Location: ./application/controllers/kwitansi.php */