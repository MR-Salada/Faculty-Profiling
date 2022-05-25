<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hr extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->model('hr_model');
	}

	public function index()
	{
		$data['allfaculty_male'] = $this->hr_model->allfaculty_getmale();
		$data['allfaculty_female'] = $this->hr_model->allfaculty_getfemale();
		$data['allfaculty_getdoctorate'] = $this->hr_model->allfaculty_getdoctorate();
		$data['allfaculty_getmaster'] = $this->hr_model->allfaculty_getmaster();
		$data['allfaculty_getbachelor'] = $this->hr_model->allfaculty_getbachelor();
		$data['allfaculty_getpermanent'] = $this->hr_model->allfaculty_getpermanent();
		$data['allfaculty_gettemppermanent'] = $this->hr_model->allfaculty_gettemppermanent();
		$data['allfaculty_getcos'] = $this->hr_model->allfaculty_getcos();
		$data['allfaculty_getprofessor'] = $this->hr_model->allfaculty_getprofessor();
		$data['allfaculty_getasscprofessor'] = $this->hr_model->allfaculty_getasscprofessor();
		$data['allfaculty_getassiprofessor'] = $this->hr_model->allfaculty_getassiprofessor();
		$data['allfaculty_instructor'] = $this->hr_model->allfaculty_instructor();
		$data['allfaculty_getmaledoctorate'] = $this->hr_model->allfaculty_getmaledoctorate();
		$data['title'] = 'All Faculty';
		$data['userinfos'] = $this->ion_auth->user()->row();
		$this->load->view('pages/hr', $data);

	}
	public function bat()
	{
		
		$data['title'] = 'HR Head';
		$data['userinfos'] = $this->ion_auth->user()->row();
		$data['bat_getmale'] = $this->hr_model->bat_getmale();
		$data['bat_getfemale'] = $this->hr_model->bat_getfemale();
		$data['bat_getdoctorate'] = $this->hr_model->bat_getdoctorate();
		$data['bat_getmaster'] = $this->hr_model->bat_getmaster();
		$data['bat_getbachelor'] = $this->hr_model->bat_getbachelor();
		$this->load->view('pages/hr/bat', $data);
	}
}
