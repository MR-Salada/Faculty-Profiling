<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('ion_auth');
		if (!$this->ion_auth->logged_in()) {
			redirect('/', 'refresh');
		}
	}

	public function index()
	{
		$this->data['users'] = $this->ion_auth->users()->result();
		$data['title'] = "NEMSU-TC";
		$data['userinfos'] = $this->ion_auth->user()->row();
		$data['users'] = $this->user_model->get_users();
		$this->load->view('pages/admin', $data);
	}

}

/* End of file Administrator.php */
/* Location: ./application/controllers/Administrator.php */