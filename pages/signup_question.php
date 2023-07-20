<?php
$page_title = "Survey Question | Signup";

// require '../php_func/session_check.php';
// privilege_keeping("applicant","engineering_home.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
   
  <?php require('../php_func/header_temp.php')?>

</head>

<body>

    <div class="container-fluid">

    <div class="row">
        <?php require('../components/navbar.php')?>
    </div>
        <div class="my-centered border-black my-container-blue" style = "top:30%;max-width:470px" id = "initial_question">
            
            <div class = "row p-2">
                <a href="../index.php" class = "white-text">Back</a>
            </div>
            <div class = "p-5">
            <div class="row">
                <h3>Before you proceed..</h3>

            </div>
            <p class="white-text"><b>Are you planning to build here within Nasugbu?</b></p>

            <p id="reason_no" hidden>I'm sorry we cannot accept application from other locations other than Nasugbu, Batangas. 
               Thank you for you patience. <span><a href="../index.php" class = "white-text">Go back home</a></span></p>
            

            <div class="row text-center">
                <div class="col"><a href="signup.php"><button type="button" class="btn my-btn-green" id = "build_yes">Yes</button></a></div>
                <div class="col"><button type="button" class="btn my-btn-red" id = "build_no" onclick="$('#reason_no').removeAttr('hidden')">No</button></div>
            </div>

        </div>
    </div>

    <!-- <div class="my-centered border-black my-container-blue" style = "top:30%" id = "build_no_response">
            
            <div class = "row p-2">
                <a href="../index.php" class = "white-text">Back</a>
            </div>
            <div class = "p-5">
            <div class="row">
                <h3>Before you proceed..</h3>

            </div>
            <p class="white-text"><b>Are you planning to build here within Nasugbu?</b></p>
            

            <div class="row text-center">
                <div class="col"><button type="button" class="btn my-btn-green" id = "build_yes">Yes</button></div>
                <div class="col"><button type="button" class="btn my-btn-red" id = "build_no">No</button></div>
            </div>

        </div>
    </div> -->


    </div>

    <script src="../js/jquery-3.6.4.js"></script>
    <script>
           $("#user-tools").attr('hidden', 'hidden')


    </script>

</body>

</html>