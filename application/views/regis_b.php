  <div class="row row-no-gutter">
      <div class="col-md-4"></div>
        <div id="regis" class="col-md-10 col-md-offset-1 col-lg-4 col-lg-offset-0 grid-2">
          
         <!-- <form  method="post" action='Login/regis_b'  onsubmit="return checkall();"  >-->
             <?php echo form_open('Login/regis_b');?>
            <!--class='rd-mailform'--><!-- RD Mailform Type -->
            
            <div class="panel panel-danger">
             <div class="pane panel-heading">
              <h5 class="text-center" style='text-color:#fff;'>Borrower register</h5>
             </div>

             <div class="panel panel-body">
             <?php if( $error = $this->session->flashdata('pass_f')): ?>
                 
                  <?=  $error; ?>
                 </span>
              <?php  
              
                 endif;
              ?>
             
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">

                       <input 
                         type="text"
                         name="first_name"
                         placeholder="first name"              
                         class="form-control"
                         data-constraints="@NotEmpty @LettersOnly"/>

                     </div>
                      <span><?php echo form_error('first_name');//echo "vr";?></span>
                 <div class="form-group">
                  <label class="form-label"></label>
                    <input id="mailform-input-fname"
                         type="text"
                         name="last_name"
                         placeholder="last name"              
                         class="form-control"
                         data-constraints="@NotEmpty @LettersOnly"/>
                </div>

                      <span><?php echo form_error('last_name'); ?></span>
                <div class="form-group">
                  <label class="form-label" data-add-placeholder for="mailform-input-faname">
                   
                  </label>
                  <input id="mailform-input-faname"
                         type="text"
                         name="father_name"
                         
                         placeholder="father name"
                         class="form-control"
                         data-constraints="@NotEmpty @LettersOnly"/>
                </div>
                
                      <span><?php echo form_error('father_name'); ?></span>
                <div class="form-group">
                   <label class="form-label" data-add-placeholder for="mailform-input-faname" >
                  </label>
                 <!--  <input id="mailform-input-DOB"
                          type="date"
                          name="DOB"
                          
                         placeholder="DOB "
                         class="form-control"
                         
                          data-constraints="@NotEmpty "/>
                  -->
            
             <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text'  name='DOB' class="form-control"  data-constraints="@NotEmpty"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker( {  format: 'DD/MM/YYYY'});
                     
            });
        </script>
    </div>
</div>
   </div>
   
           <div class="col-md-2"></div>
                <div class="input_form">
                  <label class="form-label" data-add-placeholder
                         for="mailform-input-email"></label>
                  <input 
                         type="text"
                         name="email"
                         placeholder="email" 
                         class="form-control"
                         
                         data-constraints="@NotEmpty @Email"/>
                  <span id="email_status"></span>
               
                      <span><?php echo form_error('email'); ?></span>
                </div>
            
                <br/>
                <div class="form-group">
                  <label class="form-label" data-add-placeholder
                         for="mailform-input-pass" palceholder="password"></label>
                  <input id="mailform-input-pass"
                         type="password"
                         name="pass"
                         class="form-control"
                         placeholder="password" 
                         data-constraints="@N

                         class="form-control"otEmpty"/>
                </div>

                      <span><?php echo form_error('pass'); ?></span>
                <div class="form-group">
                  <label class="form-label" data-add-placeholder for="mailform-input-pass-confirm">
                    </label>
                  <input id="mailform-input-pass-confirm"
                         type="password"
                         name="c_pass"
                         
                         placeholder="confirm password"
                         class="form-control"
                         data-constraints="@NotEmpty"/>

                </div>
                     
                      <span><?php echo form_error('c_pass'); ?></span>
                      <div class="form-group">
                        <label class="form-label" data-add-placeholder for="mailform-input-faname">
                         </label>
                    
                        <textarea name="address" data-constraints="@NotEmpty " 
                           class="form-control" placeholder="address"></textarea>

                      </div> 
                 <div class="form-group">
                    <label class="form-label" data-add-placeholder
                           for="mailform-input-pass"></label>
                    <input id="mailform-input-phn"
                            type="text"
                            name="phn"

                             placeholder="PHN NO"
                             class="form-control"
                             data-constraints="@NotEmpty"/>
                </div>

               
                <br/>


            </div>
            <br/>

            <!--row-no-gutter flow-offset-2-->
            <div class="row ">
              <div class="col-md-12">
                <div class="form-group ">
                  <input type="submit" name="submit1"  id="regis_b_f" class="btn btn-success"   value="register"/>
                    

                     <br/><br/> <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
       Linkedin</a>
    </div>
                 </div>
              </div>
       
               
     
  
              </div>
            </div>
        </div>
      </div>
  </form>
