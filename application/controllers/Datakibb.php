<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakibb extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_datakibb');
	   $this->load->library('session');

    }

	function index()
	{
        $data['content'] = $this->model_datakibb->Tampildatakibb();
        $this->load->view('datakibb/datakibb', $data);
	}

   	function menambahdatadatakibb()
		{
			$this->load->view('datakibb/add');   
		}
	
	function action_menambahdatadatakibb()
    {       
                    	$data = array(
                            'id_opd'=>$this->input->post('id_opd'),
                            'no_urut'=>$this->input->post('no_urut'),
                            'nama_barang'=>$this->input->post('nama_barang'),
							'roda_dua'=>$this->input->post('roda_dua'),
							'roda_tiga'=>$this->input->post('roda_tiga'),
							'roda_empat'=>$this->input->post('roda_empat'),
							'roda_enam'=>$this->input->post('roda_enam'),
							'merk'=>$this->input->post('merk'),
							'type'=>$this->input->post('type'),
							'bahan'=>$this->input->post('bahan'),
							'tahun_pembelian'=>$this->input->post('tahun_pembelian'),
							'nomor_pabrik'=>$this->input->post('nomor_pabrik'),
							'nomor_rangka'=>$this->input->post('nomor_rangka'),
							'nomor_mesin'=>$this->input->post('nomor_mesin'),
							'nomor_polisi'=>$this->input->post('nomor_polisi'),
							'nomor_bpkb'=>$this->input->post('nomor_bpkb'),
							'sumber_perolehan'=>$this->input->post('sumber_perolehan'),
							'harga'=>$this->input->post('harga'),
							'pejabat_pengguna'=>$this->input->post('pejabat_pengguna'),
							'keterangan'=>$this->input->post('keterangan'),
							'no_stnk'=>$this->input->post('no_stnk'),
							'berlaku_sampai'=>$this->input->post('berlaku_sampai')
						);
					$this->model_datakibb->menambahdatadatakibb($data);
					$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data KIB B Berhasil di Tambah</div>');
					redirect('datakibb','refresh');
	}

	function updatedatadatakibb($id_kibb = NULL)
    {
        $this->db->where('id_kibb', $id_kibb);
            $data['content'] = $this->db->get('tbl_kibb');
			$this->load->view('datakibb/update', $data);
	}
	
    function action_updatedatadatakibb($id_kibb ='')
    {
        $data = array(
							'id_opd'=>$this->input->post('id_opd'),
                            'no_urut'=>$this->input->post('no_urut'),
                            'nama_barang'=>$this->input->post('nama_barang'),
							'roda_dua'=>$this->input->post('roda_dua'),
							'roda_tiga'=>$this->input->post('roda_tiga'),
							'roda_empat'=>$this->input->post('roda_empat'),
							'roda_enam'=>$this->input->post('roda_enam'),
							'merk'=>$this->input->post('merk'),
							'type'=>$this->input->post('type'),
							'bahan'=>$this->input->post('bahan'),
							'tahun_pembelian'=>$this->input->post('tahun_pembelian'),
							'nomor_pabrik'=>$this->input->post('nomor_pabrik'),
							'nomor_rangka'=>$this->input->post('nomor_rangka'),
							'nomor_mesin'=>$this->input->post('nomor_mesin'),
							'nomor_polisi'=>$this->input->post('nomor_polisi'),
							'nomor_bpkb'=>$this->input->post('nomor_bpkb'),
							'sumber_perolehan'=>$this->input->post('sumber_perolehan'),
							'harga'=>$this->input->post('harga'),
							'pejabat_pengguna'=>$this->input->post('pejabat_pengguna'),
							'keterangan'=>$this->input->post('keterangan'),
							'no_stnk'=>$this->input->post('no_stnk'),
							'berlaku_sampai'=>$this->input->post('berlaku_sampai')
        );
        $this->model_datakibb->updatedatadatakibb($data, $id_kibb);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data KIB B berhasil diubah</div>');
        redirect('datakibb');
	}

	public function action_deletedatadatakibb($id_kibb = '')
	{
			$this->model_datakibb->deletedatadatakibb($id_kibb);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data KIB B berhasil dihapus</div>');
			redirect('datakibb','refresh');
	}


}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */