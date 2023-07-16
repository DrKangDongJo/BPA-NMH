<?php

session_start();
// print_r($_SESSION);
require 'db_func.php';


//need user_id and project_id
$active_id = $_SESSION['user_id'];
$project_id = $_POST['project_id'];

// echo "active id : " . $active_id;
// echo "project id : " . $project_id;

//! conundrum!
//! if a completed project and project content is deleted, 
//! would cause inconsistency 

//*? might not delete anything else other than the project
//*? or even just hide from the owner

//** solution completed/accepted project cannot be deleted */

$details = select("vw_project_owners","project_id = '$project_id' AND owner_id ='$active_id'");

while($row = mysqli_fetch_assoc($details)) {
    $land_property_id = $row['land_property'];
    $plan_details_id = $row['plans_details'];
    $address_id = $row['address'];
}

$details = select("plan_details","id = '$plans_details_id'");
while($row = mysqli_fetch_assoc($details)) {
    $forms_id = $row['form'];
    $documents_id = $row['documents'];
}

$details = select("forms","id = '$forms_id'");
while($row = mysqli_fetch_assoc($details)) {
    $architectural_id = $row['architectural'];
    $sanitary_id = $row['sanitary'];
    $electrical_id = $row['electrical'];
    $mechanical_id = $row['mechanical'];
    $locational_id = $row['locational'];

}

// echo

//delete forms
    //delete architectural
    delete_("f_architectural","id = '$architectural_id'");
    //delete structural
    delete_("f_structural","id = '$structural_id'");
    //delete electrical
    delete_("f_electrical","id = '$electrical_id'");
    //delete mechanical
    delete_("f_mechanical","id = '$mechanical_id'");
    //delete locational
    delete_("f_locational","id = '$locational_id'");

//delete documents

// select all documents related to plans details
// $query = "SELECT * FROM `vw_project_documents` WHERE documents = '4348819c-c32e-4717-b893-5e3bbce2c7ed'";

// $open_project = full_query($query); //result

// if($row = mysqli_fetch_assoc($open_project)) {
//     print_r($row);

// }
//     // delete_($do)


//delete land property

//delete address

//delete plans_details


//delete project
// delete_('project',"id = '$project_id' AND owner_id = '$active_id'")




