<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{
		public function __construct()
		{	
			parent::__construct();
			$this->load->helper('url');
		}
		
		function index () {
			$this->load->view('header');
			$this->load->view('home');
			$this->load->view('footer');
		}
}