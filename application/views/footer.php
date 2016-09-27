  </div>
        </div>

        <div class="container">
            <table class="table table-hover">
                 <tbody>
              <tr class="success">
            
             </tr>
         </tbody>
            </table>

        </div>
   </header>
  <!--========================================================
                            CONTENT
  =========================================================-->
  <main class="text-center">
    <!-- Jumbotron section -->

    <!-- END jumbotron section-->

    <!-- Welcome -->
    <section id="regis">
      
    </section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<div class="modal fade" id="M" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header with-border">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">login</h4>
      </div>
      <div class="modal-body">
      <div class="row">
           <div class="col-md-12">
              <?php if( $error = $this->session->flashdata('login_failed')): ?>
                 <span class='alert alert-dismissible  alert-danger'>
                  <?= $error; ?>
                 </span>
              <?php  
              
                 endif;
              ?>


               <!---<form  method="post" action=""  id="defaultForm12">-->
            <!-- RD Mailform Type -->
            <?php echo form_open('Login/user_login',['class'=>'form-horizontal']);?>
            <input type="hidden" name="form-type" value="contact"/>
            <!-- END RD Mailform Type -->
            <div class="row">
               <div class="col-md-2"></div>
                <div class="col-md-8">
                
                      <?php 
                        $data=array(
                          'name'=>'email',
                          'class'=>'form-control',
                          'placeholder'=>'email'
                         // 'value'=>set_value('email')
                        );
                        echo form_input($data);
                      ?>
                      <span><?php echo form_error('email'); ?></span>
                       <br/>
                        <?php 
                        $data_p=array(
                          'name'=>'pass',
                          'class'=>'form-control',
                          'placeholder'=>'password'
                         // 'value'=>set_value('pass')
                        );
                        echo form_password($data_p);
                      ?>  <span><?php echo form_error('pass');?></span>
                 
                    <br/> 
                   

                </div>
            </div>
            <br/>
            <br/>
           <div class="row ">
                 <div class="col-md-12">
                   
                   <div class="form-group">

                 <?php 
                     $data_r=array(
                          'name'=>'reset',
                          'class'=>'btn btn-default',
                          'value'=>'reset',
                        );
                        echo form_reset($data_r);

                 ?>
                 <?php 
                     $data_s=array(
                          'name'=>'log',
                          'class'=>'btn btn-danger',
                          'value'=>'login',
                        );
                        echo form_submit($data_s);

                 ?>
                 <br/>
                 <a href="<?php echo base_url();?>/Login/regis/1" >register as a borrwer </a>||
                  <a href="<?php echo base_url();?>/Login/regis/12">register as a lender </a>
          </div>
             <?php// echo validation_errors();?>
            </div>
          
    
      </div></form>
      </div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#defaultForm12').bootstrapValidator({
            message: 'This value is not valid',
            container: 'tooltip',
           feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
           },
           fields: {
               email: {
                   validators: {
                         notEmpty: {
                          message: 'The email is required and cannot be empty'
                     }
                } 
            },
            pass: {
                 validators: {
                     notEmpty: {
                        message: 'The password is required and cannot be empty'
                     }
                 }
             }
      

    }
  }
    );

});

</script>
</div>
      <div class="modal-footer">
            </div>
    </div><!-- /.modal-content -->
<!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.42/js/bootstrap-datetimepicker.min.js "></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"/></script>
    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    

<!-- </script> -->

</body>
</html>
