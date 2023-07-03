<?php
$page_title = "Home | Applicant | BPA";
session_start();
// print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('../php_func/header_temp.php')?>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <?php
        require '../components/navbar.php';
        ?>

    </div>

    <?php 
      $condition = "vw_project_owners.username = '". $_SESSION['username']."'";
      $project = select("vw_project_owners",$condition);

    //check if there are result
if (mysqli_num_rows($project) > 0) {   

  ?>
  
  <!-- with project -->

  <div id="with_saved_project" class ="p-4" >
    <div class="row">
        Recent Projects
    </div>
    <div class="row ms-4">

    <?php


while($row = mysqli_fetch_assoc($project)) {
    // echo "Name: " . $row["username"]. " " . $row["title"]. "<br>";
  echo '<div style = "width:245px;height:180px;border:1px solid black;" class="d-flex-inline m-2">
  <a href="applicant_openProject.php?project_id='.$row['id'].'">
  <div style = "height:80%;border-bottom:1px solid black;"></div>
  <p class="text-center" id = "'.$row['id'].'">'.$row['title'].'</p> 
  </a>
</div>';

  }
echo '
</div>
</div>
<button type="button" class = "btn my-btn-blue mx-auto white-text" style="width:auto"
data-bs-toggle="modal" data-bs-target="#project_template_select_modal">CREATE PROJECT</button>
';
  
} else {
    //else return no data
    // echo "0 results";

    // <!-- ** empty -->
    echo '<div id = "first_time_use" class="row text-center" style="margin:2%">
        <p class ="m-2">No recent or saved Projects found.</p>
        <p  class ="m-2">Create and add one now.</p>
        <button type="button" class = "btn my-btn-blue mx-auto white-text" style="width:auto"
        data-bs-toggle="modal" data-bs-target="#project_template_select_modal">CREATE PROJECT</button>
    </div>';

  }
  ?>
 





<!-- **! MODAL -->

<!-- Modal -->
<div class="modal fade" id="project_template_select_modal" tabindex="-1" aria-labelledby="project_template_select_modal_Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="project_template_select_modal_Label">Project Templates</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div style = "width:200px;aspect-ratio:1/1;border:1px solid black;">

            <div style = "height:80%;border-bottom:1px solid black;"></div>
           
           <a href="../php_func/new_project.php">
            <p class="text-center">BUILDING PERMIT APPLICATION</p>
            </a>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn my-btn-red" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>








<script src="../bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
<script src="../dependecies/jquery-3.6.4.js"></script>
<script>






</script>

</body>
</html>