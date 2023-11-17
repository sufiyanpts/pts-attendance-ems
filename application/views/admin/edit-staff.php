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
        <li class="active">Edit Staff</li>
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

        <?php if ($this->session->flashdata('success')) : ?>
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Success!</h4>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          </div>
        <?php elseif ($this->session->flashdata('error')) : ?>
          <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Failed!</h4>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Staff</h3>
            </div>
            <!-- /.box-header -->

            <?php if (isset($content)) : ?>
              <?php foreach ($content as $cnt) : ?>
                <!-- form start -->
                <?php echo form_open_multipart('Staff/update'); ?>
                <div class="box-body">
                  <div class="col-md-4">
                    <div class="form-group">
                      <img src="<?php echo base_url(); ?>uploads/profile-pic/<?php echo $cnt['pic'] ?>" class="img-circle" width="60%" alt="User Image">
                      <a href="<?php echo base_url(); ?>edit-staff/<?php echo $cnt['id']; ?>" class="btn btn-primary rounded-0 btn-sm text-xs" style="margin:1px"><i class="fa fa-edit"></i></a>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="hidden" name="txtid" value="<?php echo $cnt['id'] ?>" class="form-control">
                      <input type="text" name="fname" value="<?php echo $cnt['fname'] ?>" class="form-control" placeholder="First Name">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Middle Name</label>
                      <input type="text" name="mname" value="<?php echo $cnt['mname'] ?>" class="form-control" placeholder="Full Name">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" name="lname" value="<?php echo $cnt['lname'] ?>" class="form-control" placeholder="Full Name">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="txtemail" value="<?php echo $cnt['email'] ?>" class="form-control" placeholder="Email">
                    </div>
                  </div>


                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Mobile</label>
                      <input type="text" name="txtmobile" value="<?php echo $cnt['mobile'] ?>" class="form-control" placeholder="Mobile">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Change Profile Photo</label>
                      <input type="file" name="filephoto" value="<?php echo base_url(); ?>uploads/profile-pic/<?php echo $cnt['pic'] ?>" class="form-control">
                    </div>
                  </div>


                </div>
                <hr style="border:1.7px solid #00c0ef;margin:5px;">

                <div class="box-body">
                  <div class="box-header with-border">
                    <h4 class="box-title">Personal Details</h4>
                  </div>
                  <br />
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Gender</label>
                      <select class="form-control" name="slcgender">
                        <option value="">Select</option>
                        <?php
                        if ($cnt['gender'] == 'Male') {
                          print '<option value="Male" selected>Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Others">Others</option>';
                        } elseif ($cnt['gender'] == 'Female') {
                          print '<option value="Male">Male</option>
                                  <option value="Female" selected>Female</option>
                                  <option value="Others">Others</option>';
                        } elseif ($cnt['gender'] == 'Others') {
                          print '<option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Others" selected>Others</option>';
                        } else {
                          print '<option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Date of Birth</label>
                      <input type="date" name="txtdob" value="<?php echo $cnt['dob'] ?>" class="form-control" placeholder="DOB">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Maritial Status</label>
                      <select class="form-control" name="txtmarital">
                        <option value="">Select</option>
                        <?php
                        if ($cnt['maritial_status'] == 'Single') {
                          print '<option value="Single" selected>Single</option>
                                  <option value="Married">Married</option>';
                        } elseif ($cnt['maritial_status'] == 'Married') {
                          print '<option value="Single">Single</option>
                                  <option value="Married" selected>Married</option>';
                        } else {
                          print '<option value="Male">Single</option>
                            <option value="Married">Married</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Children</label>
                      <input type="text" name="txtchild" value="<?php echo $cnt['no_of_child'] ?>" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Father Name</label>
                      <input type="text" name="fathername" value="<?php echo $cnt['father_name'] ?>" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Citizen</label>
                      <input type="text" name="citizen" value="<?php echo $cnt['citizen'] ?>" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <h5>Nominee</h5>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="nominee-name" value="<?php echo $cnt['nominee_name'] ?>" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Relation</label>
                      <input type="text" name="relation-nominee" value="<?php echo $cnt['nominee_relation'] ?>" class="form-control">
                    </div>
                  </div>


                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Emergency Number</label>
                      <input type="number" name="emerno" value="<?php echo $cnt['emergency_no'] ?>" class="form-control">
                    </div>
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
                      <input class="form-control" name="txtstreet" value="<?php echo $cnt['txtstreet'] ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Street no</label>
                      <input class="form-control" name="streetno" value="<?php echo $cnt['streetno'] ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Block</label>
                      <input class="form-control" name="txtblock" value="<?php echo $cnt['txtblock'] ?>">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>State</label>
                      <input class="form-control" name="txtstate" value="<?php echo $cnt['state'] ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>City</label>
                      <input class="form-control" name="txtcity" value="<?php echo $cnt['city'] ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>ZIP code</label>
                      <input class="form-control" name="hzipcode" value="<?php echo $cnt['hzipcode'] ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Country</label>
                      <select class="form-control" name="slccountry">
                        <option value="">Select</option>
                        <?php
                        if (isset($country)) {
                          foreach ($country as $cnt1) {
                            if ($cnt1['country_name'] == $cnt['country']) {
                              print "<option value='" . $cnt1['country_name'] . "' selected>" . $cnt1['country_name'] . "</option>";
                            } else {
                              print "<option value='" . $cnt1['country_name'] . "'>" . $cnt1['country_name'] . "</option>";
                            }
                          }
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>


                <hr style="border:1.7px solid #00c0ef;margin:5px;">

                <div class="box-body">
                  <div class="col-md-12">
                    <div class="box-header with-border">
                      <h4 class="box-title">Organization Details</h4>
                    </div>
                    <br />
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" onchange="getstaff(this.value)">
                          <option value="">Select</option>
                          <?php
                          if ($cnt['status'] == '1') {
                            print '<option value="Active" selected>Active</option>
                                      <option value="Inactive">Inactive</option>';
                          } elseif ($cnt['status'] == '2') {
                            print '<option value="Active">Actibe</option>
                                      <option value="Inactive" selected>Inactive</option>';
                          } else {
                            print '<option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>';
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Designation</label>
                        <input class="form-control" name="jobtitle" value="<?php echo $cnt['jobtitle']; ?>">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Department</label>
                        <select class="form-control" name="slcdepartment">
                          <option value="">Select</option>
                          <?php
                          if (isset($department)) {
                            foreach ($department as $cnt1) {
                              if ($cnt1['id'] == $cnt['department_id']) {
                                print "<option value='" . $cnt1['id'] . "' selected>" . $cnt1['department_name'] . "</option>";
                              } else {
                                print "<option value='" . $cnt1['id'] . "'>" . $cnt1['department_name'] . "</option>";
                              }
                            }
                          }
                          ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Shift</label>
                        <select class="form-control" name="slcshift" onchange="getstaff(this.value)">
                          <option value="<?php echo $cnt['shift']; ?>">Select</option>
                          <?php
                          if ($cnt['shift'] == 'Morning') {
                            print '<option value="Morning" selected>Morning</option>
                                      <option value="General">General</option>
                                      <option value="Evening">Evening</option>';
                          } elseif ($cnt['shift'] == 'General') {
                            print '<option value="Morning">Morning</option>
                                      <option value="General" selected>General</option>
                                      <option value="Evening">Evening</option>';
                          } elseif ($cnt['shift'] == 'Evening') {
                            print '<option value="Morning">Morning</option>
                                      <option value="General" >General</option>
                                      <option value="Evening" selected>Evening</option>';
                          } else {
                            print '<option value="Morning">Morning</option>
                                <option value="General">General</option>
                                <option value="Evening">Evening</option>';
                          }
                          ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Location</label>
                        <select class="form-control" name="locaddress" onchange="getstaff(this.value)">
                          <option value="<?php echo $cnt['locaddress']; ?>">Select</option>
                          <?php
                          if ($cnt['locaddress'] == '1') {
                            print '<option value="Mumbai" selected>Mumbai</option>
                                      <option value="Pune">Pune</option>';
                          } elseif ($cnt['locaddress'] == '2') {
                            print '<option value="Mumbai">Mumbai</option>
                                      <option value="Pune" selected>Pune</option>';
                          } else {
                            print '<option value="Mumbai">Mumbai</option>
                                <option value="Pune">Pune</option>';
                          }
                          ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="txtaddress"><?php echo $cnt['locaddress'] ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Start Date</label>
                      <input type="date" name="startdate" value="<?php echo $cnt['start_date'] ?>" class="form-control">
                    </div>
                  </div>


                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Termination Date</label>
                      <input type="date" name="trmdate" value="<?php echo $cnt['terminate_date'] ?>" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Termination Reason</label>
                      <input type="text" name="trmreason" value="<?php echo $cnt['terminate_reason']; ?>" class="form-control">
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-success pull-right">Submit</button>
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