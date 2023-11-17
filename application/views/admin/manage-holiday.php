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
        <li class="active">Manage Holiday</li>
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
              <h3 class="box-title">Manage Holiday</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Holiday Title</th>
                  <th>From Date</th>
                  <th>To Date</th>
                  <th>Number of Days</th>
                  <th>Year</th>
                  <th>Action</th>
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
                      <td><?php echo $cnt['holiday_name']; ?></td>
                      <td><?php echo $cnt['from_date']; ?></td>
                      <td><?php echo $cnt['to_date']; ?></td>
                      <td><?php echo $cnt['number_of_days']; ?></td>
                      <td><?php echo $cnt['year']; ?></td>
                      <td>                        
                        <a href="<?php echo base_url(); ?>edit-holiday/<?php echo $cnt['id']; ?>" class="btn btn-success rounded-0 btn-sm text-xs"><i class="fa fa-check"></i></a>
                        <a href="<?php echo base_url(); ?>delete-holiday/<?php echo $cnt['id']; ?>" class="btn btn-danger rounded-0 btn-sm text-xs" ><i class="fa fa-close"></i></a>
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