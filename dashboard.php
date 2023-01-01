<?php
session_start();
include '../connection.php';
$id = $_SESSION['id'];
if(empty($id))
{
    header("Location: index.php"); 
}

$select_employee = mysqli_query($conn,"select count(*) from lecturers where status=0");
$total_emp = mysqli_fetch_row($select_employee);

$work_employee = mysqli_query($conn,"select count(*) from user_work_report");
$total_work_emp = mysqli_fetch_row($work_employee);

$Announcements = mysqli_query($conn,"select count(*) from announcement_details where status=0");
$Total_announcements = mysqli_fetch_row($Announcemets);

?>
<?php include('include/header.php'); ?>

  <div id="wrapper">

    <?php include('include/side_bar.php'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          
        </ol>
<div class="row">
  <div class="col-sm-4">
    <section class="panel panel-featured-left panel-featured-primary">
      <div class="panel-body">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
              <i class="fa fa-user"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h4 class="title">Total Employee</h4>
              <div class="info">
                <strong class="amount"><?php echo $total_emp[0]; ?></strong><br>
                 
              </div>
            </div>
            <div class="summary-footer">
              <a class="text-muted text-uppercase"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="col-sm-4">
    <section class="panel panel-featured-left panel-featured-primary">
      <div class="panel-body">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
              <i class="fa fa-inbox"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h4 class="title">Work Details</h4>
              <div class="info">
                <strong class="amount"><?php if(!empty($total_work_emp[0])){ echo $total_work_emp[0]; } else { echo 0; } ?></strong><br>
                 
              </div>
            </div>
            <div class="summary-footer">
              <a class="text-muted text-uppercase"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="col-sm-4">
    <section class="panel panel-featured-left panel-featured-primary">
      <div class="panel-body">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
              <i class="fa fa-calendar-o"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h4 class="title">Total Announcements</h4>
              <div class="info">
                <strong class="announcement"><?php echo $Announcements[0]; ?></strong><br>
                 
              </div>
            </div>
            <div class="summary-footer">
              <a class="text-muted text-uppercase"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<div class="col-sm-4">
    <section class="panel panel-featured-left panel-featured-primary">
      <div class="panel-body">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
              <i class="fa fa-calendar-o"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h4 class="title">Add Announcements</h4>
              <div class="info">
                <div class="col-sm-4">
    <section class="panel panel-featured-left panel-featured-primary">
      <div class="panel-body">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
              <i class="fa fa-calendar-o"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h4 class="title">Announcements</h4>
              <div class="info">
                <form action="/post.php">
  <input type="file" id="myFile" name="filename">
<select class="form-control" id="department" name="department" >
                                                    <option value="">Select Department</option>
                                                    <option  value="All">All</option>
                                                    <option  value="School of humanities">School of humanities</option>
                                                    <option  value="Business school">Business school</option>
                                                    <option  value="Law School">Law School</option>
                                                    <option  value="School of Computing">School of Computing</option>
                                                                                                        
                                                </select>
  <input type="submit" value="send"/>
</form>
                 
              </div>
            </div>
            <div class="summary-footer">
              <a class="text-muted text-uppercase"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
                 
              </div>
            </div>
            <div class="summary-footer">
              <a class="text-muted text-uppercase"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 </div>
</div>
</div>
</div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <?php include('include/footer.php'); ?>
