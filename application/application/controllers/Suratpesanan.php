<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratpesanan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_suratpesanan');           
        $this->load->model('model_lihatlistorder');      
        $this->load->library('session');

    }

	function index()
	{
		$data['hasil']=$this->model_suratpesanan->Tampilsuratpesanan();
			$this->load->view('suratpesanan/suratpesanan',$data);
	}

	function update($id_faktur)
    {
        $data['ambil']=$this->model_suratpesanan->Getid_faktur($id_faktur);
        $this->load->view('suratpesanan/update',$data);
	}
	
    function simpan_update()
    {
        $data = array(
			'no_suratpesanan'=>$this->input->post('no_suratpesanan')
        );
		$id_faktur = $this->input->post('id_faktur');
		$this->db->where('id_faktur', $id_faktur);
        $this->db->update('tbl_fakturrekanan',$data);
        redirect('suratpesanan');
	}

    function print($id_faktur)
	{
        $ambil=$this->model_suratpesanan->Tampilsuratpesanan();
        if ($ambil){
        $query = $this->db->query("select*from tbl_fakturrekanan join tbl_rekanan on tbl_rekanan.id_rekanan=tbl_fakturrekanan.id_rekanan join tbl_akun on tbl_akun.username=tbl_fakturrekanan.username join tbl_opd on tbl_opd.id_opd=tbl_akun.id_opd join tbl_paketpekerjaan on tbl_paketpekerjaan.id_paketpekerjaan=tbl_fakturrekanan.id_paketpekerjaan where id_faktur=$id_faktur");
        $data['ambil']= $query->row();
        }

        $hasilorder = $this->model_suratpesanan->Tampilorder();
        if ($hasilorder)
        {
            $data['hasilorder'] = $this->model_suratpesanan->GetId_order($id_faktur);
        }

        $this->load->view('suratpesanan/print',$data);
	}

}

/* End of file suratpesanan.php */
/* Location: ./application/controllers/suratpesanan.php */