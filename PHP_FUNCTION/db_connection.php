<?php
$servername = "localhost";
$username = "root";
$password = "";


function format_column($myArray){
    $my_stmt = NULL;
    for($x = 0; $x < sizeof($myArray) ; $x++){
        // echo $myArray[$x];
    
        if($x < sizeof($myArray) - 1){
            $my_stmt .= "`" . strval($myArray[$x]) ."`" . ","; 
            
    
        }else{
            $my_stmt .= "`" . strval($myArray[$x]) ."`" ; 
        }
    
        // echo $my_stmt . "<br>";
    }
    return $my_stmt;
}

function format_values($myArray){
    $my_stmt = NULL;
    for($x = 0; $x < sizeof($myArray) ; $x++){
        // echo $myArray[$x];
    
        if($x < sizeof($myArray) - 1){
            $my_stmt .= "'" . strval($myArray[$x]) ."'" . ","; 
            
    
        }else{
            $my_stmt .= "'" . strval($myArray[$x]) ."'" ; 
        }
    
        // echo $my_stmt . "<br>";
    }
    return $my_stmt;
}



try {
  $conn = new PDO("mysql:host=$servername;dbname=bpanmh_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully <br>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>