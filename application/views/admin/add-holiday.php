   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Holiday
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Holiday</a></li>
        <li class="active">Add Holiday</li>
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
              <h3 class="box-title">Add Holiday</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>insert-holiday" method="POST">
              <div class="box-body">
               
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name of Holiday</label>
                    <input type="text" name="holiday_name" class="form-control" placeholder="Holiday Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleStartDate">Strat Date</label>
                    <input type="date" name="from_date" class="form-control">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleEndDate">End Date</label>
                    <input type="date" name="to_date" class="form-control">
                  </div>
                </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Number of Days</label>
                  <input type="number" name="number_of_days" class="form-control" id="recipient-name1" required>
                </div>
              </div>
              <div class="col-md-6">              
                <div class="form-group">
                  <label for="message-text" class="control-label"> Year</label>
                  <input type="month" class="form-control mydatetimepicker" name="year" id="message-text1" required>
                </div>
              </div>                                                  
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Submit</button>
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



  