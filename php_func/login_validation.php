<?php

require 'db_func.php';

//get data from form
$username = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];

//call select function from db_func
$condition = "username = '$username'";
$result = select("applicant","$condition");

//check if there are result
if (mysqli_num_rows($result) > 0) {   
while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
   
    $db_username = $row['username'];
    $db_pass = $row['password'];

    //create session
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['middlename'] = $row['middlename'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['contact_no'] = $row['contact_no'];


  }
} else {
    //else return no data
    echo "0 results";
    }

//verify password
echo "verifying";
if( password_verify($password,$db_pass) == 1){
    header('Location: ../pages/applicant_home.php');
}else{
    header('Location: ../index.php');
}
  





?>