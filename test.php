<?php
echo password_hash("password",PASSWORD_DEFAULT);
// $password1 = password_hash("password",PASSWORD_DEFAULT);
// $password2 = password_hash("password",PASSWORD_DEFAULT);
// echo password_verify($password1,$password2);

// require 'php_func/gen_uuid.php';
require 'php_func/db_func.php';
// $condition = "project_id = '47614c93-ccb1-49a9-a317-023f131ccd52' AND owner_id = '5d3e4e48-17ee-11ee-a01d-f47b09532450' ";
// $query = "SELECT username, COUNT(title) as 'untitled' FROM vw_project_owners WHERE title LIKE '%Untitled%' and owner_id = '5d3e4e48-17ee-11ee-a01d-f47b09532450'";

// $query = "SELECT * FROM `vw_project_documents` WHERE documents = '4348819c-c32e-4717-b893-5e3bbce2c7ed'";

// $open_project = full_query($query); //result

// while($row = mysqli_fetch_assoc($open_project)) {
//     echo $row["id"] . "<br>";

// }

?>