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
		$sql = "SELECT * FROM education WHERE id =?";
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

	
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */