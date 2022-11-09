<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_profile extends CI_Controller {
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
		$data['userinfos'] = $this->ion_auth->user()->row();
		$data['title'] = "My Profile";
		$this->load->view('pages/myprofile.php', $data);
	}

	public function updateaccount(){
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email')
		);
		$this->db->where('id', $this->input->post('user_id'));
		$update = $this->db->update('users', $data);
		if ($update) {
			alert('updated');
		} 
			redirect('My_profile','refresh');
	}

}

/* End of file My_profile.php */
/* Location: ./application/controllers/My_profile.php */