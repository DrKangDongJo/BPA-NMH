<?php

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
      mysqli_close($conn);
      return $result;
   
    
}


function insert(){
  echo "insert";
}

function update($table_name,$to_update,$condition){

  $conn = db_conn();
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE $table_name SET $to_update WHERE $condition";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

}


function delete_(){
  echo "delete";
}





if(isset($_POST['action'])){
  if ($_POST['action'] == "select") {
    
    select($_POST['table'],$_POST['condition']); 
  }
  if ($_POST['action'] == "insert") {
     insert();
     }
  if ($_POST['action'] == "update") { 
    update($_POST['table'],$_POST['to_update'],$_POST['condition']);
   }
  if ($_POST['action'] == "delete") { delete_(); }
}

?>