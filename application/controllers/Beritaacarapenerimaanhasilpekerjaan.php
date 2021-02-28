<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beritaacarapenerimaanhasilpekerjaan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_beritaacarapenerimaanhasilpekerjaan');        
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_beritaacarapenerimaanhasilpekerjaan->Tampilberitaacarapenerimaanhasilpekerjaan();
			$this->load->view('beritaacarapenerimaanhasilpekerjaan/beritaacarapenerimaanhasilpekerjaan',$data);
	}

	function update($id_faktur)
    {
        $data['ambil']=$this->model_beritaacarapenerimaanhasilpekerjaan->Getid_faktur($id_faktur);
        $this->load->view('beritaacarapenerimaanhasilpekerjaan/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'no_beritaacaraphp'=>$this->input->post('no_beritaacaraphp')
        );
		$id_faktur = $this->input->post('id_faktur');
		$this->db->where('id_faktur', $id_faktur);
        $this->db->update('tbl_fakturrekanan',$data);
        redirect('beritaacarapenerimaanhasilpekerjaan');
	}

    function print($id_faktur)
	{
        $hasilorder = $this->model_beritaacarapenerimaanhasilpekerjaan->Tampilorder();
        if ($hasilorder)
        {
            $data['hasilorder'] = $this->model_beritaacarapenerimaanhasilpekerjaan->GetId_order($id_faktur);
        }
         
        $hasilpenyaluran = $this->model_beritaacarapenerimaanhasilpekerjaan->Tampilpenyaluran();
        if ($hasilpenyaluran)
        {
            $data['hasilpenyaluran'] = $this->model_beritaacarapenerimaanhasilpekerjaan->Getid_faktur($id_faktur);
        }
         
    	$this->load->view('beritaacarapenerimaanhasilpekerjaan/print',$data);
	}

}

/* End of file beritaacarapenerimaanhasilpekerjaan.php */
/* Location: ./application/controllers/beritaacarapenerimaanhasilpekerjaan.php */