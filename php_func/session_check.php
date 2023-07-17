<?php

session_start();

function privilege_keeping($privilege,$relocation){
    
//start session

//check if session has active user

if (isset($_SESSION['user_id'])) {

    //check active user's priviledges
       if(strtolower($_SESSION['privilege']) != $privilege){
        //if user has no privilege to page
        //relocate to : 
           header('Location: '.$relocation);
           
       }
   
     }else{
       // if no session/ not logged in
       header('Location: index.php');
     }
     
}






?>