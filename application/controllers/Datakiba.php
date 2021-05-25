<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakiba extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       $this->load->model('model_datakiba');
	   $this->load->library('session');

    }

	function index()
	{
        $data['content'] = $this->model_datakiba->Tampildatakiba();
        $this->load->view('datakiba/datakiba', $data);
	}

   	function menambahdatadatakiba()
		{
			$this->load->view('datakiba/add');   
		}
	
	function action_menambahdatadatakiba()
    {       
                    	$data = array(
                            'id_opd'=>$this->input->post('id_opd'),
                            'no_urut'=>$this->input->post('no_urut'),
                            'nama_barang'=>$this->input->post('nama_barang'),
							'no_kode_barang'=>$this->input->post('no_kode_barang'),
							'no_register'=>$this->input->post('no_register'),
							'keterangan_tanah'=>$this->input->post('keterangan_tanah'),
							'luas_catat_kib'=>$this->input->post('luas_catat_kib'),
							'koreksi_bertambah'=>$this->input->post('koreksi_bertambah'),
							'koreksi_berkurang'=>$this->input->post('koreksi_berkurang'),
							'luas_sertifikat'=>$this->input->post('luas_sertifikat'),
							'tahun_pengadaan'=>$this->input->post('tahun_pengadaan'),
							'alamat'=>$this->input->post('alamat'),
							'hak_status_tanah'=>$this->input->post('hak_status_tanah'),
							'tanggal_sertifikat'=>$this->input->post('tanggal_sertifikat'),
							'nomor_sertifikat'=>$this->input->post('nomor_sertifikat'),
							'penggunaan'=>$this->input->post('penggunaan'),
							'asal_usul'=>$this->input->post('asal_usul'),
							'harga'=>$this->input->post('harga'),
							'keterangan_perolehan'=>$this->input->post('keterangan_perolehan'),
							'keterangan'=>$this->input->post('keterangan'),
							'jumlah_sertifkat'=>$this->input->post('jumlah_sertifkat'),
							'jumlah_tanah'=>$this->input->post('jumlah_tanah'),
							'keterangan_penguasaan'=>$this->input->post('keterangan_penguasaan')
						);
					$this->model_datakiba->menambahdatadatakiba($data);
					$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data KIB A Berhasil di Tambah</div>');
					redirect('datakiba','refresh');
	}

	function updatedatadatakiba($id_kiba = NULL)
    {
        $this->db->where('id_kiba', $id_kiba);
            $data['content'] = $this->db->get('tbl_kiba');
			$this->load->view('datakiba/update', $data);
	}
	
    function action_updatedatadatakiba($id_kiba ='')
    {
        $data = array(
			'id_opd'=>$this->input->post('id_opd'),
			'no_urut'=>$this->input->post('no_urut'),
			'nama_barang'=>$this->input->post('nama_barang'),
			'no_kode_barang'=>$this->input->post('no_kode_barang'),
			'no_register'=>$this->input->post('no_register'),
			'keterangan_tanah'=>$this->input->post('keterangan_tanah'),
			'luas_catat_kib'=>$this->input->post('luas_catat_kib'),
			'koreksi_bertambah'=>$this->input->post('koreksi_bertambah'),
			'koreksi_berkurang'=>$this->input->post('koreksi_berkurang'),
			'luas_sertifikat'=>$this->input->post('luas_sertifikat'),
			'tahun_pengadaan'=>$this->input->post('tahun_pengadaan'),
			'alamat'=>$this->input->post('alamat'),
			'hak_status_tanah'=>$this->input->post('hak_status_tanah'),
			'tanggal_sertifikat'=>$this->input->post('tanggal_sertifikat'),
			'nomor_sertifikat'=>$this->input->post('nomor_sertifikat'),
			'penggunaan'=>$this->input->post('penggunaan'),
			'asal_usul'=>$this->input->post('asal_usul'),
			'harga'=>$this->input->post('harga'),
			'keterangan_perolehan'=>$this->input->post('keterangan_perolehan'),
			'keterangan'=>$this->input->post('keterangan'),
			'jumlah_sertifkat'=>$this->input->post('jumlah_sertifkat'),
			'jumlah_tanah'=>$this->input->post('jumlah_tanah'),
			'keterangan_penguasaan'=>$this->input->post('keterangan_penguasaan')
        );
        $this->model_datakiba->updatedatadatakiba($data, $id_kiba);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data KIB A berhasil diubah</div>');
        redirect('datakiba');
	}

	public function action_deletedatadatakiba($id_kiba = '')
	{
			$this->model_datakiba->deletedatadatakiba($id_kiba);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data KIB A berhasil dihapus</div>');
			redirect('datakiba','refresh');
	}


}

/* End of file ssh.php */
/* Location: ./application/controllers/ssh.php */