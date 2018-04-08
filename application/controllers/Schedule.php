<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {
	
		function __Construct(){
			parent::__Construct ();
				$this->load->database(); // load database
				$this->load->model('ScheduleModel'); // load model 
		}
 
		public function index() {
		$this->load->helper('url');
		
		$this->data['daysfirst'] = $this->ScheduleModel->getDaysFirst(); 
		$this->data['dayssecond'] = $this->ScheduleModel->getDaysSecond(); 
		$this->data['gettimefirst'] = $this->ScheduleModel->getTimeFirst(); 
		$this->data['gettimesecond'] = $this->ScheduleModel->getTimeSecond(); 

		
		$this->load->view('header_view');
		$this->load->view('nav_view');
		
		$this->load->view('scheduleview', $this->data);
		
		$this->load->view('footer_view');
 }
 }
