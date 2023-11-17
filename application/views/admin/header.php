<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PTS | EMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>dist/img/logo.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

  
  

  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PTS</b></span>
      <!-- <img src="<?= base_url('assets/'); ?>dist/img/logo-png.png" height="50px"> -->
      <!-- logo for regular state and mobile devices -->
      <img src="<?= base_url('assets/'); ?>dist/img/PTS-logo-full-white.png" height="auto" width="180px">
      <!-- <span class="logo-lg"><b>PTS EMS</b> </span> -->
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/dist/img/logo-png.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/admin-user.png" class="img-circle" alt="User Image">
                <p>Admin</p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>logout" class="btn btn-default">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/admin-user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Active</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->

        <li class="active"><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th-large"></i> <span>Department</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-department"><i class="fa fa-circle-o"></i> Add Department</a></li>
            <li><a href="<?php echo base_url(); ?>manage-department"><i class="fa fa-circle-o"></i> Manage Department</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-code-fork"></i> <span>Branch</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-branch"><i class="fa fa-circle-o"></i> Add Branch</a></li>
            <li><a href="<?php echo base_url(); ?>manage-branch"><i class="fa fa-circle-o"></i> Manage Branch</a></li>
          </ul>
        </li>        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Staff</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-staff"><i class="fa fa-circle-o"></i> Add Staff</a></li>
            <li><a href="<?php echo base_url(); ?>manage-staff"><i class="fa fa-circle-o"></i> Manage Staff</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-inr"></i> <span>Salary</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-salary"><i class="fa fa-circle-o"></i> Add Salary</a></li>
            <li><a href="<?php echo base_url(); ?>manage-salary"><i class="fa fa-circle-o"></i> Manage Salary</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Leave</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>approve-leave"><i class="fa fa-circle-o"></i> Manage Staff's Leave</a></li>
            <li><a href="<?php echo base_url(); ?>leave-history"><i class="fa fa-circle-o"></i> Leave History</a></li>
            <li><a href="<?php echo base_url(); ?>add-holiday"><i class="fa fa-circle-o"></i> Add Holiday</a></li>
            <li><a href="<?php echo base_url(); ?>manage-holiday"><i class="fa fa-circle-o"></i> Manage List</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-attendance"><i class="fa fa-circle-o"></i> Manage Staff's Attd</a></li>
            <li><a href="<?php echo base_url(); ?>staff-attendance-history"><i class="fa fa-circle-o"></i> Attendance History</a></li>
            <li><a href="<?php echo base_url(); ?>approve-coff"><i class="fa fa-circle-o"></i> Manage COFF Requests</a></li>
            <li><a href="<?php echo base_url(); ?>coff-history"><i class="fa fa-circle-o"></i> COFF History</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-birthday-cake"></i> <span>Birthday</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-birthday"><i class="fa fa-circle-o"></i> Add Birthday</a></li>
            <li><a href="<?php echo base_url(); ?>manage-birthday"><i class="fa fa-circle-o"></i> Manage Birthday</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar-check-o"></i> <span>Anniversary</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-anniversary"><i class="fa fa-circle-o"></i> Add Anniversary</a></li>
            <li><a href="<?php echo base_url(); ?>manage-anniversary"><i class="fa fa-circle-o"></i> Manage Anniversary</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Notice</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-notice"><i class="fa fa-circle-o"></i> Manage Notice</a></li>
            <li><a href="<?php echo base_url(); ?>manage-notice"><i class="fa fa-circle-o"></i> Notice History</a></li>
          </ul>
        </li>        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-secret"></i> <span>HR Policies</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php //echo base_url(); ?>approve-leave"><i class="fa fa-circle-o"></i> Manage Policies</a></li>
            <li><a href="<?php //echo base_url(); ?>leave-history"><i class="fa fa-circle-o"></i> View Policies</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-desktop"></i> <span>Assets Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-assets-type"><i class="fa fa-circle-o"></i> Assets Category</a></li>
            <li><a href="<?php echo base_url(); ?>manage-assetstype"><i class="fa fa-circle-o"></i> Manage Assets</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-desktop"></i> <span>Assets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-assets"><i class="fa fa-circle-o"></i> Add Assets</a></li>
            <li><a href="<?php echo base_url(); ?>manage-assets"><i class="fa fa-circle-o"></i> Manage Assets</a></li>
          </ul>
        </li>                     

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <?php
    if ($this->session->userdata('usertype')!=1)
    { 
      redirect('login');
    }
  ?>