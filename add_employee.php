<?php
session_start();
include ('../connection.php');
$id = $_SESSION['id'];
if(empty($id))
{
    header("Location: index.php"); 
}
if(isset($_REQUEST['sbt-lv-btn']))
{
   
	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $ad_department = $_POST['ad_department'];
    $staff_id = $_POST['staff_id'];
   

    $insert_employee = mysqli_query($conn,"insert into staff_members set first_name='$first_name', last_name='$last_name', ad_department='$ad_department', staff_id='$staff_id'");

    if($insert_employee > 0)
    {
        ?>
<script type="text/javascript">
    alert("Employee added successfully.")
</script>
<?php
}
}
?>
<?php include('include/header.php'); ?>
<div id="wrapper">
<?php include('include/side_bar.php'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="add_employee.php">Add Employee</a>
          </li>
          
        </ol>

  <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            Submit Employee Details</div>
             
            <form method="post" class="form-valide">
          <div class="card-body">
                                      
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="remarks">First Name <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" >
                                       </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="remarks">Last Name <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter last Name" >
                                       </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="remarks">EmailId <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="text" name="staff_id" id="staff_id" class="form-control" placeholder="Enter Staff Id" >
                                       </div>
                                  </div>
                                
                                      <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="ad_department">Department <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="department" name="department" >
                                                    <option value="">Select Department</option>
                                                    <option  value="School of Humanities">School of Humanities</option>
                                                    <option  value="Business school">Business school</option>
                                                    <option  value="Law school">Law school</option>
                                                    <option  value="School of Computing">School of computing</option>
                                                                                                        
                                                </select>
                                            </div>
                                        </div>
                                      
                           
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="sbt-lv-btn" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    
                                </div>
                                </form>
                            </div>
                        
    </div>
         
        </div>
     
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
 
 <?php include('include/footer.php'); ?>