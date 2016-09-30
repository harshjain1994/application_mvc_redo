<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_login extends CI_Controller {

	
	public function dashboard()
	{  
        $this->load->model('login_user');
        $name=$this->login_user->user_name1();
        $image=$this->login_user->regis_b_user();
         //$image=$image->image;
        $image=array_shift($image);
       // print_r($image);
      //  echo $image['image'];      
        $data['name']=$name;
        $data['image']=$image['image'];

        $data['avt_date']=$image['avt_date'];
         $data['user_type']=$image['user_type'];
        
       // $data['image']=$image;
        $this->load->view('public/dashboard', $data);   

   
	}
	
	public function __construct()
	{

		parent::__construct();
	   	   if(! $this->session->userdata('id'))
              return  redirect('Login'); 
       
	
	}


}
