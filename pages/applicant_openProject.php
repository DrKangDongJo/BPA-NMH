<?php
require '../php_func/db_func.php';
session_start(); //start session


$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // get page url
$project_id = substr($full_url, strpos($full_url, "=") + 1);    
// echo $project_id . "-----";
// echo $_SESSION['user_id'];

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
    $condition = "project_id = '$project_id' AND owner_id = '".$_SESSION['user_id']."' ";
    $open_project = select("vw_project_forms",$condition); //result
    // echo $condition;

    //initialize storage also for tracking
    $form_columns = array();
    $form_values = array();

    //loop through result to get column names
    for($i = 0; $i < mysqli_num_fields($open_project); $i++) {
        $field_info = mysqli_fetch_field($open_project);
        array_push($form_columns,$field_info->name); //append to storage
    }
    
    //loop through result to get values
   if($row = mysqli_fetch_assoc($open_project)) {
    foreach($row as $_column) {
    array_push($form_values,$_column); //append to storage
    }
    $project_title = ucwords($row['title']); //get project title
    $forms_id = $row['form_id']; //forms id
    echo "<title>{$project_title}</title>";  //display tab title
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

        button.nav-link{
            color:black;
        }
        .nav-pills .nav-link.active{
            background-color:unset;
        }
        
        .nav-pills .nav-link.active{
            background-color:#4074ac;
            border-radius: 10px;
            color:white;
            /* padding:6px; */
        }
    </style>
</head>
<body>
    
<div class="container-fluid p-0" >

    <?php require '../components/navbar.php'; //include navbar?> 

    <div class="row m-0" >
        <!-- checklist -->
    <div  class ="col-3 m-0 p-0">
        <!-- cointainer -->
        <div style = "width:100%;background-color:#dfdfdf94;display:flex;flex-direction:column;min-height:100%" class ="p-4 m-0">

            <!-- header -->
            <div class = "text-end p-0 m-0"><a href="applicant_home.php">BACK</a> </div>
            <!-- main -->
            <div class = "ms-3" name = "main" style="flex-grow:1">
                <ul>
                

                <div class="accordion" id="accordionExample" style= "margin-left:-10%">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        FORMS
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" role="tablist" aria-orientation="vertical" id = "form_nav">
                                <button class="nav-link active" id="v-pills-sanitary_" data-bs-toggle="pill" data-bs-target="#v-pills-cont-sanitary_" 
                                type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Sanitary</button>

                                <button class="nav-link" id="v-pills-electrical_" data-bs-toggle="pill" data-bs-target="#v-pills-cont-electrical_" 
                                type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Electrical</button>

                                <button class="nav-link" id="v-pills-locational_" data-bs-toggle="pill" data-bs-target="#v-pills-cont-locational_" 
                                type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Locational</button>

                                <button class="nav-link" id="v-pills-unified_" data-bs-toggle="pill" data-bs-target="#v-pills-cont-unified_" 
                                type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Unified</button>
                               
                            </div>
                           
                    </div>


                    </div>
                    </div>
                </div>
                <div class="accordion-item" hidden>
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        DOCUMENTS
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample" >
                    <div class="accordion-body">
                    <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                                <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                            </div>
                            
                    </div>

                    </div>
                    </div>
                </div>
                
                </div>

                </ul>
                
             
            </div>

            <div id="footer">
            <!-- <button>Add Form</button> -->       
            <?php 
            
                $bs_target = "edit_form";
                $button_text = "Edit forms";
                $modal_title = "EDIT FORMS";

            ?>

    <button type="button" class = "btn my-btn-blue mx-auto white-text" style="width:auto"
            data-bs-toggle="modal" data-bs-target="#<?php echo $bs_target?>"><?php echo $button_text?></button>
    <!-- Modal -->
    <div class="modal fade " id="<?php echo $bs_target?>" tabindex="-1" aria-labelledby="<?php echo $bs_target?>_Label" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="<?php echo $bs_target?>_Label"><?php echo $modal_title?></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ">
            
          <div id="" style = "width: 600px;">
    <div class="header">
        <h5>PROJECT TITLE</h5>
    </div>
    <div class="body">
          
            



    </div>

    <div class="footer"></div>
</div>
    
          </div>
          <div class="modal-footer">
            <button type="button" class="btn my-btn-red" data-bs-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

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


    <!-- right portion/forms selected -->

    <div class="col m-0 p-0" style ="position:static;overflow-y:scroll" id = "right_portion">
                 <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-cont-sanitary_" role="tabpanel" 
                    aria-labelledby="v-pills-sanitary_" tabindex="0">Sanitary
                
                    <?php
                    require '../components\form_sanitary.php';
                    ?>
                
                </div>

                    <div class="tab-pane fade" id="v-pills-cont-electrical_" role="tabpanel" 
                    aria-labelledby="v-pills-electrical_" tabindex="0">Electrical
                    <?php
                    require '../components\form_electrical.php';
                    ?>
                </div>

                    <div class="tab-pane fade" id="v-pills-cont-locational_" role="tabpanel" 
                    aria-labelledby="v-pills-locational_" tabindex="0">Locational</div>

                    <div class="tab-pane fade" id="v-pills-cont-unified_" role="tabpanel" 
                    aria-labelledby="v-pills-unified_" tabindex="0">Unified</div>
                  
                    <!-- <div class="tab-pane fade" id="v-pills-home2" role="tabpanel" aria-labelledby="v-pills-home-tab2" tabindex="0">1</div>
                    <div class="tab-pane fade" id="v-pills-profile2" role="tabpanel" aria-labelledby="v-pills-profile-tab2" tabindex="0">...2</div>
                    <div class="tab-pane fade" id="v-pills-disabled2" role="tabpanel" aria-labelledby="v-pills-disabled-tab2" tabindex="0">...3</div>
                    <div class="tab-pane fade" id="v-pills-messages2" role="tabpanel" aria-labelledby="v-pills-messages-tab2" tabindex="0">...4</div>
                    <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings-tab2" tabindex="0">...5</div> -->
                </div>
    </div>
    </div> 
</div>


<script src="../bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
<script src="../dependecies/jquery-3.6.4.js"></script>
<script>


// add center project name
$("#nav_center_section").append('<div class="text-center" id ="project_title"><input class="clear-input text-center white-text" type="text" name="" id="inp_project_name" onchange = "update_title()" value="<?php echo $project_title;?>"></div>')
$("#nav_center_section").addClass("m-auto");

if($("#sel_add_form").children().length == 0){
    $("#sel_add_form").parent().attr("hidden","hidden") // hide div form additon
}


//updating title
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
        page_title.text = project_title.value;

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

function add_form(){

    //get selected value of dropdown
    var selected = $("#sel_add_form  option:selected")[0].value;   
    var table = "f_"+selected.toLowerCase();
    //insert new form
    //update form tables

    <?php $form_id = gen_uuid();?>


    $.ajax({
        url: "../php_func/db_func.php",
        type: "POST",
        cache: false,
        async : true,
        data : {"action" : "insert",
            "table" : table,
            "column" : "id",
            "value" : "'<?php echo $form_id;?>'"
       
        },
        success: function(dataResult){
            console.log(dataResult);
           
        }
    });

    //update
    $.ajax({
        url: "../php_func/db_func.php",
        type: "POST",
        cache: false,
        async : true,
        data : {"action" : "update",
            "table" : "forms",
            "to_update" : "`"+table.replace("f_","") +"` = '<?php echo $form_id?>'",
            "condition" : "`id` = '<?php echo $forms_id?>'"
        
        },
        success: function(dataResult){
            console.log(dataResult);
            
        }
    });

 location.reload();
 sleep(1.2);

}

function delete_form(id){

    var table = $('#'+id).attr("table");
console.log(id);
console.log(table)



//update on forms

$.ajax({
        url: "../php_func/db_func.php",
        type: "POST",
        cache: false,
        async : true,
        data : {"action" : "update",
            "table" : "forms",
            "to_update" : "`"+table.replace("f_","")+"` = NULL",
            "condition" : "`id` = '<?php echo $forms_id?>'"
       
        },
        success: function(dataResult){
            console.log(dataResult);
           
        }
    });
//delete on table

$.ajax({
        url: "../php_func/db_func.php",
        type: "POST",
        cache: false,
        async : true,
        data : {"action" : "delete",
            "table" : table,
            "condition" : "`id` = '" + id.replace("del_btn_","")+"'",
           
       
        },
        success: function(dataResult){
            console.log(dataResult);
           
        }
    });

 location.reload();
 sleep(1.2);


}



</script>
</body>
</html>