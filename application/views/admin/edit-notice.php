  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Notice
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Notice</a></li>
        <li class="active">Edit Notice</li>
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
              <h3 class="box-title">Edit Notice</h3>
            </div>
            <!-- /.box-header -->

            <?php if(isset($content)): ?>
              <?php foreach($content as $cnt): ?>
                <!-- form start -->
                <form role="form" action="<?php echo base_url(); ?>update-notice" method="POST">
                  <div class="box-body">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="hidden" name="txtid" value="<?php echo $cnt['id']; ?>" class="form-control">
                      </div>
                    </div>    
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Notice Title</label>        
                                <input type="text" name="txtnotice" value="<?php echo $cnt['txtnotice']; ?>" class="form-control" placeholder="Notice Name">
                          </div>
                        </div>        
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Notice Description</label>
                                <textarea class="form-control" name="noticedesc" rows="12"><?php echo $cnt['noticedesc']; ?></textarea>
                          </div>
                        </div>        
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Date of Notice</label>                        
                                <input type="date" value="<?php echo $cnt['dop']; ?>" name="dop" class="form-control" placeholder="DOP">
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