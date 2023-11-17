  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Notice
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Assets</a></li>
        <li class="active">Edit Assets</li>
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
              <h3 class="box-title">Edit Assets</h3>
            </div>
            <!-- /.box-header -->

            <?php if(isset($content)): ?>
              <?php foreach($content as $cnt): ?>
                <!-- form start -->
                <form role="form" action="<?php echo base_url(); ?>update-assets" method="POST">
                  <div class="box-body">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="hidden" name="txtid" value="<?php echo $cnt['id']; ?>" class="form-control">
                      </div>
                    </div> 
                                                      
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Assets Name</label>
                  <input type="text" name="ass_name" class="form-control" placeholder="Assets Name" value="<?php echo $cnt['ass_name']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Assets Brand</label>
                  <input type="text" name="ass_brand" class="form-control" placeholder="Assets Brand" value="<?php echo $cnt['ass_brand']; ?>">
                </div>
              </div> 
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Assets Model</label>
                  <input type="text" name="ass_model" class="form-control" placeholder="Assets Model" value="<?php echo $cnt['ass_model']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Assets Code</label>
                  <input type="text" name="ass_code" class="form-control" placeholder="Assets Code" value="<?php echo $cnt['ass_code']; ?>">
                </div>
              </div>                                                
              <div class="col-md-12">
                <div class="form-group">
                  <label>Assets Configuration Detail</label>
                  <textarea class="form-control" name="configuration" rows="12"><?php echo $cnt['configuration']; ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Date of Issue</label>
                  <input type="date" name="purchasing_date" class="form-control" placeholder="Date of Purchase"  value="<?php echo $cnt['purchasing_date']; ?>">
                </div>
              </div>                                

                    
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-right">Update</button>
                  </div>
                </form>
              <?php endforeach; ?>
            <?php endif; ?>
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