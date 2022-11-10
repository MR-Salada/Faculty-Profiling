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
		 
			redirect('My_profile','refresh');
	}

	public function update_personal_inf($id){
		$data = array(
			'name' => $this->input->post('name'),
			'firstname' => $this->input->post('firstname'),
			'middlename' => $this->input->post('middlename'),
			'suffix' => $this->input->post('suffix'),
			'birthday' => $this->input->post('birthday'),
			'birthplace' => $this->input->post('birthplace'),
			'gender' => $this->input->post('gender'),
			'civilstat' => $this->input->post('civilstat'),
			'height' => $this->input->post('height'),
			'weight' => $this->input->post('weight'),
			'bloodtype' => $this->input->post('bloodtype'),
			'gsis' => $this->input->post('gsis'),
			'pagibig' => $this->input->post('pagibig'),
			'philhealth' => $this->input->post('philhealth'),
			'sss' => $this->input->post('sss'),
			'tin' => $this->input->post('tin'),
			'agencyemployee' => $this->input->post('agencyemployee'),
			'citizenship' => $this->input->post('citizenship'),
			'region' => $this->input->post('region_text'),
			'province' => $this->input->post('province_text'),
			'city' => $this->input->post('city_text'),
			'barangay' => $this->input->post('barangay_text'),
			'street' => $this->input->post('street'),

		);
		$this->db->where('id', $id);
		$update = $this->db->update('users', $data);
		 
			redirect('My_profile','refresh');

	}

}

/* End of file My_profile.php */
/* Location: ./application/controllers/My_profile.php */