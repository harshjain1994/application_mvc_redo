
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
    public function regis_b_user()
    {
      
           $id=$this->session->userdata('id');
	  	    $que=$this->db
		               ->select('*')
		              ->from('borrow_user')
		              ->where('id' , $id)
		              ->get();
           return $que->result_array();
	
    }
    public function regis_b($data)
	{

        $arr=array('user_email'=>$data['user_email']);
        $this->db->insert('borrow_user', $data);
        $sel_id=$this->db->select('id')
                             ->from('borrow_user')
                              ->where($arr)
                               ->get();
        if($sel_id->num_rows())
	    {
             return $sel_id->row()->id;

	    }else{

	    	return FALSE;
	    }

	}
	 public function admin_user()
	 {
           $admin_id=$this->session->userdata('admin_id');
	  	   $que=$this->db
		               ->select(['email','image'])
		              ->from('admin')
		              ->where('id',$admin_id)
		              ->get();
           return $que->result();
	}
}
      