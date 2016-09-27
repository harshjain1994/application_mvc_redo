
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{   $this->load->helper('form');
		$this->load->view('home_page_lender_borr.php');
	}


	public function user_login()
	{ 
	   // $this->load->helper('url');
	   
	    $this->load->library('form_validation');
        $this->form_validation->set_rules('email','email','required|trim');
        $this->form_validation->set_rules('pass','Password','required');
        
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
        if($this->form_validation->run())
        {   // echo "validator succesful";
 	        $email=$this->input->post('email');
		    $password=$this->input->post('pass');
	   	    $this->load->model('login_user');
	   	     
	   	     $login_id=$this->login_user->user_login_d($email,$password);
	   	     if($login_id)
	   	     {  
                //authentication succesful
               
                 $this->session->set_userdata('id',$login_id);
                 if($this->session->userdata('id'))
                      return redirect('u_login/dashboard');

                //echo "ok";
	   	     }else{
	   	         $this->session->set_flashdata('login_failed','invalid user !!');
                  return redirect('Login');
                 // echo "not okkk";
                   
                //authentication falied 
            
	   	     }
	        
	   }else{
	       $this->load->view('home_page_lender_borr.php');
		   
	      // echo  validation_errors();
	   }
	  }
	  public function regis()
	  {
       
           $this->load->view('header');

           $option=$this->uri->segment(3);
           if($option==1)
           {
           
               $this->load->view('regis_b');
            

           }else{

           
             $this->load->view('regis_l');          

               }
         $this->load->view('footer');
	  }

	  public function user_logout()
	  {
           
           $this->session->unset_userdata('id');
           return redirect('Login');
           
             

               

       }
}
