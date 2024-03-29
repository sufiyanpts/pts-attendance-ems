<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Comp Off Management
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Attendance</a></li>
        <li class="active">Manage COFF Requests</li>
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
              <h3 class="box-title">Approve COFF</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Staff</th>
                    <th>Department</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Reason</th>
                    <th>Description</th>
                    <th>Applied On</th>
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
                        <td><?php echo $cnt['staff_name']; ?></td>
                        <td><?php echo $cnt['department_name']; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($cnt['coff_from'])); ?></td>
                        <td><?php echo date('d-m-Y', strtotime($cnt['coff_to'])); ?></td>
                        <td><?php echo $cnt['txtreason']; ?></td>
                        <td><?php echo $cnt['description']; ?></td>
                        <td><?php echo date('Y-m-d', strtotime($cnt['applied_on'])); ?></td>
                        <td>
                          <a href="<?php echo base_url(); ?>coff-approved/<?php echo $cnt['id']; ?>" class="btn btn-success rounded-0 btn-sm text-xs"><i class="fa fa-check"></i></a>
                          <a href="<?php echo base_url(); ?>coff-rejected/<?php echo $cnt['id']; ?>" class="btn btn-danger rounded-0 btn-sm text-xs" ><i class="fa fa-close"></i></a>
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

    