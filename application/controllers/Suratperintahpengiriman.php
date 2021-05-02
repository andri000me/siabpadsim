<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratperintahpengiriman extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_suratperintahpengiriman');        
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_suratperintahpengiriman->Tampilsuratperintahpengiriman();
			$this->load->view('suratperintahpengiriman/suratperintahpengiriman',$data);
	}

	function update($id_faktur)
    {
        $data['ambil']=$this->model_suratperintahpengiriman->Getid_faktur($id_faktur);
        $this->load->view('suratperintahpengiriman/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'no_suratperintahpengiriman'=>$this->input->post('no_suratperintahpengiriman')
        );
		$id_faktur = $this->input->post('id_faktur');
		$this->db->where('id_faktur', $id_faktur);
        $this->db->update('tbl_fakturrekanan',$data);
        redirect('suratperintahpengiriman');
	}

    function print($id_faktur)
	{
        $hasilorder = $this->model_suratperintahpengiriman->Tampilorder();
        if ($hasilorder)
        {
            $data['hasilorder'] = $this->model_suratperintahpengiriman->GetId_order($id_faktur);
        }
         
        $hasilpenyaluran = $this->model_suratperintahpengiriman->Tampilpenyaluran();
        if ($hasilpenyaluran)
        {
            $data['hasilpenyaluran'] = $this->model_suratperintahpengiriman->Getid_faktur($id_faktur);
        }
         
    	$this->load->view('suratperintahpengiriman/print',$data);
	}

}

/* End of file suratperintahpengiriman.php */
/* Location: ./application/controllers/suratperintahpengiriman.php */