<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{  // $this->load->helper('url');
		$this->load->view('home_page_lender_borr.php');
	}
}
