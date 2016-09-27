<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ad_user extends CI_Controller {

	
  public function cancle_request()
  {
     $id=$this->uri->segment(3);
     // echo $id;
     $da['id']=$id;
      $this->load->model('admin_borr_lender'); 
     // echo $da['id']; 
     $this->admin_borr_lender->cancle_request_bl($da);

  }
	public function admin_user()
	{  
        $this->load->model('login_user');
        $email=$this->login_user->admin_user();
        $this->load->view('admin/dashboard',['email',$email]);
	}

     public function borrower_check()
     {
         
          $this->load->model('admin_borr_lender');
          $data=$this->admin_borr_lender->admin_user();
          $this->load->view('admin/admin_borr',['data',$data]);

      }
      public function detail_b()
      {     
        $this->load->model('login_user');
        $email=$this->login_user->admin_user();
        //$this->load->view('admin/dashboard',['email',$email]);

        $id = $this->uri->segment(3);
        $array=['email'=>$email,'id'=>$id];
        $this->load->view('admin/detail_borrow',$array);
    //$this->load->view('home_page_lender_borr.php');
     }

}
