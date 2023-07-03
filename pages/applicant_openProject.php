<?php
// $page_title = "Project title";
require '../php_func/db_func.php';
session_start();
// get page url
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$project_id = substr($full_url, strpos($full_url, "=") + 1);    
echo $project_id;
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
                <h5>Requirements</h5>
                <ul>

                <div class="nav flex-column nav-pills align-items-start" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link " id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <li class = ""><span><input type="checkbox" name="" id=""  class = "me-2"></span>Unified Application Form
                    
                </li>

                </button>
                    <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Sanitary plumbing</li>
                    </button>
                    <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">
                    <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Electrical</li>
                    </button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                       
                    <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Form 4</li>
                    </button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        
                    <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Form 5</li>
                    </button>
                </div>
                
                </ul>
                <hr class="mx-4">
                <h5>Additional Requirements(if needed)</h5>
                <ul>
                    <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Form 1</li>
                    <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Form 2</li>
                    
  

                </ul>
            </div>

            <div id="footer">
            <button>Add Form</button>


                <h5 class = "text-end">Project 2% Complete</h5>
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
    <div class="tab-pane fade " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
    
        <?php require "../components/form_unified.php"?>
        
    </div>
    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
    <?php require "../components/sanitary_form.php"?>
       
    

    </div>
    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
    <?php require "../components/electrical.php"?>
    
  
    </div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">4...</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">5...</div>
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

$("#nav_center_section").append('<div class="text-center" id ="project_title"><input class="clear-input text-center white-text" type="text" name="" id="inp_project_name" oninput = "update_title()" value="<?php echo $project_title;?>"></div>')
$("#nav_center_section").addClass("m-auto")
// add script for saving project name before editing
// incase user doesn't input replacement or left blank
function update_title(){
    //get id
    $("head > title")[0].text = $("#inp_project_name")[0].value;


    $.ajax({
        url: "../php_func/db_func.php",
        type: "POST",
        cache: false,
        async : true,
        data : {"action" : "update",
            "table" : "project",
            "to_update" : "title = '" + $("head > title")[0].text+"'",
            "condition" : "id = '<?php echo "$project_id"?>'"
        
        },
        success: function(dataResult){
            console.log(dataResult);
            
        }
    });

}



</script>
</body>
</html>