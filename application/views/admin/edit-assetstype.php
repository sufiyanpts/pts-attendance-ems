  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Assets 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Assets category</a></li>
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
              <h3 class="box-title">Edit Assets Type</h3>
            </div>
            <!-- /.box-header -->

            <?php if(isset($content)): ?>
              <?php foreach($content as $cnt): ?>
                <!-- form start -->
                <form role="form" action="<?php echo base_url(); ?>update-assetstype" method="POST">
                  <div class="box-body">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Assets Name</label>
                        <input type="hidden" name="txtid" value="<?php echo $cnt['id']; ?>" class="form-control">
                        <select class="form-control" name="txttypename">
                          <option value="">Select</option>
                            <?php
                            if($cnt['cat_status']=='Assets')
                            {
                              print '<option value="Assets" selected>Assets</option>
                          <option value="Logistics">Logistics</option>
                          <option value="Others">Others</option>';
                            }
                            elseif($cnt['cat_status']=='Logistics')
                            {
                              print '<option value="Assets">Assets</option>
                          <option value="Logistics">Logistics</option>
                          <option value="Others">Others</option>';
                            }
                            elseif($cnt['cat_status']=='Others')
                            {
                              print '<option value="Assets">Assets</option>
                          <option value="Logistics">Logistics</option>
                          <option value="Others">Other</option>';
                            }
                            else{
                              print '<option value="Assets" selected>Assets</option>
                          <option value="Logistics">Logistics</option>
                          <option value="Other">Other</option>';
                            }
                            ?>                          
                        </select>
                      </div>
                    </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Assets category Name</label>
                  <input type="text" name="txtcatname" value="<?php echo $cnt['cat_name']; ?>" class="form-control" placeholder="Category Name">                    
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