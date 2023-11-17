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
      <li class="active">Add Staff</li>
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
            <h3 class="box-title">Add Staff Master</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo form_open_multipart('Staff/insert'); ?>
          <div class="box-body">
            <div class="col-md-4">
              <div class="form-group">
                <label>First Name <span style="color:red;">*</span></label>
                <input type="text" name="fname" class="form-control" placeholder="First Name">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Middle Name <span style="color:red;">*</span></label>
                <input type="text" name="mname" class="form-control" placeholder="Middle Name">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Last Name <span style="color:red;">*</span></label>
                <input type="text" name="lname" class="form-control" placeholder="Last Name">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Job Title <span style="color:red;">*</span></label>
                <input type="text" name="jobtitle" class="form-control" placeholder="Job Title">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Position <span style="color:red;">*</span></label>
                <select class="form-control" name="slcposition">
                  <option value="">Select</option>
                  <option value="Staff">Staff</option>
                  <option value="Out Source">Out Source</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Select Department <span style="color:red;">*</span></label>
                <select class="form-control" name="slcdepartment">
                  <option value="">Select Department</option>
                  <?php
                  if (isset($department)) {
                    foreach ($department as $cnt) {
                      print "<option value='" . $cnt['id'] . "'>" . $cnt['department_name'] . "</option>";
                    }
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Branch Location <span style="color:red;">*</span></label>
                <select class="form-control" name="slcbranch">
                  <option value="">Select</option>
                  <?php
                  if (isset($branch)) {
                    foreach ($branch as $cnt) {
                      print "<option value='" . $cnt['id'] . "'>" . $cnt['branch_name'] . "</option>";
                    }
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Manager <span style="color:red;">*</span></label>
                <input type="text" name="txtmanager" class="form-control" placeholder="Manager">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Employee Code <span style="color:red;">*</span></label>
                <input type="number" name="empcode" class="form-control" placeholder="User Code">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Employee Type <span style="color:red;">*</span></label>
                <select class="form-control" name="slcemptype">
                  <option value="">Select</option>
                  <option value="Permanant">Permanant</option>
                  <option value="Contract">Contract</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Date of Joining</label>
                <input type="date" name="txtdoj" class="form-control" placeholder="Joining Date">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Mobile No. <span style="color:red;">*</span></label>
                <input type="number" name="txtmobile" class="form-control" placeholder="Mobile No">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Email <span style="color:red;">*</span></label>
                <input type="email" name="txtemail" class="form-control" placeholder="someone@mail.com">
              </div>
            </div>
          </div>
          <hr style="border:1.7px solid #00c0ef;margin:5px;">
          <div class="box-header with-border">
            <h3 class="box-title">Add Address </h3>
          </div>
          <div class="box-body">
            <div class="col-md-12">
              <div class="box-header with-border">
                <h3 class="box-title">Home Address</h3>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Street <span style="color:red;">*</span></label>
                  <input type="text" name="txtstreet" class="form-control" placeholder="street">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Street No <span style="color:red;">*</span></label>
                  <input type="text" name="streetno" class="form-control" placeholder="Street No">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Block <span style="color:red;">*</span></label>
                  <input type="text" name="txtblock" class="form-control" placeholder="Block">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Building/Floor/Room/Landmark <span style="color:red;">*</span></label>
                  <textarea class="form-control" name="txtaddress"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Zipcode <span style="color:red;">*</span></label>
                  <input type="number" name="hzipcode" class="form-control" placeholder="Zip Code">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>City <span style="color:red;">*</span></label>
                  <select name="txtcity" class="form-control">
                    <?php
                    if (isset($branch)) {
                      foreach ($branch as $cnt) {
                        print "<option value='" . $cnt['id'] . "'>" . $cnt['branch_name'] . "</option>";
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>State</label>
                  <input type="text" name="txtstate" class="form-control" placeholder="State" value="Maharashtra" readonly>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Country <span style="color:red;">*</span></label>
                  <select class="form-control" name="slccountry">
                    <option value="">Select</option>
                    <?php
                    if (isset($country)) {
                      foreach ($country as $cnt1) {
                        print "<option value='" . $cnt1['country_name'] . "'>" . $cnt1['country_name'] . "</option>";
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box-header with-border">
                <h3 class="box-title">Work Address</h3>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Location Address</label>
                  <select class="form-control" name="locaddress">
                    <option value="">Select</option>
                    <?php
                    if (isset($branch)) {
                      foreach ($branch as $cnt) {
                        print "<option value='" . $cnt['id'] . "'>" . $cnt['branch_name'] . "</option>";
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <hr style="border:1.7px solid #00c0ef;margin:5px;">
          <div class="box-header with-border">
            <h3 class="box-title">Administartion</h3>
          </div>
          <div class="box-body">
            <div class="col-md-3">
              <div class="form-group">
                <label>Shift <span style="color:red;">*</span></label>
                <select class="form-control" name="slcshift">
                  <option value="">Select</option>
                  <option value="Morning">Morning</option>
                  <option value="General">General</option>
                  <option value="Evening">Evening</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Start Date <span style="color:red;">*</span></label>
                <input type="date" name="startdate" class="form-control" placeholder="Start Date">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Status <span style="color:red;">*</span></label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="Active">Active</option>
                  <option value="Deactive">Deactive</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Termination Date</label>
                <input type="date" name="trmdate" class="form-control" placeholder="Start Date">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Termination Reason</label>
                <textarea class="form-control" name="trmreason"></textarea>
              </div>
            </div>
          </div>

          <hr style="border:1.7px solid #00c0ef;margin:5px;">
          <div class="box-header with-border">
            <h3 class="box-title">Personal Information</h3>
          </div>
          <div class="box-body">
            <div class="col-md-6">
              <div class="form-group">
                <label>Gender <span style="color:red;">*</span></label>
                <select class="form-control" name="slcgender">
                  <option value="">Select</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Date of Birth <span style="color:red;">*</span></label>
                <input type="date" name="txtdob" class="form-control" placeholder="DOB">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Marital Status <span style="color:red;">*</span></label>
                <select name="txtmarital" class="form-control">
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>No. of. Children </label>
                <input type="number" name="txtchild" class="form-control" placeholder="No. of. Children">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Adhaar No.<span style="color:red;">*</span></label>
                <input type="number" name="txtadhaarno" class="form-control" placeholder="Adhaar Number">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>PAN Card No.<span style="color:red;">*</span></label>
                <input type="number" name="txtpanno" class="form-control" placeholder="PAN Number">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Father Name <span style="color:red;">*</span></label>
                <input type="text" name="fathername" class="form-control" placeholder="Father Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Citizen <span style="color:red;">*</span></label>
                <input type="text" name="citizen" class="form-control" placeholder="Citizen" value="">
              </div>
            </div>
            <h4 class="box-title">Nominee <span style="color:red;">*</span></h4>
            <div class="col-md-4">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="nominee-name" class="form-control" placeholder="Nominee Name" value="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Relation</label>
                <input type="text" name="relation-nominee" class="form-control" placeholder="Relation With Employee" value="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Emergency Contact</label>
                <input type="number" name="emerno" class="form-control" placeholder="Emergency Number">
              </div>
            </div>
          </div>

          <hr style="border:1.7px solid #00c0ef;margin:5px;">
          <div class="box-header with-border">
            <h3 class="box-title">Finance / Bank Details</h3>
          </div>
          <div class="box-body">
            <div class="col-md-6">
              <div class="form-group">
                <label>Salary <span style="color:red;">*</span></label>
                <select name="txtsalary" class="form-control">
                  <option value="Mumbai">Hourly</option>
                  <option value="Pune">Day</option>
                  <option value="Pune">Weekly</option>
                  <option value="Pune">Monthly</option>
                  <option value="Pune">Yearly</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Bank Name <span style="color:red;">*</span></label>
                <input type="text" name="bankname" class="form-control" placeholder="Bank Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Account No <span style="color:red;">*</span></label>
                <input type="text" name="accno" class="form-control" placeholder="Account No">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>IFSC Code <span style="color:red;">*</span></label>
                <input type="text" name="ifsccode" class="form-control" placeholder="IFSC Code">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>PF Number </label>
                <input type="text" name="pfnum" class="form-control" placeholder="Valid PF Number">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>ESIC Number</label>
                <input type="number" name="esicnum" class="form-control" placeholder="Valid ESIC Number">
              </div>
            </div>
          </div>

          <hr style="border:1.7px solid #00c0ef;margin:5px;">
          <div class="box-header with-border">
            <h3 class="box-title">Attachments / Documents</h3>
          </div>
          <div class="box-body">
            <div class="col-md-4">
              <div class="form-group">
                <label>Aadhar card Photo <span style="color:red;">*</span></label>
                <input class="form-control" id="formFileSm" type="file" name="aadharphoto">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>PAN card Photo <span style="color:red;">*</span></label>
                <input type="file" name="panphoto" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Passport Photo</label>
                <input type="file" name="passphoto" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>SSC Result <span style="color:red;">*</span></label>
                <input type="file" name="sscresult" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>HSC Result <span style="color:red;">*</span></label>
                <input type="file" name="hscresult" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Diploma Result</label>
                <input type="file" name="diploma" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Graduate Result <span style="color:red;">*</span></label>
                <input type="file" name="gresult" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>P.G. Result</label>
                <input type="file" name="pgresult" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Offer Letter <span style="color:red;">*</span></label>
                <input type="file" name="offerletter" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Reliving Letter</label>
                <input type="file" name="rletter" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Experience Letter</label>
                <input type="file" name="expletter" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Other Document</label>
                <input type="file" name="other" class="form-control">
              </div>
            </div>
          </div>

          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success pull-right">Submit</button>
          </div>
          </form>
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