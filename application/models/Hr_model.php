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
		$this->db->where('degree', 'Doctoral');
		$this->db->where('sex', 'Male');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getfemaledoctorate(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Doctoral');
		$this->db->where('sex', 'Female');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getmalemaster(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Master');
		$this->db->where('sex', 'Male');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getfemalemaster(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Master');
		$this->db->where('sex', 'Female');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getmalebachelor(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Bachelor');
		$this->db->where('sex', 'Male');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getfemalebachelor(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Bachelor');
		$this->db->where('sex', 'Female');
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
	function allfaculty_getmalepermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Permanent');
		$this->db->where('gender', 'Male');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getfemalepermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Permanent');
		$this->db->where('gender', 'Female');
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
	function allfaculty_getmaletemppermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Permanent');
		$this->db->where('gender', 'Male');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getfemaletemppermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Permanent');
		$this->db->where('gender', 'Female');
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
	function allfaculty_getmaleprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Professor');
		$this->db->where('gender', 'Male');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getfemaleprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Professor');
		$this->db->where('gender', 'Female');
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
	function allfaculty_getmaleassoprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Associate Professor');
		$this->db->where('gender', 'Male');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getfemaleassoprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Associate Professor');
		$this->db->where('gender', 'Female');
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
	function allfaculty_getmaleassiprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Assistant Professor');
		$this->db->where('gender', 'Male');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getfemaleassiprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Assistant Professor');
		$this->db->where('gender', 'Female');
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
	function allfaculty_getmaleinstructor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Instructor');
		$this->db->where('gender', 'Male');
		$query = $this->db->get();
		return $query->result();
	}
	function allfaculty_getfemaleinstructor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Instructor');
		$this->db->where('gender', 'Female');
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
		$this->db->where('program', 'BAT');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getmaster(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Master');
		$this->db->where('program', 'BAT');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getbachelor(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Bachelor');
		$this->db->where('program', 'BAT');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getpermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Permanent');
		$this->db->where('program', 'BAT');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_gettemppermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Temporary Permanent');
		$this->db->where('program', 'BAT');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getcos(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Contract of Service');
		$this->db->where('program', 'BAT');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Professor');
		$this->db->where('program', 'BAT');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getasscprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Associate Professor');
		$this->db->where('program', 'BAT');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_getassiprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Assistant Professor');
		$this->db->where('program', 'BAT');
		$query = $this->db->get();
		return $query->result();
	}
	function bat_instructor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Instructor');
		$this->db->where('program', 'BAT');
		$query = $this->db->get();
		return $query->result();
	}

	//BSBA
	function bsba_getmale(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('gender', 'Male');
		$this->db->where('program', 'BSBA');
		$query = $this->db->get();
		return $query->result();
	}
	function bsba_getfemale(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('gender', 'Female');
		$this->db->where('program', 'BSBA');
		$query = $this->db->get();
		return $query->result();
	}

	function bsba_getdoctorate(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Doctoral');
		$this->db->where('program', 'BSBA');
		$query = $this->db->get();
		return $query->result();
	}
	function bsba_getmaster(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Master');
		$this->db->where('program', 'BSBA');
		$query = $this->db->get();
		return $query->result();
	}
	function bsba_getbachelor(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Bachelor');
		$this->db->where('program', 'BSBA');
		$query = $this->db->get();
		return $query->result();
	}
	function bsba_getpermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Permanent');
		$this->db->where('program', 'BSBA');
		$query = $this->db->get();
		return $query->result();
	}
	function bsba_gettemppermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Temporary Permanent');
		$this->db->where('program', 'BSBA');
		$query = $this->db->get();
		return $query->result();
	}
	function bsba_getcos(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Contract of Service');
		$this->db->where('program', 'BSBA');
		$query = $this->db->get();
		return $query->result();
	}
	function bsba_getprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Professor');
		$this->db->where('program', 'BSBA');
		$query = $this->db->get();
		return $query->result();
	}
	function bsba_getasscprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Associate Professor');
		$this->db->where('program', 'BSBA');
		$query = $this->db->get();
		return $query->result();
	}
	function bsba_getassiprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Assistant Professor');
		$this->db->where('program', 'BSBA');
		$query = $this->db->get();
		return $query->result();
	}
	function bsba_instructor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Instructor');
		$this->db->where('program', 'BSBA');
		$query = $this->db->get();
		return $query->result();
	}
	//TEED
	function teed_getmale(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('gender', 'Male');
		$this->db->where('program', 'TEED');
		$query = $this->db->get();
		return $query->result();
	}
	function teed_getfemale(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('gender', 'Female');
		$this->db->where('program', 'TEED');
		$query = $this->db->get();
		return $query->result();
	}

	function teed_getdoctorate(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Doctoral');
		$this->db->where('program', 'TEED');
		$query = $this->db->get();
		return $query->result();
	}
	function teed_getmaster(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Master');
		$this->db->where('program', 'TEED');
		$query = $this->db->get();
		return $query->result();
	}
	function teed_getbachelor(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Bachelor');
		$this->db->where('program', 'TEED');
		$query = $this->db->get();
		return $query->result();
	}
	function teed_getpermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Permanent');
		$this->db->where('program', 'TEED');
		$query = $this->db->get();
		return $query->result();
	}
	function teed_gettemppermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Temporary Permanent');
		$this->db->where('program', 'TEED');
		$query = $this->db->get();
		return $query->result();
	}
	function teed_getcos(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Contract of Service');
		$this->db->where('program', 'TEED');
		$query = $this->db->get();
		return $query->result();
	}
	function teed_getprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Professor');
		$this->db->where('program', 'TEED');
		$query = $this->db->get();
		return $query->result();
	}
	function teed_getasscprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Associate Professor');
		$this->db->where('program', 'TEED');
		$query = $this->db->get();
		return $query->result();
	}
	function teed_getassiprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Assistant Professor');
		$this->db->where('program', 'TEED');
		$query = $this->db->get();
		return $query->result();
	}
	function teed_instructor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Instructor');
		$this->db->where('program', 'TEED');
		$query = $this->db->get();
		return $query->result();
	}
	//BSCS
	function bscs_getmale(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('gender', 'Male');
		$this->db->where('program', 'BSCS');
		$query = $this->db->get();
		return $query->result();
	}
	function bscs_getfemale(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('gender', 'Female');
		$this->db->where('program', 'BSCS');
		$query = $this->db->get();
		return $query->result();
	}

	function bscs_getdoctorate(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Doctoral');
		$this->db->where('program', 'BSCS');
		$query = $this->db->get();
		return $query->result();
	}
	function bscs_getmaster(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Master');
		$this->db->where('program', 'BSCS');
		$query = $this->db->get();
		return $query->result();
	}
	function bscs_getbachelor(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Bachelor');
		$this->db->where('program', 'BSCS');
		$query = $this->db->get();
		return $query->result();
	}
	function bscs_getpermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Permanent');
		$this->db->where('program', 'BSCS');
		$query = $this->db->get();
		return $query->result();
	}
	function bscs_gettemppermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Temporary Permanent');
		$this->db->where('program', 'BSCS');
		$query = $this->db->get();
		return $query->result();
	}
	function bscs_getcos(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Contract of Service');
		$this->db->where('program', 'BSCS');
		$query = $this->db->get();
		return $query->result();
	}
	function bscs_getprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Professor');
		$this->db->where('program', 'BSCS');
		$query = $this->db->get();
		return $query->result();
	}
	function bscs_getasscprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Associate Professor');
		$this->db->where('program', 'BSCS');
		$query = $this->db->get();
		return $query->result();
	}
	function bscs_getassiprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Assistant Professor');
		$this->db->where('program', 'BSCS');
		$query = $this->db->get();
		return $query->result();
	}
	function bscs_instructor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Instructor');
		$this->db->where('program', 'BSCS');
		$query = $this->db->get();
		return $query->result();
	}
	//BSHM
	function bshm_getmale(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('gender', 'Male');
		$this->db->where('program', 'BSHM');
		$query = $this->db->get();
		return $query->result();
	}
	function bshm_getfemale(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('gender', 'Female');
		$this->db->where('program', 'BSHM');
		$query = $this->db->get();
		return $query->result();
	}

	function bshm_getdoctorate(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Doctoral');
		$this->db->where('program', 'BSHM');
		$query = $this->db->get();
		return $query->result();
	}
	function bshm_getmaster(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Master');
		$this->db->where('program', 'BSHM');
		$query = $this->db->get();
		return $query->result();
	}
	function bshm_getbachelor(){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('degree', 'Bachelor');
		$this->db->where('program', 'BSHM');
		$query = $this->db->get();
		return $query->result();
	}
	function bshm_getpermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Permanent');
		$this->db->where('program', 'BSHM');
		$query = $this->db->get();
		return $query->result();
	}
	function bshm_gettemppermanent(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Temporary Permanent');
		$this->db->where('program', 'BSHM');
		$query = $this->db->get();
		return $query->result();
	}
	function bshm_getcos(){
		$this->db->select('*');
		$this->db->from('workexp');
		$this->db->where('statusofemployment', 'Contract of Service');
		$this->db->where('program', 'BSHM');
		$query = $this->db->get();
		return $query->result();
	}
	function bshm_getprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Professor');
		$this->db->where('program', 'BSHM');
		$query = $this->db->get();
		return $query->result();
	}
	function bshm_getasscprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Associate Professor');
		$this->db->where('program', 'BSHM');
		$query = $this->db->get();
		return $query->result();
	}
	function bshm_getassiprofessor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Assistant Professor');
		$this->db->where('program', 'BSHM');
		$query = $this->db->get();
		return $query->result();
	}
	function bshm_instructor(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('academicrank', 'Instructor');
		$this->db->where('program', 'BSHM');
		$query = $this->db->get();
		return $query->result();
	}

}
