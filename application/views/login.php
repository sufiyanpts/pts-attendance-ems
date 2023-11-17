<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PTS | Login</title>
  <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>dist/img/logo.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/authorization.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">


<div class="image-section">
  <div class="image-wrapper">
    <img src="https://imgur.com/wDmDIhi.png" alt="">
  </div>
  
  <div class="content-container">
  <img src="<?= base_url('assets/'); ?>dist/img/pts-logo.webp" height="auto" width="180px">
    <!-- <h1 class="section-heading"><span>Attendance</span></h1> -->
    <!-- <p class="section-paragraph">Education is the key that unlocks the limitless doors of knowledge, empowering us to shape our destinies and create a brighter future.</p> -->
  </div>
</div>

<div class="form-section">
  <div class="form-wrapper">
    
    <h2>Welcome Back! 👋🏻</h2>
    <p>Enter your credentials to access your account.</p>
    <?php echo form_open('Home/login'); ?>
      <div class="input-container">
        <div class="form-group">
          <input type="text" class="form-control form-control-user" name="txtusername" placeholder="Username/Staff Email">
          <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control form-control-user" name="txtpassword" placeholder="Password">
          <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
        </div>
        <?php echo $this->session->flashdata('login_error'); ?>
      </div>
      
      
      <button class="login-btn"  type="submit">Log In</button>
      <p style="color:blue; font-size:14px; margin-top:5px;";><a href="<?php echo site_url('forgot-password'); ?>">Forgot Password?</a></p>
    </form>

    
  </div>
</div>

<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>

