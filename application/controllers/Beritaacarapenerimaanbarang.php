<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beritaacarapenerimaanbarang extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_beritaacarapenerimaanbarang');        
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_beritaacarapenerimaanbarang->Tampilberitaacarapenerimaanbarang();
			$this->load->view('beritaacarapenerimaanbarang/beritaacarapenerimaanbarang',$data);
	}

	function update($id_faktur)
    {
        $data['ambil']=$this->model_beritaacarapenerimaanbarang->Getid_faktur($id_faktur);
        $this->load->view('beritaacarapenerimaanbarang/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'no_beritaacarapb'=>$this->input->post('no_beritaacarapb'),
            'tanggalterimabarang'=>$this->input->post('tanggalterimabarang')
        );
		$id_faktur = $this->input->post('id_faktur');
		$this->db->where('id_faktur', $id_faktur);
        $this->db->update('tbl_fakturrekanan',$data);
        redirect('beritaacarapenerimaanbarang');
	}

    function print($id_faktur)
	{
        $hasilorder = $this->model_beritaacarapenerimaanbarang->Tampilorder();
        if ($hasilorder)
        {
            $data['hasilorder'] = $this->model_beritaacarapenerimaanbarang->GetId_order($id_faktur);
        }
         
        $hasilpenyaluran = $this->model_beritaacarapenerimaanbarang->Tampilpenyaluran();
        if ($hasilpenyaluran)
        {
            $data['hasilpenyaluran'] = $this->model_beritaacarapenerimaanbarang->Getid_faktur($id_faktur);
        }
         
    	$this->load->view('beritaacarapenerimaanbarang/print',$data);
	}

}

/* End of file beritaacarapenerimaanbarang.php */
/* Location: ./application/controllers/beritaacarapenerimaanbarang.php */