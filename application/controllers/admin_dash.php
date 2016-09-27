
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dash extends CI_Controller {

	public function index()
	{   
         
          return redirect('admin/ad_login');
        //$this->load->view('admin/dashboard');
    }
	

