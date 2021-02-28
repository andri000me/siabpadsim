<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sppb extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_sppb');           
        $this->load->model('model_lihatlist');      
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_sppb->Tampilsppb();
			$this->load->view('sppb/sppb',$data);
	}

	function update($id_penyaluran)
    {
        $data['ambil']=$this->model_sppb->Getid_penyaluran($id_penyaluran);
        $this->load->view('sppb/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'no_sppb'=>$this->input->post('no_sppb')
        );
		$id_penyaluran = $this->input->post('id_penyaluran');
		$this->db->where('id_penyaluran', $id_penyaluran);
        $this->db->update('tbl_penyaluran',$data);
        redirect('sppb');
	}

    function print($id_penyaluran)
	{
        

        $hasilorder = $this->model_sppb->Tampilorder();
        if ($hasilorder)
        {
            $data['hasilorder'] = $this->model_sppb->GetId_order($id_penyaluran);
        }


        $this->load->view('sppb/print',$data);





	}

}

/* End of file sppb.php */
/* Location: ./application/controllers/sppb.php */