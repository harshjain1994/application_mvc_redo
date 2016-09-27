<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_user extends CI_Controller {

	
	public function detail_b()
	{

        $id = $this->uri->segment(3);
		echo $id;
		//$this->load->view('home_page_lender_borr.php');
	}
}
