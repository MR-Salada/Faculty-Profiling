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
		
		$data['title'] = 'BAT';
		$data['userinfos'] = $this->ion_auth->user()->row();
		$data['bat_getmale'] = $this->hr_model->bat_getmale();
		$data['bat_getfemale'] = $this->hr_model->bat_getfemale();
		$data['bat_getdoctorate'] = $this->hr_model->bat_getdoctorate();
		$data['bat_getmaster'] = $this->hr_model->bat_getmaster();
		$data['bat_getbachelor'] = $this->hr_model->bat_getbachelor();
		$data['bat_getpermanent'] = $this->hr_model->bat_getpermanent();
		$data['bat_gettemppermanent'] = $this->hr_model->bat_gettemppermanent();
		$data['bat_getcos'] = $this->hr_model->bat_getcos();
		$data['bat_getprofessor'] = $this->hr_model->bat_getprofessor();
		$data['bat_getasscprofessor'] = $this->hr_model->bat_getasscprofessor();
		$data['bat_getassiprofessor'] = $this->hr_model->bat_getassiprofessor();
		$data['bat_instructor'] = $this->hr_model->bat_instructor();
		$this->load->view('pages/hr/bat', $data);
	}
	public function bsba(){
		$data['title'] = 'BSBA';
		$data['userinfos'] = $this->ion_auth->user()->row();
		$data['bsba_getmale'] = $this->hr_model->bsba_getmale();
		$data['bsba_getfemale'] = $this->hr_model->bsba_getfemale();
		$data['bsba_getdoctorate'] = $this->hr_model->bsba_getdoctorate();
		$data['bsba_getmaster'] = $this->hr_model->bsba_getmaster();
		$data['bsba_getbachelor'] = $this->hr_model->bsba_getbachelor();
		$data['bsba_getpermanent'] = $this->hr_model->bsba_getpermanent();
		$data['bsba_gettemppermanent'] = $this->hr_model->bsba_gettemppermanent();
		$data['bsba_getcos'] = $this->hr_model->bsba_getcos();
		$data['bsba_getprofessor'] = $this->hr_model->bsba_getprofessor();
		$data['bsba_getasscprofessor'] = $this->hr_model->bsba_getasscprofessor();
		$data['bsba_getassiprofessor'] = $this->hr_model->bsba_getassiprofessor();
		$data['bsba_instructor'] = $this->hr_model->bsba_instructor();
		$this->load->view('pages/hr/bsba', $data);
	}
	public function teed(){
		$data['title'] = 'TEED';
		$data['userinfos'] = $this->ion_auth->user()->row();
		$data['teed_getmale'] = $this->hr_model->teed_getmale();
		$data['teed_getfemale'] = $this->hr_model->teed_getfemale();
		$data['teed_getdoctorate'] = $this->hr_model->teed_getdoctorate();
		$data['teed_getmaster'] = $this->hr_model->teed_getmaster();
		$data['teed_getbachelor'] = $this->hr_model->teed_getbachelor();
		$data['teed_getpermanent'] = $this->hr_model->teed_getpermanent();
		$data['teed_gettemppermanent'] = $this->hr_model->teed_gettemppermanent();
		$data['teed_getcos'] = $this->hr_model->teed_getcos();
		$data['teed_getprofessor'] = $this->hr_model->teed_getprofessor();
		$data['teed_getasscprofessor'] = $this->hr_model->teed_getasscprofessor();
		$data['teed_getassiprofessor'] = $this->hr_model->teed_getassiprofessor();
		$data['teed_instructor'] = $this->hr_model->teed_instructor();
		$this->load->view('pages/hr/teed', $data);
	}
	public function bscs(){
		$data['title'] = 'BSCS';
		$data['userinfos'] = $this->ion_auth->user()->row();
		$data['bscs_getmale'] = $this->hr_model->bscs_getmale();
		$data['bscs_getfemale'] = $this->hr_model->bscs_getfemale();
		$data['bscs_getdoctorate'] = $this->hr_model->bscs_getdoctorate();
		$data['bscs_getmaster'] = $this->hr_model->bscs_getmaster();
		$data['bscs_getbachelor'] = $this->hr_model->bscs_getbachelor();
		$data['bscs_getpermanent'] = $this->hr_model->bscs_getpermanent();
		$data['bscs_gettemppermanent'] = $this->hr_model->bscs_gettemppermanent();
		$data['bscs_getcos'] = $this->hr_model->bscs_getcos();
		$data['bscs_getprofessor'] = $this->hr_model->bscs_getprofessor();
		$data['bscs_getasscprofessor'] = $this->hr_model->bscs_getasscprofessor();
		$data['bscs_getassiprofessor'] = $this->hr_model->bscs_getassiprofessor();
		$data['bscs_instructor'] = $this->hr_model->bscs_instructor();
		$this->load->view('pages/hr/bscs', $data);
	}
	public function bshm(){
		$data['title'] = 'BSHM';
		$data['userinfos'] = $this->ion_auth->user()->row();
		$data['bshm_getmale'] = $this->hr_model->bshm_getmale();
		$data['bshm_getfemale'] = $this->hr_model->bshm_getfemale();
		$data['bshm_getdoctorate'] = $this->hr_model->bshm_getdoctorate();
		$data['bshm_getmaster'] = $this->hr_model->bshm_getmaster();
		$data['bshm_getbachelor'] = $this->hr_model->bshm_getbachelor();
		$data['bshm_getpermanent'] = $this->hr_model->bshm_getpermanent();
		$data['bshm_gettemppermanent'] = $this->hr_model->bshm_gettemppermanent();
		$data['bshm_getcos'] = $this->hr_model->bshm_getcos();
		$data['bshm_getprofessor'] = $this->hr_model->bshm_getprofessor();
		$data['bshm_getasscprofessor'] = $this->hr_model->bshm_getasscprofessor();
		$data['bshm_getassiprofessor'] = $this->hr_model->bshm_getassiprofessor();
		$data['bshm_instructor'] = $this->hr_model->bshm_instructor();
		$this->load->view('pages/hr/bshm', $data);
	}
}
