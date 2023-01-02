<?php 
include('../connection.php');
include('include/header.php'); ?>

  <div id="wrapper">

    <?php include('include/side_bar.php'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

     <div class="card mb-3">
          <div class="card-header">
              <div class="tab ">
    
  <button class="tablinks" onclick="openCity(event, 'Details')" id="OpenCal"> <i class="fas fa-table"></i> View Details</button>
</div>
            
</div>    

<div id="Details" class="tabcontent">
  <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                            <tr>
                                                <th>SI. NO.</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Date</th>
                                                <th>Work Done</th>
                        
                                                </tr>
                                        </thead>
                                        <tbody>
                    <?php
                    $i=1;
                    $select_query = mysqli_query( $conn, "select staff_work_report.*, concat(lecturers.first_name,' ',lecturers.last_name) as fullname, lecturers.ad_department from staff_work_report inner join lecturers on lecturers.lec_id=staff_work_report.staff_id");
                    while($row = mysqli_fetch_array($select_query))
                    {
                      $date = $row['date'];
                      $workdone = $row['workdone'];
                  
                      
                    ?>
                                            <tr>
                                                <td><?php echo $id; ?></td>
                                                <td><?php echo $row['fullname'];?></td>
                                                <td><?php echo $row['ad_department']; ?></td>
                                                <td><?php echo $date;?></td>
                                                <td><?php echo $workdone;?></td>
                                              
                                                </tr>
                    <?php $i++; } ?>
                                           
                                           
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    
      
      </div>
      <!-- /.container-fluid -->


    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<?php include('include/footer.php'); ?>
   <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="OpenCal" and click on it
document.getElementById("OpenCal").click();
</script>

    
   
