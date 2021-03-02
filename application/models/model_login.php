<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function action_login($username, $password)
		{
			$this->db->select('username,password,level,id_opd,nama');
			$this->db->from('tbl_akun');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->limit(1);

			$query = $this->db->get();
			if ($query->num_rows()==1) {
				return $query->result();
			} else{
				return false;
				
			}
		}

		function GetAkun()
		{
			$username = $this->uri->segment(3);
			return $this->db->get_where('tbl_akun', array('username' => $username))->row();
		}

		public function updatepassword($data)
		{
			$username = $this->uri->segment(3);
			$this->db->where('username', $username);
			$this->db->update('tbl_akun', $data);
		}
}

/* End of file model_login.php */
/* Location: ./application/models/model_login.php */