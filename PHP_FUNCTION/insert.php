<?php

require "db_connection.php";


$table_name = "user_account";
$column = array("firstname","lastname");
$value = array("jake","forbes");

$formatted_column = format_column($column);
$formatted_values = format_values($value);
// echo $formatted_column;

try {
    // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // $conn;
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `$table_name`($formatted_column)
    VALUES ($formatted_values);";

    // $sql = "INSERT INTO `$table_name`( ". json_encode($column,) .")
    // VALUES ('$value[0]','$value[1]','$value[2]');";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully <br>";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;


?>