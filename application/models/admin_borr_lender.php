
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_borr_lender extends CI_Model {
	    
         public function cancle_request_bl($id)
         {
             // $data=array('last_login'=>current_login,'current_login'=>date('Y-m-d H:i:s'));
              //$this->db->where('id','some_id');
              //$this->db->update('login_table',$data);
         }
	      public function admin_userdata()
		  { 
        	  $admin_id=$this->session->userdata('admin_id');
	       	  $que_u=$this->db
	 	             ->where(['user_type',1])
		             ->get('borrow_user');
           
            //  $result=$que_u->result_array();
             // $user_id=$result[0]['id'];
             $data=array(array());
            $i=-1;
             foreach($que_u->result() as $row)
             {
                $id=$row->id;
               // echo $id;
                $array1 = array('user_id' => $id, 'active_request' => '1', 'type' => 'borr');

                $sel_req=$this->db->where($array1)
                                ->get('request');                
                // $sel_re=$sel_req->result_array();
                    foreach($sel_req->result() as $row)
                     {

                       $id1=$row->user_id;
 
                         //  echo $id1;
                         //image formation 
                       $arr=array('id'=>$id1);
                    	  $imag_sel=$this->db
                   	                  ->select('image')
                 	                  ->where($arr)
                 	                  ->get('borrow_user');
                      	$fil=$imag_sel->result_array();
                      // echo 
                      // print_r($fil);
                    	 //print_r($fil);
                       $data[$i]['image'] = $fil[0]['image'];
                       
                       $data[$i]['id'] =  $row->user_id;
                       $data[$i]['user_name']=$row->user_name;
                       $data[$i]['borrow_amount']=$row->borrow_amount;
                       $data[$i]['detail_user']=$row->detail_user;
                       $data[$i]['rating']=$row->rating;
                       $data[$i]['acvt_date']=$row->acvt_date;
                       $data[$i]['add_time']=$row->add_time;
                 }
                //$sel_req="select * from request where user_id='".$b_id."' and active_request=1 and type='borr'";
                            //  $mysql=mysqli_query($conn,$sel_req);                 
              $i++;
             }
              // print_r($data);
	          return $data;
	      }

        public function admin_userdata1()
	    {


        	  $admin_id=$this->session->userdata('admin_id');
	       	  $que_l=$this->db
	 	             ->where(['user_type',2])
		             ->get('borrow_user');

            //  $result=$que_u->result_array();
             // $user_id=$result[0]['id'];
             $data=array(array());
            $i=-1;
             foreach($que_l->result() as $row)
             {
                $id=$row->id;
               // echo $id;
                $array12 = array('user_id' => $id, 'active_request' => '1', 'type' => 'borr');

      $sel_addr="select * from lend_detail where lend_id='$b_id' ";
                            
                $sel_req=$this->db->where($array12)
                                ->get('lend_detail');                
                // $sel_re=$sel_req->result_array();
                 
                  foreach($sel_req->result() as $row)
                  {
                     $data[$i]['id'] =  $row->user_id;
                     $data[$i]['user_name']=$row->user_name;
                     $data[$i]['borrow_amount']=$row->borrow_amount;
                     $data[$i]['detail_user']=$row->detail_user;
                     $data[$i]['rating']=$row->rating;
                     $data[$i]['acvt_date']=$row->acvt_date;
                     $data[$i]['add_time']=$row->add_time;
                  }
              

              $i++;
             }
              return $data;
	      }


}
