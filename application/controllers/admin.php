
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class   Admin extends CI_Controller {
    


	public function index()
	{  // $this->load->helper('form');
		$this->load->view('admin/Admin_login.php');
	}
	public function admin_login()
	{ 
	   // $this->load->helper('url');
	   
	   $this->load->library('form_validation');
	   $this->form_validation->set_rules('a_email','email','required|trim');
	   $this->form_validation->set_rules('a_pass','Password','required');
        
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
        if($this->form_validation->run())
        {   // echo "validator succesful";
 	        $a_email=$this->input->post('a_email');
		    $a_password=$this->input->post('a_pass');
	   	    $this->load->model('login_user');
	   	     
	   	     $admin_id=$this->login_user->admin_login_d($a_email,$a_password);
	   	     if($admin_id)
	   	     {  
                //authentication succesful
               
                 $this->session->set_userdata('admin_id',$admin_id);
                 

                  return redirect('ad_login/admin_dashboard');
                 
                //echo "ok";
	   	     }else{
	   	          $this->session->set_flashdata('admin_login_failed','invalid user !!');
                  return redirect('admin');
                   
                //authentication falied 
            
	   	     }
	        
	   }else{
	       $this->load->view('admin/Admin_login');
	   }
	  }
	

      
	  public function admin_logout()
	  {
           
           $this->session->unset_userdata('admin_id');
           return redirect('admin');
          
         
       }
     
   



}