<script type="text/javascript">
      
    $(document).ready(function() {
    
        $("#btnn").click(function(){
          var url="delete.php";
          // alert("fwer");
          $.ajax({
             type:"POST",
             url:url,
             data:msg1,
             cache:false,
             success:function(data){
                 alert(data);

             }


          });
             
        });


     });

</script>
<script type="text/javascript">
    $(document).ready(function() {
     
      
        $('#defaultForm11').bootstrapValidator({
           live:'enable',
            message: 'This value is not valid',
            submitButton: '$defaultForm11 button[type="submit"]',
            submitHandler: function (validatior, form, submitButton) {
//                   alert("wffw");
                 //  console.log("fwrefg");
   //            // return false;
            },
            container: 'tooltip',
           feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
           },
           fields: {
               first_name: {
                   validators: {
                         notEmpty: {
                          message: 'The first name is required and cannot be empty'
                     }
                     
                } 
            },
            last_name: {
                   validators: {
                         notEmpty: {
                          message: 'The first name is required and cannot be empty'
                     },
                      
                       regexp: {
                          regexp: /^[A-Z\s]+$/i,
                          message: 'The first name can only consist of alphabetical characters and spaces'
                     }
                } 
            },
               father_name: {
                   validators: {
                         notEmpty: {
                          message: 'The father name is required and cannot be empty'
                     },
                      regexp: {
                          regexp: /^[A-Z\s]+$/i,
                          message: 'The father name can only consist of alphabetical characters and spaces'
                     }
                } 
            },
             
            email: {
                container: 'popover',
                validators: {
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    },
                     notEmpty: {
                        message: 'The email is required and cannot be empty'
                    }
                }
            },
            pass: {
                container: 'popover',
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    }
                }
            },
            c_pass: {
                container: 'popover',
                validators: {
                    notEmpty: {
                        message: 'The  confirm password is required and cannot be empty'
                    },
                    same: {
                        field: 'pass',
                        message: 'The confirm password can be  same as password'
                    }
                }
            },

            DOB: {
                container: 'popover',
                validators: {
                    notEmpty: {
                        message: 'The DOB is required and cannot be empty'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
      address: {
                validators: {
                    notEmpty: {
                        message: 'The Address is required'
                    }
                }
            },
      phn: {
                validators: {
                    notEmpty: {
                        message: 'The phone no  is required'
                    }, 
                    stringLength: {
                         min: 10,
                         max: 10,
                         message: 'The mobile number must be vlaid with 10  number '
                     }
                   
                }
            }


        ,
         type1: {
                validators: {
                    notEmpty: {
                        message: 'do not select to select type please choose option'
                    }
                }
            }


        }
    });

});
</script>
 <script>
  
     function checkemail()
    {
  
     var email=document.getElementById( "email" ).value;
     // alert(email);
       if(email)
     {
         $.ajax({
         type: 'post',
         url: 'email_check.php',
         data: {
         email:email,
         },
         success: function (response) {
        //  alert(response);
         $('#email_status').html(response);
        // alert("reger");
           if(response=="OK") 
               {
                  return true;  

               }
               else
               {
                  return false; 
               }
             }
       });


      }
      else
      {
       $( '#email_status' ).html("");
       return false;
      }
  
  }


  function checkall()
  {
   //     var namehtml=document.getElementById("name_status").innerHTML;
        var emailhtml=document.getElementById("email_status").innerHTML;
       
     if((emailhtml)=="OK")
     {
          return true;
     }
     else
     {
          return false;
     }
  }




</script>

    <!---alidation for form -->




    <!-- END Welcome-->

    <!-- Last Added Profiles -->
    <!-- END Last Added Profiles-->

    <!-- Members Who Have Found Love -->
    <!-- END Members Who Have Found Love-->
  
  <!--========================================================
                          FOOTER
  =========================================================-->
  <!--<footer>

    <section>
      <div class="container container-wide center-sm">
        <div class="row">
          <div class="col-xs-12">
            <p class="rights">
              BBW and BHM Dating Site &#169; <span id="copyright-year"></span> All rights reserved. <br/>
              <a href="#">Terms of use</a> | <a href="index-5.html">Privacy Policy</a>
              More Dating Website Templates at <a rel="nofollow" href="http://www.templatemonster.com/category/dating-web-templates/" target="_blank">TemplateMonster.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>
  </footer>-->
</div>
