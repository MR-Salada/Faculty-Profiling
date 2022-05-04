<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

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
		$id = $this->ion_auth->user()->row()->id;	
		$data['education'] = $this->user_model->get_education("$id");
		$data['eligibilities'] = $this->user_model->get_eligibilities("$id");
		$data['semandtra'] = $this->user_model->get_semandtra("$id");
		$data['workexps'] = $this->user_model->get_workexps("$id");
		$data['userinfos'] = $this->ion_auth->user()->row();
		$data['users'] = $this->user_model->get_users();
		$this->load->view('pages/members', $data);
	}
}
