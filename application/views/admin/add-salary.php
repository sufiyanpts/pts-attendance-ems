  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Salary
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Salary</a></li>
        <li class="active">Add Salary</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <?php if($this->session->flashdata('success')): ?>
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  <?php echo $this->session->flashdata('success'); ?>
            </div>
          </div>
        <?php elseif($this->session->flashdata('error')):?>
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>
                  <?php echo $this->session->flashdata('error'); ?>
            </div>
          </div>
        <?php endif;?>

        <!-- column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Salary</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open('Salary/insert'); ?>
              <div class="box-body">
               
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Department Name</label>
                    <select class="form-control" name="slcdepartment" onchange="getstaff(this.value)">
                      <option value="">Select</option>
                        <?php
                          if(isset($departments))
                          {
                            foreach($departments as $cnt)
                            {
                              print "<option value='".$cnt['id']."'>".$cnt['department_name']."</option>";
                            }
                          } 
                        ?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div id="salarydiv">
              </div>
              
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    function getstaff(dept) {
            $.ajax({
                type: "POST",
                url:  "<?php echo site_url('Salary/get_salary_list'); ?>",
                data: 'dept='+dept,
                success: function(data){
                    $('#salarydiv').html(data);
                }
            });
        }
  </script>

  <script>
    $(document).on('keyup','input.expenses',function(){
      $expenses = $(this).parents('tr').find('.expenses');
      $expenseTotal = $(this).parents('tr').find('#total');
      $expenseTotal.val('0');
      $.each($expenses,function(index,object){    
        if($(object).val()!='')
        {
     $expenseTotal.val(parseInt($expenseTotal.val())+parseInt($(object).val()));
        }
      })
    });
  </script>
<!-- <script type="text/javascript">
$(document).on('keyup','input.expenses',function(){
  $expenses = $(this).parents('tr').find('.expenses');
  $expenseTotal = $(this).parents('tr').find('#total');
  $expenseTotal.val('0');
  $.each($expenses,function(index,object){    
    if($(object).val()!='')
    {
      $expenseTotal.val(parseInt($expenseTotal.val())+parseInt($(object).val()));
    }
  });
  const basicSalary = parseInt($('#basicSalary').val());
  const netSalary = calculateSalary(basicSalary);
  $('#netSalary').val(netSalary);
});  
</script> -->

  <!-- Write JavaScript code to find DA, HRA, PF, TAX, Gross pay, Deduction and Net pay.    --> 
<!--   <script>
      function calc()
      {
          var bp,DA,HRA,GP,PF,Tax,Deduction,NetPay;
          bp = parseInt(document.form1.bp.value);
          DA = bp * 0.04;
          HRA = bp * 0.04;
          GP = bp + DA + HRA;
          PF = GP * 0.09;
          Tax = GP * 0.001;
          Deduction = Tax + PF;
          NetPay = GP - Deduction;
  
          document.form1.da.value = DA;
          document.form1.hra.value = HRA;
          document.form1.gp.value = GP;
          document.form1.pf.value = PF;
          document.form1.tax.value = Tax;
          document.form1.deduction.value = Deduction;
          document.form1.netpay.value = NetPay;
      }
  </script> -->