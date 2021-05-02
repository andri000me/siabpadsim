<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_faktur');        
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_faktur->Tampilfaktur();
			$this->load->view('faktur/faktur',$data);
	}

	function update($id_faktur)
    {
        $data['ambil']=$this->model_faktur->Getid_faktur($id_faktur);
        $this->load->view('faktur/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'no_faktur'=>$this->input->post('no_faktur')
        );
		$id_faktur = $this->input->post('id_faktur');
		$this->db->where('id_faktur', $id_faktur);
        $this->db->update('tbl_fakturrekanan',$data);
        redirect('faktur');
	}

    function print($id_faktur)
	{
        $hasilorder = $this->model_faktur->Tampilorder();
        if ($hasilorder)
        {
            $data['hasilorder'] = $this->model_faktur->GetId_order($id_faktur);
        }
         
        $hasilpenyaluran = $this->model_faktur->Tampilpenyaluran();
        if ($hasilpenyaluran)
        {
            $data['hasilpenyaluran'] = $this->model_faktur->Getid_faktur($id_faktur);
        }
         
    	$this->load->view('faktur/print',$data);
	}

}

/* End of file faktur.php */
/* Location: ./application/controllers/faktur.php */