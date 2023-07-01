<?php
// establish connection
require "db_connection.php";


$table_name = "applicant";
$column = array("*");
$value = array("Reignoel","Daria");


// trasform column 
$formatted_column = format_column($column);

$formatted_values = format_values($value);
$condition = NULL;
$desired_output = array("id","firstname","lastname");



$sql = 'SELECT '.$formatted_column.' FROM '.$table_name ;

echo $sql;
foreach ($conn->query($sql) as $row) {

        foreach($desired_output as $x){
            echo $row[$x] ;
        }
        // print $row['id'] . "\t";
        // print $row['firstname'] . "\t";
        // print $row['lastname'] . "\n";
        // echo json_encode($row);
        // echo sprintf($row['id']);
    
}

  $conn = null;
?>