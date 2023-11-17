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
    <br />



    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              
                  
                    <legend class="ml-3 px-3 w-auto">Filter Report</legend>
                    <form role="form" method="POST" action="<?php echo base_url('attendance/staff_range_attendance_history'); ?>">
                      <!-- <?php echo form_open('Attendance/insert'); ?> -->
                      <div class="box-body">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label for="exampleInputPassword1">Select Name</label>
                            <select class="form-control" name="txtname" onchange="getstaff(this.value)">
                              <option value="">Select</option>
                              <?php
                              if (isset($staff)) {
                                foreach ($staff as $cnt) {
                                  print "<option value='" . $cnt['staff_name'] . "'>" . $cnt['staff_name'] . "</option>";
                                }
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="row container">
                          <div class="col-lg-3 col-md-6 col-sm-12">
                          <label for="exampleInputPassword1">From :</label>
                            <input type="date" name="from_date" class="form-control form-control-sm rounded-0" id="from_date">
                            <?= form_error('start', '<small class="text-danger pl-3">', '</small>') ?>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-12">
                          <label for="exampleInputPassword1">To :</label>
                            <input type="date" name="to_date" id="to_date" class="form-control form-control-sm rounded-0">
                            <?= form_error('end', '<small class="text-danger pl-3">', '</small>') ?>
                          </div>
                          <br />
                        </div>
                        <div class="col-lg-2">
                          <button type="submit" class="btn btn-primary btn-sm rounded-0 bg-gradient-primary"><i class="fa fa-file"></i> Show Attendance</button>
                        </div>
                      </div>
                    </form>
                 
             
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>
  <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->