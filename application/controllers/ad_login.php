<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ad_login extends CI_Controller {

    
	 public function admin_dashboard()
	 {  
	    
         if(! $this->session->userdata('admin_id'))
	     	   return redirect('admin');
		  $this->load->model('login_user');
          $email=$this->login_user->admin_user();
          $da['email']=$email;
          $this->load->view('admin/dashboard',$da);
           
     }
     
	 
	  public function borrower_user()
	  {

          $this->load->model('admin_borr_lender');
          $data=$this->admin_borr_lender->admin_userdata();
           //   $this->load->view('admin/admin_borr',['data',$data]);
          //   user data information 
            $this->load->model('login_user');
            $email=$this->login_user->admin_user();
            $d['data']=$data;
            $d['email']=$email;
            $this->load->view('admin/admin_borrower_user',$d);
            
          //  $this->load->view('admin/admin_borrower_user',['data'=>$data]);
               
         

      //     $this->load->view('admin/admin_borrower_user',['data'=>$data]);
         
    }
	
   public function logout()
   { 
        $this->session->unset_userdata('id');
           return redirect('admin');
    }
    public function __construct()
	{
       	parent::__construct();
	    if(!$this->session->userdata('admin_id'))
		    return redirect('admin');
	
	}



}
