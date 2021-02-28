<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buktipenyaluranbarang extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_buktipenyaluranbarang');           
        $this->load->model('model_lihatlist');      
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_buktipenyaluranbarang->Tampilbuktipenyaluranbarang();
			$this->load->view('buktipenyaluranbarang/buktipenyaluranbarang',$data);
	}

	function update($id_penyaluran)
    {
        $data['ambil']=$this->model_buktipenyaluranbarang->Getid_penyaluran($id_penyaluran);
        $this->load->view('buktipenyaluranbarang/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'no_beritaacarapb'=>$this->input->post('no_beritaacarapb')
        );
		$id_penyaluran = $this->input->post('id_penyaluran');
		$this->db->where('id_penyaluran', $id_penyaluran);
        $this->db->update('tbl_penyaluran',$data);
        redirect('buktipenyaluranbarang');
	}

    function print($id_penyaluran)
	{
        
        

        $hasilorder = $this->model_buktipenyaluranbarang->Tampilorder();
        if ($hasilorder)
        {
            $data['hasilorder'] = $this->model_buktipenyaluranbarang->GetId_order($id_penyaluran);
        }


        $this->load->view('buktipenyaluranbarang/print',$data);





	}

}

/* End of file buktipenyaluranbarang.php */
/* Location: ./application/controllers/buktipenyaluranbarang.php */