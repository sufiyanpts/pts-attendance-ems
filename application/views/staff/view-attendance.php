<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Attendance History
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Attendance History</a></li>
      <li class="active">View Attendance</li>
    </ol>
  </section>

  <!-- Main content -->
  <br/>
  <div class="card rounded-0 shadow mb-3 container">
    <div class="card-body container">
      <fieldset class="border rounded-0 px-2 pb-2">
        <legend class="ml-3 px-3 w-auto">Filter Report</legend>
        <form method="POST" action="<?php echo base_url('attendance/filter_by_date_range'); ?>">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <label>From :</label>
              <input type="date" name="from_date" class="form-control form-control-sm rounded-0" id="from_date">
              <?= form_error('start', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <label>To :</label>
              <input type="date" name="to_date" id="to_date" class="form-control form-control-sm rounded-0">
              <?= form_error('end', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <br/>
            <div class="col-lg-2">
              <button type="submit" class="btn btn-primary btn-sm rounded-0 bg-gradient-primary"><i class="fa fa-file"></i> Show Attendance</button>
            </div>
          </div>
        </form>
      </fieldset>
    </div>
  </div>

  
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">View Attendance</h3>
            <?php if ($attendance_data) : ?>
              <div class="box-body">
                <div class="table-responsive ">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Check In Time</th>
                        <th>Note</th>
                        <th>Status</th>
                        <th>Check Out Time</th>
                      </tr>
                    </thead>
                    <?php foreach ($attendance_data as $atd) : ?>
                      <tr>
                        <td><?php echo date('l, d-m-Y', strtotime($atd['date'])); ?></td>
                        <td><?php echo $atd['check_in']; ?></td>
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
                        <td><?php echo $atd['check_out']; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </table>
                </div>
              </div>
            <?php else : ?>
              <h4 class="text-center">Please Pick Your Date</h4>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
<!-- /.content -->

</div>

<!-- /.content-wrapper -->