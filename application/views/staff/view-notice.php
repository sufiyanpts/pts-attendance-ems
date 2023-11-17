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
        <li class="active">Manage Notice</li>
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

        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">View Notice List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php 
                  if(isset($content)):
                  $i=1; 
                  foreach($content as $cnt): 
                ?>

                  <div class="panel panel-primary">
                    <div class="panel-heading"><?php echo $cnt['dop']; ?></br> #<?php echo $i; ?></br><?php echo $cnt['txtnotice']; ?></div>
                    <div class="panel-body">
                      <?php echo $cnt['noticedesc']; ?>
                    </div>
                  </div>

                  <?php 
                    $i++;
                    endforeach;
                    endif; 
                  ?>
            
<!--               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Notice Name</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  if(isset($content)):
                  $i=1; 
                  foreach($content as $cnt): 
                ?>
                    <tr>
                      <td><?php //echo $i; ?></td>
                      <td><?php //echo $cnt['txtnotice']; ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>edit-notice/<?php echo $cnt['id']; ?>" class="btn btn-success">Edit</a>
                        <a href="<?php echo base_url(); ?>delete-notice/<?php echo $cnt['id']; ?>" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  <?php 
                    $i++;
                    endforeach;
                    endif; 
                  ?>
                 
                </tbody>
              </table> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    