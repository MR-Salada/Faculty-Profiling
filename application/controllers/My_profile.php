<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_profile extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
<<<<<<< HEAD
		$this->load->library('form_validation');
		$this->load->library('ion_auth');
		$this->load->model('my_profiles_model');
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		if (!$this->ion_auth->logged_in()) {
			redirect('/', 'refresh');
		}
	}
=======
		$this->load->library('ion_auth');
		if (!$this->ion_auth->logged_in()) {
			redirect('/', 'refresh');
		}

	}

>>>>>>> d2ade9d68a85fd20ab07eb9a5aa7199ea75249a6
	public function index()
	{
		$data['userinfos'] = $this->ion_auth->user()->row();
		$data['title'] = "My Profile";
		$this->load->view('pages/myprofile.php', $data);
<<<<<<< HEAD
		$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		$this->data['users'] = $this->ion_auth->users()->result();
			
			//USAGE NOTE - you can do more complicated queries like this
			//$this->data['users'] = $this->ion_auth->where('field', 'value')->users()->result();
			
			foreach ($this->data['users'] as $k => $user)
			{
				$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}
	}

	// function change_password($id){
	// 	$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
	// 	if ($this->input->post()) {
	// 		$this->form_validation->set_rules('password', 'Password', 'required');
	// 		$this->form_validation->set_rules('passconf', 'Confirm Password', 'required|matches[password]|min_length[8]');
	// 		if ($this->form_validation->run() == FALSE) {
	// 			// echo validation_errors();
	// 		} else{
	// 			$data = array(
	// 				'password' => $this->input->post('password')
	// 			);
	// 			$this->db->where('id', $id);
	// 			$update = $this->db->update('users', $data);
	// 		}
	// 		$data['userinfos'] = $this->ion_auth->user()->row();
	// 		$data['title'] = "My Profile";
	// 		$this->load->view('pages/myprofile.php', $data);
	// 	}
	// }


	// public function updateaccount($id){
	// 	if ($this->input->post()) {

	// 		$this->form_validation->set_rules('email', 'email', 'trim|valid_email|required|is_unique[users.email]');
	// 		if ($this->form_validation->run() == FALSE) {

	// 		} else {
	// 			$data = array(
	// 				'email' => $this->input->post('email')
	// 			);
	// 			$this->db->where('id', $id);
	// 			$update = $this->db->update('users', $data);
	// 		}

	// 		$data['title'] = "My Profile";

	// 		$data['userinfos'] = $this->ion_auth->user()->row();
	// 		redirect('My_profile','refresh');
	// 	}
	// }
	// function check_email_availability(){
	// 	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	// 		echo "<span class='text-danger'>Invalid email address. (ex. example@example.com)</span>";
	// 	} else {
			
	// 		if ($this->my_profiles_model->is_email_available($_POST["email"])) {
	// 			echo '<span class="text-danger">Email address exists. Please try another one.</span>';
	// 		} else {
	// 			echo '<span class="text-success">Email address is available.</span>';
	// 		}
	// 	}
	// }
	function update_overview($id){
		$data = array(
			'overview' => $this->input->post('overview_text')
		);
		$this->db->where('id', $id);
		$update = $this->db->update('users', $data);
		if ($update) {
			echo ("<script>alert ('updated successfully.')</script>");
		}
		redirect('My_profile/','refresh');
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
			redirect('My_profile/','refresh');
	} 

		/**
	 * Change password
	 */
		function _render_page($view, $data=null, $render=false)
    {

        $this->viewdata = (empty($data)) ? $this->data: $data;

        $view_html = $this->load->view($view, $this->viewdata, $render);

        if (!$render) return $view_html;
    }
	public function change_password()
	{
		$this->form_validation->set_rules('old', 'old password', 'required');
		$this->form_validation->set_rules('new', 'new password', 'required|min_length[5]|matches[new_confirm]');
		$this->form_validation->set_rules('new_confirm', 'new confirm', 'required');

		$user = $this->ion_auth->user()->row();

if ($this->input->post()) {
	// code...

		if ($this->form_validation->run() === FALSE)
		{
			// display the form
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			echo validation_errors();
			$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
			$this->data['old_password'] = [
				'name' => 'old',
				'id' => 'old',
				'type' => 'password',
			];
			$this->data['new_password'] = [
				'name' => 'new',
				'id' => 'new',
				'type' => 'password',
				'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
			];
			$this->data['new_password_confirm'] = [
				'name' => 'new_confirm',
				'id' => 'new_confirm',
				'type' => 'password',
				'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
			];
			$this->data['user_id'] = [
				'name' => 'user_id',
				'id' => 'user_id',
				'type' => 'hidden',
				'value' => $user->id,
			];

		}
		else
		{
			$identity = $this->session->userdata('identity');

			$change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

			if ($change)
			{
				//if the password was successfully changed
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				$this->logout();
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('My_profile/change_password', 'refresh');
			}
		}
	}
=======
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
>>>>>>> d2ade9d68a85fd20ab07eb9a5aa7199ea75249a6
	}

}

/* End of file My_profile.php */
/* Location: ./application/controllers/My_profile.php */