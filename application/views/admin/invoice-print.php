<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PTS | Salary Slip</title>
  <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>dist/img/logo.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <?php 
      if(isset($content)):
      $i=1; 
      foreach($content as $cnt): 
    ?>
    <!-- Main content -->
    <section class="invoice" id="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <img src="<?= base_url('assets/'); ?>dist/img/pts-logo.webp" height="50px">
            <small class="pull-right">Salary Slip Date: <?php echo date('d-m-Y'); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered">
            <thead>

            </thead>
            <tbody>
              <tr>
                <td>Employee Code</td>
                <td>118</td>
                <td>Bank Name</td>
                <td>Axis Bank</td>
              </tr>
              <tr>
                <td>Employee Name</td>
                <td><?php echo $cnt['staff_name']; ?></td>
                <td>Bank Account Number</td>
                <td>0987654321</td>
              </tr>
                <td>Date of Joining</td>
                <td>18-07-2022</td>
                <td>ESIC</td>
                <td>0</td>
              </tr>
              <tr>
                <td>Designation</td>
                <td>Web Developer</td>
                <td>UAN</td>
                <td>0</td>
              </tr>               
              <tr>
                <td>Total Working Days</td>
                <td>30</td>
                <td>Leaves Taken</td>
                <td>0</td>
              </tr>
               
              <tr>
                <td>Present Days</td>
                <td>30</td>
                <td>Balance Leaves</td>
                <td>0</td>
              </tr>
              <tr style="background-color:#012442;color:#fff;">
                <th colspan="2" class="text-center">Earning</td>
                <th colspan="2" class="text-center">Deduction</td>
              </tr>
              <tr style="background-color:#012442;color:#fff;">
                <th colspan="1" class="text-center">Particulars</td>
                <th colspan="1" class="text-center">Amount</td>
                <th colspan="1" class="text-center">Particulars</td>
                <th colspan="1" class="text-center">Amount</td>
              </tr>                
              <tr>
                <td>Basic Salary</td>
                <td><?php echo $cnt['basic_salary']; ?></td>
                <td>ESIC</td>
                <td>0</td>
              </tr>
              <tr>
                <td>HRA</td>
                <td><?php echo $cnt['hra']; ?></td>
                <td>Employee PF</td>
                <td>0</td>
              </tr>
              <tr>
                <td>Conveyance</td>
                <td><?php echo $cnt['conveyance']; ?></td>
                <td>Professional Tax</td>
                <td>200</td>
              </tr>
              <tr>
                <td>Medical Allowance</td>
                <td><?php echo $cnt['medical']; ?></td>
                <td>TDS</td>
                <td>0</td>
              </tr>
              <tr>
                <td>Other Allowance</td>
                <td><?php echo $cnt['allowance']; ?></td>
                <td>alary Advance</td>
                <td>0</td>
              </tr>
              <tr>
                <td>Gross</td>
                <td>33000</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Employee PF</td>
                <td>0</td>
                <td></td>
                <td></td>
              </tr> 
              <tr>
                <td>ESIC</td>
                <td>0</td>
                <td></td>
                <td></td>
              </tr> 
              <tr>
                <td>Performance Bonus</td>
                <td>0</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>CTC</td>
                <td>35000</td>
                <td>Total Deduction</td>
                <td>200</td>
              </tr>
              <tr style="background-color:#012442;color:#fff;">
                <th colspan="1" class="text-center">Net Paid</td>
                <th colspan="3" class="text-center"><?php echo $cnt['total']; ?></td>
              </tr>
              <tr>
                <th colspan="4" class="text-center">"This is Computer Generated Slip."</td>
              </tr>                                                                                                                                                                                                         
            </tbody>
          </table>          
        </div>
      </div>
      <!-- info row -->




      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="<?php echo base_url(); ?>print-invoice/<?php echo $cnt['id']; ?>" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
          <!-- <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button> -->
          <button type="button" id="cmd" class="btn btn-danger pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
      </div>
    </section>
    <!-- /.content -->
    <?php 
      $i++;
      endforeach;
      endif; 
    ?>
</div>


<!-- ./wrapper -->
</body>
</html>
