<?php

session_start();
print_r($_SESSION);

require 'db_func.php';

$active_id = $_SESSION['user_id'];


//check if user has project named default or untitled

// $query_untitled = "SELECT username, COUNT(title) as 'untitled' FROM vw_project_owners WHERE title LIKE '%Untitled%' and owner_id = '$active_id'";

$query_untitled = "SELECT MAX(CAST(SUBSTRING(title FROM 10) AS UNSIGNED)) as 'max' FROM project WHERE title LIKE '%Untitled%' and owner_id = '$active_id'";


$untitled = full_query($query_untitled); //result

if($row = mysqli_fetch_assoc($untitled)) {
    print_r($row);

    $untitled = $row["max"] ;
    //insert project
    $project_id = gen_uuid();
    if($untitled == "" || $untitled == null){

       
        insert("project","id,title,owner_id","'$project_id','Untitled','$active_id'");
    }else{
        $untitled = (int)$untitled + 1;
        insert("project","id,title,owner_id","'$project_id','Untitled {$untitled}','$active_id'");

    }


}



// echo $project_id;

//insert land_property
$land_property_id = gen_uuid();
insert("land_property","id","'$land_property_id'");

//insert plans_detail
$plans_detail_id = gen_uuid();
$documents_id = gen_uuid();
insert("plans_details","id,documents","'$plans_detail_id','$documents_id'");

$address_id = gen_uuid();
insert("address","id,type","'$address_id','project'");


sleep(2);
//update project
update("project","`land_property` = '$land_property_id',`plans_details` = '$plans_detail_id', address = '$address_id'","`id` = '$project_id' AND `owner_id` = '$active_id'");

//insert forms
$forms_id = gen_uuid();
insert("forms","id","'$forms_id'");


//insert documents
// $documents_id = gen_uuid();
// insert("documents","id","'$documents_id'");

//insert documents details
// $documents_details_id = gen_uuid();
// insert("document_details","id","'$documents_details_id'");

//update documents
// update("documents","details = '$documents_details_id'","id = '$documents_id'");

//update plans_details
update("plans_details","`form` = '$forms_id'" ,"`id` = '$plans_detail_id'");



//insert forms as part of template

//insert form 1,2,3
$form_architectural = gen_uuid();
insert("f_architectural","`id`","'$form_architectural'");

$form_structural = gen_uuid();
insert("f_structural","`id`","'$form_structural'");

$form_sanitary = gen_uuid();
insert("f_sanitary","`id`","'$form_sanitary'");

$form_electrical = gen_uuid();
insert("f_electrical","`id`","'$form_electrical'");

$form_mechanical = gen_uuid();
insert("f_mechanical","`id`","'$form_mechanical'");

$form_locational = gen_uuid();
insert("f_locational","`id`","'$form_locational'");


//update forms
update("forms","`architectural` = '$form_architectural',`structural` = '$form_structural',`sanitary` = '$form_sanitary',`electrical` = '$form_electrical',`mechanical` = '$form_mechanical',`locational` = '$form_locational'","`id` = '$forms_id'");





// header("Location: ../pages/applicant_openProject.php?project_id=$project_id")


?>