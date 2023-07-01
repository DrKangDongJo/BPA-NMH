<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bpanmh_db";

// Create connection

function db_conn(){
  return $conn = mysqli_connect("localhost", "root","","bpanmh_db");
}



function select($table_name,$condition){

    $conn = db_conn();
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        // die would end the func
      }
      
      if($condition == ""){
        $sql = "SELECT * FROM $table_name";
      }else{
        $sql = "SELECT * FROM $table_name WHERE $condition";
      }

      $result = mysqli_query($conn, $sql);
      return $result;
   
      mysqli_close($conn);
}

?>