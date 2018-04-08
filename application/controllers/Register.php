<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
		function __Construct(){
			parent::__Construct ();
				
				$this->load->database(); // load database
				$this->load->model('RegisterModel'); // load model 
		}
		

		public function index() {
	
		$this->load->helper('url','form','array','security');
		
		$this->load->library('form_validation');


		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('Name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('Password', 'Password', 'required|regex_match[/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/]');
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('Phone', 'Phone', 'required|regex_match[/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/]');
		$this->form_validation->set_rules('Address', 'Address', 'required');
		$this->form_validation->set_rules('Class', 'Class', 'required');
		$this->form_validation->set_rules('Schedule', 'Schedule', 'required');
		$this->form_validation->set_rules('Time', 'Schedule', 'required');
		



		if ($this->form_validation->run() == FALSE)
		{
			
			$errors = $this->form_validation->error_array();
			$this->load->view('header_view');
			$this->load->view('nav_view');
			$this->load->view('register_view'); // load the view file , we are passing $data array to view file
			$this->load->view('footer_view');// load the view file , we are passing $data array to view file
			
		}
		else
		{

			$this->load->view('header_view');
			$this->load->view('nav_view');
			$this->load->model('RegisterModel'); 

			
				
			 	$data = array(
			'name' => $this->input->post('Name'),
			'email' => $this->input->post('Email'),
			'password' => $this->input->post('Password'),
			'phone' => $this->input->post('Phone'),
			'address' => $this->input->post('Address'),
			'class' => $this->input->post('Class'),
        	'daysname' => $this->input->post('Schedule'),
        	'time'=> $this->input->post('Time')
			);
			$data= $this->security->xss_clean($data);
			$this->RegisterModel->form_insert($data);

			$data['message'] = 'Registered Successfully....';
	
			
			$this->load->view('register_view'); // load the view file , we are passing $data array to view file
			$this->load->view('footer_view');
			}

				
	}
}
		
?>		


