<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hr_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	function allfaculty_getmale(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('gender', 'Male');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getfemale(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('gender', 'Female');
		$query = $this->db->get();
		return $query->result();
	}

	function allfaculty_getdoctorate(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Doctoral');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getmaledoctorate(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->from('users');
		$this->db->where('degree', 'Doctoral');
		$this->db->where('gender', 'Male');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getmaster(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Master');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getbachelor(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Bachelor');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getpermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Permanent');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_gettemppermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Temporary Permanent');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getcos(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Contract of Service');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Professor');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getasscprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Associate Professor');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getassiprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Assistant Professor');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_instructor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Instructor');
		$query = $this->db->get();
		return $query->result();
	}

	//BAT
	function bat_getmale(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('gender', 'Male');
		$this->db->where('program', 'BAT');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getfemale(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('gender', 'Female');
		$this->db->where('program', 'BAT');
		$query = $this->db->get();
		return $query->result();
	}

	function bat_getdoctorate(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Doctoral');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getmaster(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Master');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getbachelor(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Bachelor');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getpermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Permanent');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_gettemppermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Temporary Permanent');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getcos(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Contract of Service');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Professor');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getasscprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Associate Professor');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getassiprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Assistant Professor');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_instructor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Instructor');
		$query = $this->db->get();
		return $query->result();
	}

}
