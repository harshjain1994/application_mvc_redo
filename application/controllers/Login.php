
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
                 $this->session->set_userdata('id' , $login_id);
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
	  public function regis_b()
	 {
    
        // Validation code
       $this->load->library('form_validation');
       $this->form_validation->set_rules('first_name', 'first name', 'trim|required');
       $this->form_validation->set_rules('last_name', 'last name', 'trim|required');
      // $this->form_validation->set_rules('father_name', 'father name', 'trim|required');
       //$this->form_validation->set_rules('pass', 'Password ', 
        //'trim|required');
        //$this->form_validation->set_rules('c_pass', 'Password Confirmation', 
        //'trim|required|matches[password]');
     /*  $this->form_validation->set_rules('c_pass', 'Password', 'Confirmation');
       $this->form_validation->set_rules('password', 'Password', 'trim|requiredmatches[pass]');
       $this->form_validation->set_rules('password', 'Password', 'trim|required');
       $this->form_validation->set_rules('passconf', 'Password Confirmation', 
        'trim|required|matches[password]');
       $this->form_validation->set_rules('password', 'Password', 'trim|required');
       $this->form_validation->set_rules('passconf', 'Password Confirmation', 
        'trim|required|matches[password]');
       $this->form_validation->set_rules('password', 'Password', 'trim|required');
       $this->form_validation->set_rules('passconf', 'Password Confirmation', 
        'trim|required|matches[password]');
      */
      $this->form_validation->set_rules('email','Email','required|is_unique[borrow_user.user_email]');
        //$this->form_validation->set_message('is_unique', 'The %s is already taken');
        
       //  $this->session->set_flashdata('email_dul','email already taken !!');
                
        //is_unique check the unique email value in users table
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
       
         if($this->form_validation->run() == FALSE):   
           // echo "f";
            // echo "f";
           //  echo  validation_errors();
             //$this->load->view('');            
             return redirect('Login/regis/1');
         else :
              // echo "grtgferfg";

               $f=$this->input->post('first_name');
               $l=$this->input->post('last_name');
               $name=$f." ".$l;
              //echo $name;
               $pass=$this->input->post('pass');
               $c_pass=$this->input->post('c_pass');
             if($pass!=$c_pass)
              {
                // echo "dsf";
           
                $this->session->set_flashdata('pass_f','confirm password  do  not matched  !!');
                return redirect('Login/regis/1');
              
             }
             else{
              // echo "fecrtr";
             $data = array(
                 'user_name'=>$name,
                 'user_father_name'=>$this->input->post('father_name'),
                 'user_dob'=>$this->input->post('DOB'),
                 'user_email'=>$this->input->post('email'),
                 'user_pass'=>md5($pass),
                 
                 'user_address'=>$this->input->post('address'),
                 'phn'=>$this->input->post('phn'),
                  'user_type'=>2,
                 'avt_date'=>date('Y-m-d H:i:s'));
                 
            $this->load->model('login_user');
            $regis_id=$this->login_user->regis_b($data);
                     
           //insert code
             if($regis_id)
             {  
                //authentication succesful
                 $this->session->set_userdata('id',$regis_id);
               
                 if($this->session->userdata('id'))
                 {
                            $this->load->model('login_user');
                            $name=$this->login_user->user_name1();

                    $this->load->view('public/dashboard',['name'=>$name]);
                 }
              }
            //success page.
          } 
        endif;
    
	 }
   public function regis_l()
   {
    
        // Validation code
       $this->load->library('form_validation');
       $this->form_validation->set_rules('first_name', 'first name', 'trim|required');
       $this->form_validation->set_rules('last_name', 'last name', 'trim|required');
      // $this->form_validation->set_rules('father_name', 'father name', 'trim|required');
       //$this->form_validation->set_rules('pass', 'Password ', 
        //'trim|required');
        //$this->form_validation->set_rules('c_pass', 'Password Confirmation', 
        //'trim|required|matches[password]');
     /*  $this->form_validation->set_rules('c_pass', 'Password', 'Confirmation');
       $this->form_validation->set_rules('password', 'Password', 'trim|requiredmatches[pass]');
       $this->form_validation->set_rules('password', 'Password', 'trim|required');
       $this->form_validation->set_rules('passconf', 'Password Confirmation', 
        'trim|required|matches[password]');
       $this->form_validation->set_rules('password', 'Password', 'trim|required');
       $this->form_validation->set_rules('passconf', 'Password Confirmation', 
        'trim|required|matches[password]');
       $this->form_validation->set_rules('password', 'Password', 'trim|required');
       $this->form_validation->set_rules('passconf', 'Password Confirmation', 
        'trim|required|matches[password]');
      */
      $this->form_validation->set_rules('email','Email','required|is_unique[borrow_user.user_email]');
        //$this->form_validation->set_message('is_unique', 'The %s is already taken');
        
       //  $this->session->set_flashdata('email_dul','email already taken !!');
                
        //is_unique check the unique email value in users table
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
       
         if($this->form_validation->run() == FALSE):   
           // echo "f";
            // echo "f";
           //  echo  validation_errors();
             //$this->load->view('');            
             return redirect('Login/regis/2');
         else :
              // echo "grtgferfg";

               $f=$this->input->post('first_name');
               $l=$this->input->post('last_name');
               $name=$f." ".$l;
              //echo $name;
               $pass=$this->input->post('pass');
               $c_pass=$this->input->post('c_pass');
             if($pass!=$c_pass)
              {
                // echo "dsf";
           
                $this->session->set_flashdata('pass_f','confirm password  do  not matched  !!');
                return redirect('Login/regis/2');
              
             }
             else{
              // echo "fecrtr";
             $data = array(
                 'user_name'=>$name,
                 'user_father_name'=>$this->input->post('father_name'),
                 'user_dob'=>$this->input->post('DOB'),
                 'user_email'=>$this->input->post('email'),
                 'user_pass'=>md5($pass),
                 
                 'user_address'=>$this->input->post('address'),
                 'phn'=>$this->input->post('phn'),
                 'user_type'=>2,
                 'avt_date'=>date('Y-m-d H:i:s'));
                 
                 
            $this->load->model('login_user');
            $regis_id=$this->login_user->regis_b($data);
                     
           //insert code
             if($regis_id)
             {  
                //authentication succesful
                 $this->session->set_userdata('id',$regis_id);
               
                 if($this->session->userdata('id'))
                 {
                            $this->load->model('login_user');
                            $name=$this->login_user->user_name1();

                    $this->load->view('public/dashboard',['name'=>$name]);
                 }
              }
            //success page.
          } 
        endif;
    
   }
	    public function regis()
	    {
            $option=$this->uri->segment(3);
          //  echo $option."harsh";
            $this->load->view('header');
            
            if($option==1)
            {
           
              $this->load->view('regis_b');
           }
           
            elseif($option==2){
             
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
