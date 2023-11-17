  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Salary Slip
        <small>#00<?php echo rand(1000,100)?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Salary Management</a></li>
        <li class="active">Salary Slip</li>
      </ol>
    </section>

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
              <tr style="background-color:#0090ef;color:#fff;">
                <th colspan="4" class="text-center">Salary Slip : <?php echo $cnt['month_slip']; ?>&nbsp;<?php echo $cnt['year_slip']; ?></td>
              </tr>
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
              <tr style="background-color:#0090ef;color:#fff;">
                <th colspan="2" class="text-center">Earning</td>
                <th colspan="2" class="text-center">Deduction</td>
              </tr>
              <tr style="background-color:#0090ef;color:#fff;">
                <th colspan="1" class="text-center">Particulars</td>
                <th colspan="1" class="text-center">Amount</td>
                <th colspan="1" class="text-center">Particulars</td>
                <th colspan="1" class="text-center">Amount</td>
              </tr>                
              <tr>
                <td>Basic Salary</td>
                <td><?php echo $cnt['basic_salary']; ?></td>
                <td>Employer ESIC</td>
                <td>0</td>
              </tr>
              <tr>
                <td>HRA</td>
                <td><?php echo $cnt['hra']; ?></td>
                <td>Employer PF Amount</td>
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
                <td>Salary Advance</td>
                <td>0</td>
              </tr>
              <tr>
                <td>Gross</td>
                <td><?php echo $cnt['total'] ?></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Employee PF Amount</td>
                <td>0</td>
                <td></td>
                <td></td>
              </tr> 
              <tr>
                <td>Employee ESIC</td>
                <td><?php echo $cnt['total'] - $cnt['allowance']; ?></td>
                <td></td>
                <td></td>
              </tr> 
              <tr>
                <?php 
                  $bonus = 2000;
                 ?>
                <td>Performance Bonus</td>
                <td id='Bonus'><?php echo $bonus; ?></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>CTC</td>
                <td>35000</td>
                <td>Total Deduction</td>
                <td>200</td>
              </tr>
              <tr style="background-color:#0090ef;color:#fff;">
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

    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script>
  $(document).ready(function() {
      var doc = new jsPDF("l", "pt", "letter");
      $('#cmd').click(function () {
        let doc = new jsPDF('p','pt','a4');
        doc.addHTML($('#invoice'),function() {
            doc.save('pts-salary-slip.pdf');
        }); 
      });
  });
  </script>
    