<?php
// echo password_hash("password",PASSWORD_DEFAULT);
// $password1 = password_hash("password",PASSWORD_DEFAULT);
// $password2 = password_hash("password",PASSWORD_DEFAULT);
// echo password_verify($password1,$password2);

// require 'php_func/gen_uuid.php';
require 'php_func/db_func.php';
// $condition = "project_id = '47614c93-ccb1-49a9-a317-023f131ccd52' AND owner_id = '5d3e4e48-17ee-11ee-a01d-f47b09532450' ";
// $query = "SELECT username, COUNT(title) as 'untitled' FROM vw_project_owners WHERE title LIKE '%Untitled%' and owner_id = '5d3e4e48-17ee-11ee-a01d-f47b09532450'";

// $query = "CREATE VIEW 'vw_loc_part' AS
// SELECT vw_project_basics.id,f_unified.character_of_occupancy,
// vw_project_basics.project_address,
// f_locational.right_over_land, f_locational.existing_land_use,f_locational.project_cost,
// f_locational.project_nature,f_locational.project_tenure,f_locational.project_cost,f_unified.lot_area
// FROM f_unified
// INNER JOIN vw_project_forms
// ON f_unified.id = vw_project_forms.unified
// INNER JOIN vw_project_basics
// ON vw_project_basics.id = vw_project_forms.project_id
// INNER JOIN f_locational
// ON vw_project_forms.locational = f_locational.id
// ";

// $open_project = full_query($query); //result

// while($row = mysqli_fetch_assoc($open_project)) {
//     // echo $row["id"] . "<br>";
//     print_r($row);

// }

// $elec = select("f_electrical","id = 'c2466522-2ed0-474b-acdd-14b0a76ee23f'");

// while($row = mysqli_fetch_assoc($elec)) {
//     // echo $row["id"] . " -- <br>";
//     print_r($row);

// }
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// $_SESSION['age'] = $age;

// // print_r($_SESSION['age']['Ben']);

// echo phpversion();


$locational_data = select("project","status = 'reviewing'");
    
while($row = mysqli_fetch_assoc($locational_data)) {
    print_r($row);

}


?>