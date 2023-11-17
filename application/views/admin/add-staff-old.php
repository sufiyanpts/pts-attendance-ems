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

        <!-- column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Staff Master</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open_multipart('Staff/insert');?>
              <div class="box-body">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" name="mname" class="form-control" placeholder="Middle Name">
                  </div>
                </div> 
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="Last Name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Job Title</label>
                    <input type="text" name="jobtitle" class="form-control" placeholder="Job Title">
                  </div>
                </div>                                                 
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Position</label>
                    <select class="form-control" name="slcposition">
                      <option value="">Select</option>
                      <option value="Staff">Staff</option>
                      <option value="Out Source">Out Source</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Department</label>
                    <select class="form-control" name="slcdepartment">
                      <option value="">Select</option>
                      <?php
                      if(isset($department))
                      {
                        foreach($department as $cnt)
                        {
                          print "<option value='".$cnt['id']."'>".$cnt['department_name']."</option>";
                        }
                      } 
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Branch</label>
                    <select class="form-control" name="slcbranch">
                      <option value="">Select</option>
                      <?php
                      if(isset($branch))
                      {
                        foreach($branch as $cnt)
                        {
                          print "<option value='".$cnt['id']."'>".$cnt['branch_name']."</option>";
                        }
                      } 
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Manager</label>
                    <input type="text" name="txtmanager" class="form-control" placeholder="Manager">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>User Code</label>
                    <input type="number" name="usrcode" class="form-control" placeholder="User Code">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Employee Type</label>
                    <select class="form-control" name="slcemptype">
                      <option value="">Select</option>
                      <option value="Permanant">Permanant</option>
                      <option value="Contract">Contract</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Employee No</label>
                    <input type="number" name="empno" class="form-control" placeholder="Employee No">
                  </div>
                </div> 
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Ext. Employee No</label>
                    <input type="text" name="exempno" class="form-control" placeholder="Ext. Employee No">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Date of Joining</label>
                    <input type="date" name="txtdoj" class="form-control" placeholder="DOJ">
                  </div>
                </div>                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>STD Code</label>
                    <input type="number" name="stdcode" class="form-control" placeholder="STD Code">
                  </div>
                </div> 
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Office Phone</label>
                    <input type="text" name="officephone" class="form-control" placeholder="Office Phone">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Mobile No</label>
                    <input type="text" name="txtmobile" class="form-control" placeholder="Mobile No">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="txtemail" class="form-control" placeholder="Email">
                  </div>
                </div>                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Pager</label>
                    <input type="text" name="txtpager" class="form-control" placeholder="Pager">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Home Phone</label>
                    <input type="text" name="homephone" class="form-control" placeholder="Home Phone">
                  </div>
                </div>                                                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Fax</label>
                    <input type="text" name="txtfax" class="form-control" placeholder="Fax">
                  </div>
                </div>

              </div>
                <hr style="border:1.7px solid #00c0ef;margin:5px;">
              <div class="box-header with-border">
                <h3 class="box-title">Add Address</h3>
              </div>
              <div class="box-body">
                <div class="col-md-6">
              <div class="box-header with-border">
                <h3 class="box-title">Work Address</h3>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Street</label>
                  <input type="text" name="txtstreet" class="form-control" placeholder="street">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>Street No</label>
                  <input type="text" name="streetno" class="form-control" placeholder="Street No">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>Block</label>
                  <input type="text" name="txtblock" class="form-control" placeholder="Block">
                </div>
              </div>                                                            

              <div class="col-md-12">
                <div class="form-group">
                  <label>Building/Floor/Room/Landmark</label>
                  <textarea class="form-control" name="txtaddress"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Zipcode</label>
                  <input type="text" name="zipcode" class="form-control" placeholder="Zip Code">
                </div>
              </div>  
              <div class="col-md-12">
                <div class="form-group">
                  <label>City</label>
                    <select name="txtcity" class="form-control">
                        <option value="Mumbai">Mumbai</option>
                        <option value="Pune">Pune</option>
                    </select>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>State</label>
                  <input type="text" name="txtstate" class="form-control" placeholder="State" value="Maharashtra" readonly>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>Country</label>
                  <select class="form-control" name="slccountry">
                    <option value="">Select</option>
                    <?php
                      if(isset($country))
                      {
                        foreach ($country as $cnt1)
                        {
                          print "<option value='".$cnt1['country_name']."'>".$cnt1['country_name']."</option>";
                        }
                      }
                    ?>
                  </select>
                </div>
              </div>                  
                </div>
                <div class="col-md-6">
              <div class="box-header with-border">
                <h3 class="box-title">Home Address</h3>
              </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Street</label>
                    <input type="text" name="txtstreet" class="form-control" placeholder="street">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label>Street No</label>
                    <input type="text" name="streetno" class="form-control" placeholder="Street No">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label>Block</label>
                    <input type="text" name="txtblock" class="form-control" placeholder="Block">
                  </div>
                </div>                                                            

                <div class="col-md-12">
                  <div class="form-group">
                    <label>Building/Floor/Room/Landmark</label>
                    <textarea class="form-control" name="txtaddress"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Zipcode</label>
                    <input type="text" name="hzipcode" class="form-control" placeholder="Zip Code">
                  </div>
                </div>  
                <div class="col-md-12">
                  <div class="form-group">
                    <label>City</label>
                      <select name="txtcity" class="form-control">
                          <option value="Mumbai">Mumbai</option>
                          <option value="Pune">Pune</option>
                      </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label>State</label>
                    <input type="text" name="txtstate" class="form-control" placeholder="State" value="Maharashtra" readonly>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label>Country</label>
                    <select class="form-control" name="slccountry">
                      <option value="">Select</option>
                      <?php
                        if(isset($country))
                        {
                          foreach ($country as $cnt1)
                          {
                            print "<option value='".$cnt1['country_name']."'>".$cnt1['country_name']."</option>";
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
                    <label>Shift</label>
                    <select class="form-control" name="slcgender">
                      <option value="">Select</option>
                      <option value="Morning">Morning</option>
                      <option value="General">General</option>
                      <option value="Evening">Evening</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Start Date</label>
                    <input type="date" name="startdate" class="form-control" placeholder="Start Date">
                  </div>
                </div>  
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="slcgender">
                      <option value="">Select</option>
                      <option value="Active">Active</option>
                      <option value="Deactive">Deactive</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Termination Date</label>
                    <input type="date" name="startdate" class="form-control" placeholder="Start Date">
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
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" name="slcgender">
                      <option value="">Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="txtdob" class="form-control" placeholder="DOB">
                  </div>
                </div> 
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Country Birth Place</label>
                    <select class="form-control" name="slccountry">
                      <option value="">Select</option>
                      <?php
                        if(isset($country))
                        {
                          foreach ($country as $cnt1)
                          {
                            print "<option value='".$cnt1['country_name']."'>".$cnt1['country_name']."</option>";
                          }
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Marital Status</label>
                      <select name="txtmarital" class="form-control">
                          <option value="Single">Single</option>
                          <option value="Double">Double</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>No. of. Children </label>
                    <input type="text" name="txtchild" class="form-control" placeholder="No. of. Children">
                  </div>
                </div>                                                                 
                <div class="col-md-4">
                  <div class="form-group">
                    <label>ID No.</label>
                    <input type="text" name="txtidno" class="form-control" placeholder="ID No.">
                  </div>
                </div>    
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Father Name</label>
                    <input type="text" name="fathername" class="form-control" placeholder="Father Name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Citizenship</label>
                    <input type="text" name="citizenship" class="form-control" placeholder="Citizenship" value="" >
                  </div>
                </div>


                <div class="col-md-4">
                  <div class="form-group">
                    <label>Passport No.</label>
                    <input type="text" name="passno" class="form-control" placeholder="Passport No.">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Passport Exp. Date</label>
                    <input type="date" name="passexpdate" class="form-control" placeholder="Passport Exp. Date">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Passport Issue Date</label>
                    <input type="date" name="passexpdate" class="form-control" placeholder="Passport Exp. Date">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Passport Issuer</label>
                    <input type="text" name="fathername" class="form-control" placeholder="Passport Issuer">
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
                    <label>Salary</label>
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
                    <label>Bank Name</label>
                    <input type="text" name="bankname" class="form-control" placeholder="Bank Name">
                  </div>
                </div>                
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Account No</label>
                    <input type="text" name="accno" class="form-control" placeholder="Account No">
                  </div>
                </div> 
                <div class="col-md-6">
                  <div class="form-group">
                    <label>IFSC Code</label>
                    <input type="text" name="ifsccode" class="form-control" placeholder="IFSC Code">
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
                    <label>Aadhar card Photo</label>
                    <input type="file" name="aadharphoto" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>PAN card Photo</label>
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
                    <label>SSC Result</label>
                    <input type="file" name="sscresult" class="form-control">
                  </div>
                </div> 
                <div class="col-md-4">
                  <div class="form-group">
                    <label>HSC Result</label>
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
                    <label>Graduate Result</label>
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
                    <label>Offer Letter</label>
                    <input type="file" name="Offerletter" class="form-control">
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
                    <input type="file" name="otherletter" class="form-control">
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