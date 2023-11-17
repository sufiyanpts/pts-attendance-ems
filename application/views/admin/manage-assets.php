<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Assets
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Assets</a></li>
        <li class="active">Manage Assets</li>
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
              <h3 class="box-title">Manage Assets</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Assets Name</th>
                  <th>Assets Brand</th>
                  <th>Assets Model</th>
                  <th>Assets Code</th>
                  <th>Assets Configuration</th>
                  <th>Date of Issue</th>
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
                      <td><?php echo $i; ?></td>
                      <td><?php echo $cnt['ass_name']; ?></td>
                      <td><?php echo $cnt['ass_brand']; ?></td>
                      <td><?php echo $cnt['ass_model']; ?></td>
                      <td><?php echo $cnt['ass_code']; ?></td>
                      <td><?php echo $cnt['configuration']; ?></td>
                      <td><?php echo $cnt['purchasing_date']; ?></td>
                      <td>                        
                        <a href="<?php echo base_url(); ?>edit-assets/<?php echo $cnt['id']; ?>" class="btn btn-success rounded-0 btn-sm text-xs"><i class="fa fa-check"></i></a>
                        <a href="<?php echo base_url(); ?>delete-assets/<?php echo $cnt['id']; ?>" class="btn btn-danger rounded-0 btn-sm text-xs" ><i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                  <?php 
                    $i++;
                    endforeach;
                    endif; 
                  ?>
                
                </tbody>
              </table>
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

    