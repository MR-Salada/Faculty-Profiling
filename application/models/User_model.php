<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	function get_users(){
		$this->db->select('*');
		$this->db->from('users');
		$query = $this->db->get();
		return $query->result();
	}

	
	function get_education($id){
		$sql = "SELECT * FROM education WHERE user_id =?";
		$query = $this->db->query($sql, $id);
		return $query->result();
	}

	function get_eligibilities($id){
		$sql = "SELECT * FROM eligibilities WHERE id =?";
		$query = $this->db->query($sql, $id);
		return $query->result();
	}

	function get_workexps($id){
		$sql = "SELECT * FROM workexp WHERE user_id =?";
		$query = $this->db->query($sql, $id);
		return $query->result();
	}

	function get_semandtra($id){
		$sql = "SELECT * FROM seminar_and_trainings WHERE user_id =?";
		$query = $this->db->query($sql, $id);
		return $query->result();
	}

	function get_faculty_membership($id){
		$sql = "SELECT * FROM membership WHERE user_id =?";
		$query = $this->db->query($sql, $id);
		return $query->result();
	}

	function update_faculty_profile($id){
		$data = array(
			'college' => $this->input->post('college'),
			'program' => $this->input->post('program'),
			'fieldofdiscipline' => $this->input->post('fieldofdiscipline'),
			'designation' => $this->input->post('designation'),
			'academicrank' => $this->input->post('academicrank'),
			'yearsofteaching' => $this->input->post('yearsofteaching')
		);

		$this->db->where('id', $id);
		$update = $this->db->update('users', $data);
	}


	function add_education(){
		$data = array(
			'user_id' => $this->input->post('user_id'),
			'school' => $this->input->post('school'),
			'datefrom' => $this->input->post('datefrom'),
			'dateto' => $this->input->post('dateto'),
			'degree' => $this->input->post('degree'),
			'areaofstudy' => $this->input->post('areaofstudy')
		);
		$this->db->insert('education', $data);
	}
	function update_education($id){
		$data = array(
			'school' => $this->input->post('school'),
			'datefrom' => $this->input->post('datefrom'),
			'dateto' => $this->input->post('dateto'),
			'degree' => $this->input->post('degree'),
			'areaofstudy' => $this->input->post('areaofstudy')
		);

		$this->db->where('id', $id);
		$update = $this->db->update('education', $data);
	}

	function delete_education($id){
		$sql = "DELETE FROM education WHERE id =?";
		$query = $this->db->query($sql,$id);
	}

	
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */