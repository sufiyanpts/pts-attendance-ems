  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php 
              if(isset($leave))
              {
                echo sizeof($leave);
              }
              else{
                echo 0;
              }
              ?></h3>

              <p>Leaves</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-log-out"></i>
            </div>
            
          </div>
          
        </div>

        <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php 
                if(isset($coff))
                {
                  echo sizeof($coff);
                }
                else{
                  echo 0;
                }
                ?></h3>

                <p>COFF Requests</p>
              </div>
              <div class="icon">
                <i class="ionicons ion-log-out"></i>
              </div>
              
            </div>
        </div>

        
        <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php 
                if(isset($attendance))
                {
                  echo sizeof($attendance);
                }
                else{
                  echo 0;
                }
                ?></h3>

                <p>Attendance Requests</p>
              </div>
              <div class="icon">
                <i class="ionicons ion-log-out"></i>
              </div>
              
            </div>
        </div>

        <!-- ./col -->
        <div class="col-xs-6">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Birthdate</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Staff</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    if(isset($birthday)):
                    $i=1; 
                    foreach($birthday as $bth): 
                  ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $bth['staff_name']; ?></td>
                        <td><?= date('d F', strtotime($bth['dob'])); ?></td>
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

        

        <div class="col-xs-6">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Work Anniversery</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Staff</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    if(isset($anniversary)):
                    $i=1; 
                    foreach($anniversary as $anni): 
                  ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $anni['staff_name']; ?></td>
                        <td><?= date('d F', strtotime($anni['doj'])); ?></td>
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

        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Notice</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Date of Notice</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    if(isset($notice)):
                    $i=1; 
                    foreach($notice as $nt): 
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $nt['txtnotice'] ?></td>
                    <td><?php echo $nt['noticedesc'] ?></td>
                    <td><?php echo $nt['dop'] ?></td>
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

        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">HR Policies</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Subject</th>
                    <th>Description</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    if(isset($content)):
                    $i=1; 
                    foreach($content as $cnt): 
                  ?>
                      <!-- <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $cnt['staff_name']; ?></td>
                        <td><img src="<?php echo base_url(); ?>uploads/profile-pic/<?php echo $cnt['pic'] ?>" class="img-circle" width="50px" alt="User Image"></td>
                        <td><?php echo $cnt['department_name']; ?></td>
                        <td><?php echo $cnt['leave_reason']; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($cnt['leave_from'])); ?></td>
                        <td><?php echo date('d-m-Y', strtotime($cnt['leave_to'])); ?></td>
                        <td>
                          <?php if($cnt['status']==0): ?>
                          <span class="label label-info">Pending</span>
                          <?php elseif($cnt['status']==1): ?>
                          <span class="label label-success">Approved</span>
                          <?php elseif($cnt['status']==2): ?>
                          <span class="label label-danger">Rejected</span>
                          <?php endif; ?>
                        </td>
                        <td><?php echo $cnt['description']; ?></td>
                        <td><?php echo date('Y-m-d', strtotime($cnt['applied_on'])); ?></td>
                      </tr> -->
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
      </div>
      <!-- /.row -->

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
