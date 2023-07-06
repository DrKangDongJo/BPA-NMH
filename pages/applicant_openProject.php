<?php
// $page_title = "Project title";
require '../php_func/db_func.php';
session_start();
// get page url
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$project_id = substr($full_url, strpos($full_url, "=") + 1);    
// echo $project_id;
// query
$condition = "id = '$project_id' AND owner_id = '".$_SESSION['user_id']."'";
$open_project = select("project",$condition); //result




?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../bootstrap-5.3.0\css\bootstrap.css">
<link rel="stylesheet" href="../css/general.css">
<link rel="icon" type="image/x-icon" href="../img/Seal_of_Nasugbu.png">

  <?php 

    if($row = mysqli_fetch_assoc($open_project)) {
        $project_title = $row['title'];
        echo "<title>$project_title</title>";
    }


  ?>

  

    <style>
        ul > li{
            list-style: none;
            /* color: black; */
            
        }
        button > li{
            color:black;
            
        }

        #basics_label > *,#basics_input > input{
            display: inline;
            padding:2px;
            margin-left:10px;
        }

        #right_portion{
            height: calc(100vh - 60px);
        }

        .nav-pills .nav-link.active{
            background-color:unset;
        }
        
        .nav-pills .nav-link.active li p{
            background-color:#4074ac;
            border-radius: 10px;
            color:white;
            /* padding:6px; */
        }
    </style>
</head>
<body>
    
<div class="container-fluid p-0" >

    <?php
    require '../components/navbar.php';
    ?>

    

    <!-- <div class="row"></div> -->

    <div class="row m-0" >
    <div  class ="col-3 m-0 p-0" >
        <!-- cointainer -->
        <div style = "width:100%;background-color:#dfdfdf94;display:flex;flex-direction:column;min-height:100%" class ="p-4 m-0">


            <!-- header -->
            <div class = "text-end p-0 m-0"><a href="applicant_home.php">BACK</a> </div>
            
            <!-- main -->
            <div class = "ms-3" name = "main" style="flex-grow:1">
                <ul>
                    
       <?php
       
       $condition = "vw_project_forms_created.project_id = '$project_id'";
      $forms_present = select("vw_project_forms_created","$condition");
      if (mysqli_num_rows($forms_present) > 0) {
       // output data of each row
       if($row = mysqli_fetch_assoc($forms_present)) {
       //   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
       // print_r($row);
       $forms_present = $row['notNull'];
       $forms_present = explode (",", $forms_present); 

       }
     } else {
       echo "0 results";
     }
     


   //   print_r($forms_present);
  


      ?>
                <h5 style= "margin-left:-10%">Requirements</h5>
                <div class="nav flex-column nav-pills align-items-start" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php
               
                      for($i = 0;$i<count($forms_present);$i++){
                        $column = trim(ucwords($forms_present[$i]));
                       if($i == 0){
                        echo '<button class="nav-link active" id="v-pills-'.$column.'-tab" data-bs-toggle="pill" data-bs-target="#v-pills-'.$column.'" type="button" role="tab" aria-controls="v-pills-'.$column.'" aria-selected="true">
                        <li class = ""><span><input type="checkbox" name="" id=""  class = "me-2"></span><p class= "d-inline p-2">'.$column.'</p></li>
                        </button>';
                       }else{
                        echo '<button class="nav-link " id="v-pills-'.$column.'-tab" data-bs-toggle="pill" data-bs-target="#v-pills-'.$column.'" type="button" role="tab" aria-controls="v-pills-'.$column.'" aria-selected="true">
                        <li class = ""><span><input type="checkbox" name="" id=""  class = "me-2"></span><p class= "d-inline p-2">'.$column.'</p></li>
                        </button>';
                       } 
                      }

                 ?>
                  
                </div>
                
                </ul>
                
             
            </div>

            <div id="footer">
            <button>Add Form</button>


                <h5 class = "text-end">Project 0% Complete</h5>
                <div class="row">
                    <div class="col-3">FAQ</div>
                    <div class="col text-end">
                        <button type="" class = "btn my-btn-blue white-text" style = "font-size:small">SUBMIT FOR REVIEW</button>
                    </div>
                </div>

            </div>
            

        </div>

    </div>


    <div class="col m-0 p-0" style ="position:static;overflow-y:scroll" id = "right_portion">
        <!-- form -->
        <div class="d-flex align-items-end">
            <div class="tab-content" id="v-pills-tabContent">

<?php


for($i = 0;$i<count($forms_present);$i++){
    $column = trim(ucwords($forms_present[$i]));

    if($column == "Architectural"){
        $require ="../components/form_architectural.php";
    }elseif($column == "Structural"){
        $require ="../components/form_structural.php";
    }elseif($column == "Sanitary_plumbing"){
        $require ="../components/form_sanitary_plumbing.php";
    }elseif($column == "Electrical"){
        $require ="../components/form_electrical.php";
    }elseif($column == "Mechanical"){
        $require ="../components/form_mechanical.php";
    }elseif($column == "Locational"){
        $require ="../components/form_locational.php";
    }elseif($column == "Fsec"){
        $require ="../components/form_fsec.php";
    }
    
    if($i == 0){
        echo'<div class="tab-pane fade active show" id="v-pills-'.$column.'" role="tabpanel" aria-labelledby="v-pills-'.$column.'-tab" tabindex="0">';
        require "$require";
        echo '</div>';
    }else{
        echo'<div class="tab-pane fade " id="v-pills-'.$column.'" role="tabpanel" aria-labelledby="v-pills-'.$column.'-tab" tabindex="0">';
        require "$require"; 
        echo '</div>';
    }
   } 
  

?>
            
            </div>
        </div>





    </div>

    </div> 
    


</div>




<script src="../bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
<script src="../dependecies/jquery-3.6.4.js"></script>
<script>


<?php
// if

?>

$("#nav_center_section").append('<div class="text-center" id ="project_title"><input class="clear-input text-center white-text" type="text" name="" id="inp_project_name" onchange = "update_title()" value="<?php echo $project_title;?>"></div>')
$("#nav_center_section").addClass("m-auto")
// add script for saving project name before editing
// incase user doesn't input replacement or left blank
function update_title(){
   
    // get project title and page
    var project_title = $("#inp_project_name")[0];
    var page_title = $("head > title")[0];

    // if left empty, set to UNtitled
    if(project_title.value == "" || project_title.value == null){
        // project_title = "Untitled";
        project_title.value = "Untitled";
        page_title.text = "Untitled";

    }else{
        //reflect page title
        page_title.text = project_title.value
    }

    //update value in db
    $.ajax({
        url: "../php_func/db_func.php",
        type: "POST",
        cache: false,
        async : true,
        data : {"action" : "update",
            "table" : "project",
            "to_update" : "`title` = '" + project_title.value +"'",
            "condition" : "`id` = '<?php echo "$project_id"?>'"
        
        },
        success: function(dataResult){
            console.log(dataResult);
            
        }
    });

}



</script>
</body>
</html>