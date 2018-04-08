<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Controller {
	
		function __Construct(){
			parent::__Construct ();
				$this->load->database(); // load database
				$this->load->model('ClassesModel'); // load model 
		}
 
		public function index() {
		$this->load->helper('url');
		$this->data['classes'] = $this->ClassesModel->getClasses(); // calling Post model method getPosts()
		$this->load->view('header_view');
		$this->load->view('nav_view');
		$this->load->view('classesview', $this->data); // load the view file , we are passing $data array to view file
		$this->load->view('footer_view');
 }
 

				
}