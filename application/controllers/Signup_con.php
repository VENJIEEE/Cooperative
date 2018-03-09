<?php
class Signup_con extends CI_Controller {
	
		
	public function Signup(){
				$this->load->view('templates/header');
				$this->load->view('Signup');
				$this->load->view('templates/footer');
			
	}

	

	public function register_customer( ) {
		$this->form_validation->set_rules('Username', 'Username', 'required|min_length[5]');
		$this->form_validation->set_rules('Password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('repeat_password', 'Repeat Password', 'required|matches[Password]');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('errorMessage', '<div class="alert alert-danger"> '.validation_errors() . '</div>');
			redirect(base_url('Signup'));
		}else {
			$this->load->model('database');
			$this->load->model('customer_model');
			$date_created = $this->database->getDateTime();
			$username = $this->input->post('Username');
			$password = $this->input->post('Password');
			$exec = $this->customer_model->insert_account($username,$password,$date_created);
			if ($exec) {
				$this->session->set_flashdata('successMessage', '<div class="alert alert-success">Account Created Successfully</div>');
				redirect(base_url('pos'));
			}else {
				$this->session->set_flashdata('errorMessage', '<div class="alert alert-danger">Opps... Something Went Wrong Please Try Again.</div>' );
			}

		}
	}
}
