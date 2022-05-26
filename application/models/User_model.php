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
		$sql = "SELECT * FROM eligibilities WHERE user_id =?";
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
			'areaofstudy' => $this->input->post('areaofstudy'),
			'program' => $this->input->post('program')
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

	function add_eligibility(){
		$data = array(
			'user_id' => $this->input->post('user_id'),
			'program' => $this->input->post('program'),
			'license' => $this->input->post('license'),
			'rate' => $this->input->post('rate'),
			'date' => $this->input->post('date'),
			'placeofexam' => $this->input->post('placeofexam'),
			'licensenumber' => $this->input->post('licensenumber'),
			'validity' => $this->input->post('validity')
		);
		$this->db->insert('eligibilities', $data);
	}

	function update_eligibility($id){
		$data = array(
			'license' => $this->input->post('license'),
			'rate' => $this->input->post('rate'),
			'date' => $this->input->post('date'),
			'placeofexam' => $this->input->post('placeofexam'),
			'licensenumber' => $this->input->post('licensenumber'),
			'validity' => $this->input->post('validity')
		);
		$this->db->where('id', $id);
		$update = $this->db->update('eligibilities', $data);
	}
	function delete_eligibility($id){
		$sql = "DELETE FROM eligibilities WHERE id =?";
		$query = $this->db->query($sql,$id);
	}
	function add_work_exp(){
		$data = array(
			'user_id' => $this->input->post('user_id'),
			'company' => $this->input->post('company'),
			'datefrom' => $this->input->post('datefrom'),
			'dateto' => $this->input->post('dateto'),
			'salary' => $this->input->post('salary'),
			'position' => $this->input->post('position'),
			'statusofemployment' => $this->input->post('statusofemployment')
		);
		$this->db->insert('workexp', $data);
	}
	function update_workexp($id){
		$data = array(
			'company' => $this->input->post('company'),
			'datefrom' => $this->input->post('datefrom'),
			'dateto' => $this->input->post('dateto'),
			'salary' => $this->input->post('salary'),
			'position' => $this->input->post('position'),
			'statusofemployment' => $this->input->post('statusofemployment')
		);
		$this->db->where('id', $id);
		$update = $this->db->update('workexp', $data);
	}
	function delete_workexp($id){
		$sql = "DELETE FROM workexp WHERE id =?";
		$query = $this->db->query($sql,$id);
	}
	function add_seminarandtrainings(){
		$data = array(
			'user_id' => $this->input->post('user_id'),
			'title' => $this->input->post('title'),
			'datefrom' => $this->input->post('datefrom'),
			'dateto' => $this->input->post('dateto'),
			'numhours' => $this->input->post('numhours'),
			'sponsor' => $this->input->post('sponsor'),
			'venue' => $this->input->post('venue')
		);
		$this->db->insert('seminar_and_trainings', $data);
	}
	function delete_semandtra($id){
		$sql = "DELETE FROM seminar_and_trainings WHERE id =?";
		$query = $this->db->query($sql,$id);
	}

	function edit_basic_info($id){
		$data = array(
			'name' => $this->input->post('name'),
			'birthday' => $this->input->post('birthday'),
			'birthplace' => $this->input->post('birthplace'),
			'age' => $this->input->post('age'),
			'gender' => $this->input->post('gender'),
			'civilstat' => $this->input->post('civilstat'),
			'height' => $this->input->post('height'),
			'weight' => $this->input->post('weight'),
			'bloodtype' => $this->input->post('bloodtype'),
			'gsis' => $this->input->post('gsis'),
			'philhealth' => $this->input->post('philhealth'),
			'sss' => $this->input->post('sss'),
			'pagibig' => $this->input->post('pagibig'),
			'tin' => $this->input->post('tin'),
			'citizenship' => $this->input->post('citizenship'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email')
		);
		$this->db->where('id', $id);
		$update = $this->db->update('users', $data);


	}
	
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */