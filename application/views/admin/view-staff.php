<style>
  .floatybox {
    display: inline-block;
    width: 123px;
  }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Staff Management
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Staff Management</a></li>
      <li class="active">View Staff</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">

      <?php echo validation_errors('<div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>', '</div>
          </div>'); ?>


      <!-- column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-info">
          <div class="box-header with-border">
            <?php if (isset($content)) : ?>
              <?php foreach ($content as $cnt) : ?>
                <a href="<?php echo base_url(); ?>edit-staff/<?php echo $cnt['id']; ?>" class="btn btn-primary rounded-0 btn-sm text-xs" style="margin:1px"><i class="fa fa-edit"></i></a>
          </div>
          <!-- /.box-header -->

              <!-- form start -->
              <?php echo form_open_multipart('Staff/view'); ?>
              <div class="box-body">
                <div class="col-md-4">
                  <div class="form-group">
                    <img src="<?php echo base_url(); ?>uploads/profile-pic/<?php echo $cnt['pic'] ?>" class="img-circle" width="60%" alt="User Image">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" value="<?php echo $cnt['fname'] ?>" class="form-control"readonly>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" value="<?php echo $cnt['mname'] ?>" class="form-control"readonly>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" value="<?php echo $cnt['lname'] ?>" class="form-control"readonly>
                  </div>
                </div>


                <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" value="<?php echo $cnt['email'] ?>" class="form-control" readonly>
                  </div>
                </div>


                <div class="col-md-4">
                  <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" value="<?php echo $cnt['mobile'] ?>" class="form-control" readonly>
                  </div>
                </div>
              </div>

              <hr style="border:1.7px solid #00c0ef;margin:5px;">

              <div class="box-body">
                <div class="box-header with-border">
                  <h4 class="box-title">Personal Details</h4>
                </div>
                <br />
                <div class="table-responsive">
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Maritial Status</th>
                        <th>Children</th>
                        <th>Father Name</th>
                        <th>Citizen</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (isset($content)) :
                        $i = 1;
                        foreach ($content as $cnt) :
                      ?>
                          <tr>
                            <td><?php echo $cnt['gender'];?></td>
                            <td><?php echo date('d/m/Y', strtotime($cnt['dob'])); ?></td>
                            <td><?php echo $cnt['maritial_status']; ?></td>
                            <td><?php echo $cnt['no_of_child']; ?></td>
                            <td><?php echo $cnt['father_name']; ?>
                            <td><?php echo $cnt['citizen']; ?></td>
                          </tr>
                      <?php
                          $i++;
                        endforeach;
                      endif;
                      ?>
                    </tbody>
                  </table>

                  <h5>Nominee</h5>
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Relation</th>
                        <th>Emergency Contact</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (isset($content)) :
                        $i = 1;
                        foreach ($content as $cnt) :
                      ?>
                          <tr>
                            <td><?php echo $cnt['nominee_name'];?></td>
                            <td><?php echo $cnt['nominee_relation']; ?></td>
                            <td><?php echo $cnt['emergency_no']; ?></td>
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
              



              <hr style="border:1.7px solid #00c0ef;margin:5px;">

              <div class="box-body">
                <div class="box-header with-border">
                  <h4 class="box-title">Address</h4>
                </div>
                <br />
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Street</label>
                    <input class="form-control" value="<?php echo $cnt['txtstreet'] ?>" readonly>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Street No</label>
                    <input class="form-control" value="<?php echo $cnt['streetno'] ?>" readonly>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Block</label>
                    <input class="form-control" value="<?php echo $cnt['txtblock'] ?>" readonly>
                  </div>
                </div>


                <div class="col-md-4">
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" value="<?php echo $cnt['city'] ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>ZIP code</label>
                    <input type="text" value="<?php echo $cnt['hzipcode'] ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>State</label>
                    <input type="text" value="<?php echo $cnt['state'] ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Country</label>
                    <input type="text" value="<?php echo $cnt['country'] ?>" class="form-control" readonly>
                  </div>
                </div>
              </div>

              

              <hr style="border:1.7px solid #00c0ef;margin:5px;">

              <div class="box-body">
                <div class="box-header with-border">
                  <h4 class="box-title">Bank Details</h4>
                </div>
                <br />
                <div class="table-responsive">
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Salary</th>
                        <th>Bank Name</th>
                        <th>Account No</th>
                        <th>IFSC Code</th>
                        <th>PF Number</th>
                        <th>ESIC Number</th>
                        <th>PAN Card</th>
                        <th>Adhaar Number</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (isset($content)) :
                        $i = 1;
                        foreach ($content as $cnt) :
                      ?>
                          <tr>
                            <td>
                            <?php if ($cnt['salary'] == 0) : ?>
                                <span>Monthly</span>
                              <?php elseif ($cnt['salary'] == 1) : ?>
                                <span>Weekly</span>
                              <?php elseif ($cnt['salary'] == 2) : ?>
                                <span>Yearly</span>
                              <?php endif; ?>
                            </td>
                            <td><?php echo $cnt['bank_name'];?></td>
                            <td><?php echo $cnt['account_no']; ?></td>
                            <td><?php echo $cnt['ifsc_code']; ?></td>
                            <td><?php echo $cnt['pf_no']; ?>
                            <td><?php echo $cnt['esic_no']; ?></td>
                            <td><?php echo $cnt['pan_no']; ?></td>
                            <td><?php echo $cnt['adhaar_no']; ?></td>
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

            

              <hr style="border:1.7px solid #00c0ef;margin:5px;">

              <div class="box-body">
                <div class="box-header with-border">
                  <h4 class="box-title">Organization Details</h4>
                </div>
                <br />
                <div class="table-responsive">
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Status</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Shift </th>
                        <th>Location</th>
                        <th>Address</th>
                        <th>Start Date</th>
                        <th>Termination Date</th>
                        <th>Termination Reason</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (isset($content)) :
                        $i = 1;
                        foreach ($content as $cnt) :
                      ?>
                          <tr>
                            <td>
                              <?php if ($cnt['status'] == 1) : ?>
                                <span class="label label-info">Pending</span>
                              <?php elseif ($cnt['status'] == 0) : ?>
                                <span class="label label-success">Active</span>
                              <?php elseif ($cnt['status'] == 2) : ?>
                                <span class="label label-danger">Inactive</span>
                              <?php endif; ?>
                            </td>
                            <td><?php echo $cnt['jobtitle']; ?></td>
                            <td><?php echo $cnt['department_name']; ?></td>
                            <td><?php echo $cnt['shift']; ?></td>
                            <td>
                              <?php if ($cnt['locaddress'] == 1) : ?>
                                <span>Mumbai</span>
                              <?php elseif ($cnt['locaddress'] == 2) : ?>
                                <span>Pune</span>
                              <?php endif; ?>
                            </td>
                            <td><?php echo $cnt['address']; ?></td>
                            <td><?php echo date('d-m-Y', strtotime($cnt['start_date']));?></td>
                            <td><?php echo date('d-m-Y', strtotime($cnt['terminate_date']));?></td>
                            <td><?php echo $cnt['terminate_reason']; ?></td>
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