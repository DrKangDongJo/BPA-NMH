<?php
// echo password_hash("password",PASSWORD_DEFAULT);
// $password1 = password_hash("password",PASSWORD_DEFAULT);
// $password2 = password_hash("password",PASSWORD_DEFAULT);
// echo password_verify($password1,$password2);

// require 'php_func/gen_uuid.php';
require 'php_func/db_func.php';


$project_id = '7e1c7005-6249-4ada-bcaf-c5ff1f96114b';
$user_id = '5d3e4e48-17ee-11ee-a01d-f47b09532450';

$result = select("vw_project_forms","project_id = '$project_id'");

// print_r($present);

// if($row = mysqli_fetch_field($present)) {
    
//     // for($i = 0; $i < count($row); $i++){
//     //     if($row[$i] == "" || $row[$i] == null){
//     //         echo "NULL";
//     //     }
//     //     echo $row[$i];
//     // }

//     print_r($row);
// }



// Print the column names as the headers of a table
echo "<table><tr>";
for($i = 0; $i < mysqli_num_fields($result); $i++) {
    $field_info = mysqli_fetch_field($result);
    echo "<th>{$field_info->name}</th>";
}

// Print the data
// while($row = mysqli_fetch_row($result)) {
//     echo "<tr>";
//     foreach($row as $_column) {
//         echo "<td>{$_column}</td>";
//     }
//     echo "</tr>";
// }

echo "</table>";

?>