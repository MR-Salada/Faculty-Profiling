<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('ion_auth');
		$this->load->library('upload');
		if (!$this->ion_auth->logged_in()) {
			redirect('/', 'refresh');
		}

	}

	public function index()
	{

		$id = $this->ion_auth->user()->row()->id;	
		$data['education'] = $this->user_model->get_education("$id");
		$data['eligibilities'] = $this->user_model->get_eligibilities("$id");
		$data['faculty_membership'] = $this->user_model->get_faculty_membership("$id");
		$data['semandtra'] = $this->user_model->get_semandtra("$id");
		$data['workexps'] = $this->user_model->get_workexps("$id");
		$data['userinfos'] = $this->ion_auth->user()->row();
		$data['users'] = $this->user_model->get_users();
		$this->load->view('pages/members', $data);
	}

	public function upload_file(){
		$file = $_FILES['image'];
		$temp = explode('.', $file['name']);
		$extension = end($temp);

		$filename = $this->input->post('user_id').'.'.$extension;
		echo $filename;

		$data = array(
			'profilepic' => $filename
		);
		$config = array(
			'file_name' =>$this->input->post('user_id'),
			'overwrite' => TRUE,
			'max_size' => '2048000',
			'allowed_types' => 'gif|jpg|png|jpeg',
			'upload_path' => 'assets/images'
		);


		$this->upload->initialize($config);

		if ($this->upload->do_upload('image')) {
			$this->db->where('id', $this->input->post('user_id'));
			$update = $this->db->update('users', $data);
			redirect('Members','refresh');

		} else {
			print_r($this->upload->display_errors());
		}
		$this->load->library('upload', $config);
	}

	public function updateoverview(){
		$data = array(
			'overview' => $this->input->post('overview')
		);
		// $overview = $this->input->post('overview');
		$this->db->where('id', $this->input->post('user_id'));
		$update = $this->db->update('users', $data);
			redirect('Members','refresh');
	}

	
}
