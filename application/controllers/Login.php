<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here 
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('model_login');
		$this->load->library('session');
	}
	public function index()
	{
		if ($this->session->userdata('level') == "Admin") {
			redirect('Admin','refresh');
		} elseif ($this->session->userdata('level') == "Pengguna Anggaran") {
			redirect('kepala','refresh');
        } elseif ($this->session->userdata('level') == "Bendahara") {
			redirect('sekretaris','refresh');
			} elseif ($this->session->userdata('level') == "PPTK") {
			redirect('pptk','refresh');
		} elseif ($this->session->userdata('level') == "Pengurus Barang") {
				redirect('pengurusbarang','refresh');
		} else {
			$this->load->view('login/login');
		}
	}

	public function action_login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$ceklogin = $this->model_login->action_login($username, $password);

		if ($ceklogin) {
			foreach ($ceklogin as $row) {
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('level', $row->level);				
				$this->session->set_userdata('id_opd', $row->id_opd);
				$this->session->set_userdata('nama', $row->nama);
				if ($this->session->userdata('level') == "Admin") {
					redirect('admin','refresh');
				} elseif ($this->session->userdata('level') == "Pengguna Anggaran") {
					redirect('kepala','refresh');
				} elseif ($this->session->userdata('level') == "Bendahara") {
					redirect('sekretaris','refresh');
				} elseif ($this->session->userdata('level') == "PPTK") {
						redirect('pptk','refresh');
				}  elseif ($this->session->userdata('level') == "Pengurus Barang") {
					redirect('pengurusbarangpengguna','refresh');
				}
			}
		}
				 else {
					$this->load->view('login/login');
				}
    }

	public function profil()
	{
		
			$username=$this->session->userdata('username');
			$this->db->where('username', $username);
            $data['ambil'] = $this->db->get('tbl_akun');
			$this->load->view('profil/profil', $data);
	}

	function simpan_updatepassword()
    {
		$data = array(
            'password'=>$this->input->post('password')
        );
        $this->model_login->updatepassword($data, $username);
        redirect('login/profil');
	}
}
/* End of file Login.php */
/* Location: ./application/controllers/Login.php */