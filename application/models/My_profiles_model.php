<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_profiles_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	function is_email_available($email){
		$this->db->where('email', $email);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */