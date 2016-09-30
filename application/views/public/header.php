<?php    foreach ($name as $n) :
               $name= $n->user_name;
          endforeach; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $name ?>| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
 
  <!-- Font Awesome -->
   <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/dist/css/jvectormap/jquery-jvectormap-1.2.2.css"> <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!-- Theme style -->
  <?php echo link_tag('assets/dist/css/AdminLTE.min.css');?>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->

  <?php echo link_tag('assets/dist/css/skins/_all-skins.min.css');?>
 
  <style>
  .thumbnail {
    position:relative;
    overflow:hidden;
}
.skin-blue-light .main-header .navbar {
    background-color: #fe363e;
}
.skin-blue-light .main-header .logo {
    background-color: #fe363e;
    color: #fff;
    border-bottom: 0 solid transparent;
}
.skin-blue-light .main-header li.user-header {
    background-color:#fe363e;
}
.caption {
    position:absolute;
    top:0;
    right:0;
    background:rgba(171, 32, 57, 0.75);
    width:100%;
    height:100%;
    padding:2%;
    display: none;
    text-align:center;
    color:#fff !important;
    z-index:2;
}.nav-tabs-custom>.nav-tabs>li.active {
    border-top-color: #dd4b39;
}
  </style>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="https://code.jquery.com/jquery-2.2.3.js" integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"/></script>
    
    <script type="text/javascript" src="../jss/js/formValidation.js"></script>

</head>
 <body class="hold-transition skin-blue sidebar-mini">
 <div class="wrapper">

    <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <?php// $sel_noti=mysqli_query($conn,"select * from notification where user_id='$id'");
            //  $count=mysqli_num_rows($sel_noti);
          ?>
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php// echo $count; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have<?php // echo $count;?> notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                 <?php //$rows=mysqli_fetch_array($sel_noti);?>
                <ul class="menu">
                  
                 <li>

                    <a href="#">
                      <i class="fa fa-warning text-yellow"><?php 
                    
                      ?></i>
                      
                      <?php 
                     //  echo $rows['msg_from'].":".$rows['msg_to'];
                      ?>
                      </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <?php if(empty($image))
                    {
                     echo "<img src='".base_url()."/uploads/user.png'   class='user-image' alt='User Image'>";
              
                     }else{

                      echo "<img src='".base_url().$image."'  class='user-image' alt='User Image'>";
               
                   }
                   ?>

              <span class="hidden-xs"><?php 
           
              
          ?>
          <strong>hello <?= $name ?></strong>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
          
               <p id="data_borrow_detail">
             <?php if(empty($image))
                    {
                     echo "<img src='".base_url()."/uploads/user.png'   width='50%' height='50%' alt='User Image'>";
              
                     }else{

                      echo "<img src='".base_url().$image."'   width='50%' height='50%' alt='User Image'>";
               
                   }
                   ?>

               
                     <small>Member since <?= $avt_date ?>
                      
                    </small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <!-- /.row -->
              </li>
              <!-- Menu Footer-->
          
              <li class="user-footer">
                <div class="pull-left">
                  
                  <a href="profile.php" class="btn btn-default btn-flat">profile</a>
                  
                 
                </div>
                <div class="pull-right">
                  <a href="<?= base_url('Login/user_logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
