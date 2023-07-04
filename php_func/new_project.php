<?php

session_start();
print_r($_SESSION);

require 'db_func.php';

$active_id = $_SESSION['user_id'];
//insert project
$project_id = gen_uuid();
insert("project","id,title,owner_id","'$project_id','Untitled','$active_id'");
// echo $project_id;

//insert land_property
$land_property_id = gen_uuid();
insert("land_property","id","'$land_property_id'");

//insert plans_detail
$plans_detail_id = gen_uuid();
insert("plans_details","id","'$plans_detail_id'");

$address_id = gen_uuid();
insert("address","id,type","'$address_id','project'");


sleep(2);
//update project
update("project","`land_property` = '$land_property_id',`plans_details` = '$plans_detail_id', address = '$address_id'","`id` = '$project_id' AND `owner_id` = '$active_id'");

//insert forms
$forms_id = gen_uuid();
insert("forms","id","'$forms_id'");

//insert documents
$documents_id = gen_uuid();
insert("documents","id","'$documents_id'");

//update plans_details
update("plans_details","`form` = '$forms_id', `documents` = '$documents_id'" ,"`id` = '$plans_detail_id'");



//insert forms as part of template






header("Location: ../pages/applicant_openProject.php?project_id=$project_id")


?>