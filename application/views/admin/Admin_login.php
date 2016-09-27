<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/dist/css/jvectormap/jquery-jvectormap-1.2.2.css"> <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
    <?php echo link_tag('assets/dist/css/AdminLTE.min.css');?>

     <!-- iCheck -->
     <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
              <?php if( $error = $this->session->flashdata('admin_login_failed')): ?>
                 <span class='alert alert-dismissible  alert-danger'>
                  <?= $error; ?>
                 </span>
              <?php  
              
                 endif;
              ?>

            <?php echo form_open('admin/admin_login',['class'=>'form-horizontal']);?>


                  <div id="msg"></div>
      <div class="form-group has-feedback">
        <?php 
                        $data=array(
                          'name'=>'a_email',
                          'class'=>'form-control',
                          'placeholder'=>'Email',
                          'autocomplete'=>'off'
                         // 'value'=>set_value('email')
                        );
                        echo form_input($data);
                      ?> <span><?php echo form_error('a_email');?></span>

        <?php /*   if(isset($_COOKIE['email'])) {
    $email = $_COOKIE['email'];
  }
  else{

    $email='';
  }   echo $email;
 
          */ ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
     
        <?php 
                        $data=array(
                          'name'=>'a_pass',
                          'class'=>'form-control',
                          'placeholder'=>'password',
                          'autocomplete'=>'off',
                          'id'=>'pass'
                         // 'value'=>set_value('email')
                        );
                        echo form_password($data);
                      ?>
                       <span><?php echo form_error('a_pass');?></span>
<?php  
/*
          if(isset($_COOKIE['password'])) {
    $password = $_COOKIE['password'];
  }
  else{

    $password='';
  }   echo $password;
 
  */       ?>
 


         <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
         <div class="row">
           
          <div class="col-xs-6">
        
           <div class="checkbox icheck">
             <label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" value='1' id="rem" name='remember' <?php if(isset($_COOKIE['remember_me'])) {
    echo 'checked="checked"';
  }
  else {
    echo '';
  }
  ?> autocomplete="off">  Remember Me
            </label>
          

          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit"  id="btn_l" class="btn btn-primary btn-block btn-flat">Sign In</button>
        
        </div>
        <!-- /.col -->
     
      </div>

    
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#"  class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>