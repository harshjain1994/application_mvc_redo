<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_login extends CI_Controller {

	
	public function dashboard()
	{  
        $this->load->model('login_user');
         $name=$this->login_user->user_name1();
        //$data['name']=$name;
        $this->load->view('public/dashboard', ['name'=>$name]);   

   
	}
	
	public function __construct()
	{

		parent::__construct();
	   	   if(! $this->session->userdata('id'))
              return  redirect('Login'); 
       
	
	}


}
