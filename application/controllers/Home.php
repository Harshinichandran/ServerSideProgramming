<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

				public function index()
				{
					$this->load->helper('url');
					$this->load->view('header_view');
					$this->load->view('nav_view');
					$this->load->view('index');
					$this->load->view('footer_view');

				}
}