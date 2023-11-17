<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Attendance History
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Attendance Management</a></li>
        <li class="active">Attendance History</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">View Attendance</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Reason</th>
                    <th>Status</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Applied On</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    if(isset($attendance_data)):
                    $i=1; 
                    foreach($attendance_data as $atd):
                  ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $atd['staff_name']; ?></td>
                        <td><?php echo date('l, d-m-Y', strtotime($atd['date'])); ?></td>
                        <td><?php echo $atd['txtreason']; ?></td>
                        <td>
                          <?php if($atd['status']==0): ?>
                            <span class="label label-info">Present</span>
                            <?php elseif($atd['status']==1): ?>
                            <span class="label label-success">Absent</span>
                            <?php elseif($atd['status']==2): ?>
                            <span class="label label-danger">Late</span>
                          <?php endif; ?>
                        </td>
                        <td><?php echo date($atd['check_in']); ?></td>
                        <td><?php echo date($atd['check_out']); ?></td>
                        <td><?php echo date('l, d-m-Y', strtotime($atd['applied_on'])); ?></td>
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

    