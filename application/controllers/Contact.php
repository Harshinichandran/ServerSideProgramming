<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
		function __Construct(){
			parent::__Construct ();
				
				$this->load->database(); // load database
				$this->load->model('ContactModel'); // load model 
		}

		public function index() {
		$this->load->library('form_validation');
		$this->load->helper('url','array','form','security');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');


		$this->form_validation->set_rules('Name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('Comments', 'Comments', 'required');



		
		if ($this->form_validation->run() == FALSE)
		{
			$errors = $this->form_validation->error_array();
			$this->load->view('header_view');
			$this->load->view('nav_view');
			$this->load->view('contactview'); // load the view file , we are passing $data array to view file
			$this->load->view('footer_view');// load the view file , we are passing $data array to view file
			
		}
		else
		{
			 $data = array(
			'name' => $this->input->post('Name'),
			'email' => $this->input->post('Email'),
			'comments/questions' => $this->input->post('Comments')
			);

			$data= $this->security->xss_clean($data);
			$this->ContactModel->form_insert($data);
			$this->load->view('header_view');
			$this->load->view('nav_view');
			$this->load->view('contactview'); // load the view file , we are passing $data array to view file
			$this->load->view('footer_view');
			
			}
		}
	}
		
?>		
		
 