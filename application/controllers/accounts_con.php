<?php
class Accounts_con extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('log_in')) {
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Is Required</div>');
			redirect(base_url('login'));
		}
	}
	public function register_account( ) {
		$this->form_validation->set_rules('Username', 'Username', 'required|min_length[5]');
		$this->form_validation->set_rules('Password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('repeat_password', 'Repeat Password', 'required|matches[Password]');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('errorMessage', '<div class="alert alert-danger"> '.validation_errors() . '</div>');
			redirect(base_url('accounts'));
		}else {
			$thi;s->load->model('database');
			$this->load->model('accounts_model');
			$date_created = $this->database->getDateTime();
			$username = $this->input->post('Username');
			$password = $this->input->post('Password');
			$created_by = 'Cooperative Company';
			$exec = $this->accounts_model->insert_account($username,$password,$date_created,$created_by);
			if ($exec) {
				$this->session->set_flashdata('successMessage', '<div class="alert alert-success">Account Created Successfully</div>');
				redirect(base_url('accounts'));
			}else {
				$this->session->set_flashdata('errorMessage', '<div class="alert alert-danger">Opps... Something Went Wrong Please Try Again.</div>' );
			}

		}
	}

}