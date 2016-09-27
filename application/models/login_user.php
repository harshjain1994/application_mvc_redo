
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Model {
	


	public function user_login_d($email,$password)
	{  
	   $q=$this->db->where(['user_email'=>$email,'user_pass'=>$password])
	        ->get('borrow_user');     
	    if($q->num_rows())
	    {
             return $q->row()->id;

	    }else{

	    	return FALSE;
	    }
	}
	public function user_name1()
	{
       
         $id=$this->session->userdata('id');
		 $q1=$this->db->where(['id'=>$id])
	        ->get('borrow_user');

 	     return $q1->result();

	}
    public function admin_login_d($a_email,$a_password)
	{  
	   $q=$this->db->where(['email'=>$a_email,'password'=>$a_password])
	        ->get('admin');     
	    if($q->num_rows())
	    {
             return $q->row()->id;

	    }else{
 
  	    	return FALSE;

	    }
	}
	public function admin_user()
	{
         $admin_id=$this->session->userdata('admin_id');
		  $que=$this->db
		             ->select(['email'])
		            ->from('admin')
		           ->where('id',$admin_id)
		           ->get();
        return $que->result();
	}
}
