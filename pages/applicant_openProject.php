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
                <!-- forms present in the project -->
              
                <h5 style= "margin-left:-10%">FORMS</h5>
                <div class="nav flex-column nav-pills align-items-start" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php
               
                        for($i = 5; $i < count($form_columns); $i++){
                            if($form_values[$i] != "" || $form_values[$i] != null){
                                // $form_values = ucwords($form_values[$i]);
                                if($i == 5){
                                    echo '<button class="nav-link active" id="v-pills-'.ucwords($form_columns[$i]).'-tab" data-bs-toggle="pill" data-bs-target="#v-pills-'.ucwords($form_columns[$i]).'" type="button" role="tab" aria-controls="v-pills-'.$form_columns[$i].'" aria-selected="true">
                                    <li class = ""><span><input type="checkbox" class = "me-2"></span><p class= "d-inline p-2">'.ucwords($form_columns[$i]).'</p></li>
                                    </button>';
                                }else{
                                echo '<button class="nav-link " id="v-pills-'.ucwords($form_columns[$i]).'-tab" data-bs-toggle="pill" data-bs-target="#v-pills-'.ucwords($form_columns[$i]).'" type="button" role="tab" aria-controls="v-pills-'.$form_columns[$i].'" aria-selected="true">
                                <li class = ""><span><input type="checkbox" class = "me-2"></span><p class= "d-inline p-2">'.ucwords($form_columns[$i]).'</p></li>
                                </button>';
                                }
                            }
                        }
                 ?>
                  
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
        <table class = "table table-responsive table-bordered table-striped">
            <thead>
                <td>Form</td>
                <td>Completion %</td>
                <td>Operation</td> <!--delete, lock, hide-->
            </thead>
     
                   
            <?php
                for($i = 5; $i < count($form_columns); $i++){
                    if($form_values[$i] != "" || $form_values[$i] != null){

          ?>
            <tr>
              

                <td><?php echo ucwords($form_columns[$i])?></td>
                <td><?php echo rand(0,100)?>% Complete</td>
                <td class="d-flex justify-content-center">
                    <ul class="d-inline-flex m-auto p-0" id= "<?php echo $form_values[$i]?>">
                        <button class = "btn btn-outline-info"><span></span>hide</button>
                        <button class="btn progress-bar-animated"><span></span>lock</button>
                        <button class = "btn my-btn-red" id = "del_btn_<?php echo $form_values[$i]?>"
                        table = "f_<?php echo ucwords($form_columns[$i])?>"
                        onclick="delete_form(this.id,this.table)">delete</button>
                    </ul>

                </td>


            </tr>
            <?php
        }
    }
    ?>
            
            

  
        </table>

<div id = "form_additon">
    <?php


echo '<select name="" id="sel_add_form">';
for($i = 5; $i < count($form_columns); $i++){
    if($form_values[$i] == "" || $form_values[$i] == null){


        echo '<option value="'.ucwords($form_columns[$i]).'">'.ucwords($form_columns[$i]).'</option>';
    }
}

echo '</select>';

    ?>
  
  <button class = "btn my-btn-blue" onclick="add_form()">ADD FORM</button>
  </div>
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
        <!-- form -->
        <div class="d-flex align-items-end">
            <div class="tab-content" id="v-pills-tabContent">

<?php

for($i = 5; $i < count($form_columns); $i++){
    if($form_values[$i] != "" || $form_values[$i] != null){

        $require = "../components/form_"."$form_columns[$i]".".php";
        if($i == 5){
           echo'<div class="tab-pane fade active show" id="v-pills-'.ucwords($form_columns[$i]).'" role="tabpanel" aria-labelledby="v-pills-'.ucwords($form_columns[$i]).'-tab" tabindex="0">';
           require "$require";
           echo '</div>';
        }else{
            echo'<div class="tab-pane fade" id="v-pills-'.ucwords($form_columns[$i]).'" role="tabpanel" aria-labelledby="v-pills-'.ucwords($form_columns[$i]).'-tab" tabindex="0">';
            require "$require";
            echo '</div>';
        }
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