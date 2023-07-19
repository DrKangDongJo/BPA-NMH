<?php
$page_title = "Signup | BPANMH";

// require '../php_func/session_check.php';
// privilege_keeping("applicant","engineering_home.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php require('../php_func/header_temp.php')?>


</head>

<style>

    .signin-cont{
        background-color: #5A8BB5;
        min-width: 500px;
        min-height: 700px;
        max-width: 400px;
        max-height: 600px;
        border-radius: 10px;
        /* position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%); */
        padding:2%;

    }    
</style>

<body>
    
<div class="container-fluid">


<div class="row">
        <?php require('../components/navbar.php')?>
    </div>

    <form action="" method="post">
        <div class="row signin-cont m-auto mt-5 p-4 justify-content-center" style = "background-color: #5A8BB5; width: 500px; ">
           <div class="row mt-auto" style = "justify-content:center">
                <img src="../img/Seal_of_Nasugbu.png" alt="Seal of Nasugbu" style="width:40%;" class = "img-fluid">
           </div>
            
            <div class = "row align-items-center justify-content-center my-3">
                <div class="col-4">
                    <label for="firstname" class="text-light">First name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" required>
                </div>
                <div class="col-4">
                    <label for="lastname" class="text-light">Last name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required>
                </div>
                <div class="col-4">
                    <label for="middlename" class="text-light">Middle Name</label>
                    <input type="text" name="middlename" id="middlename" class="form-control" required>
                </div>
                <div class="row my-2">
                    <label for="address" class="text-light">Address</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>
                <div class="row my-2">
                    <label for="email_add" class="text-light">Email Address</label>
                    <input type="text" name="email_add" id="email_add" class="form-control" required>
                </div>
                <div class="row my-2">
                    <label for="password" class="text-light">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="row my-2">
                    <label for="c_password" class="text-light">Confirm Password</label>
                <input type="password" name="c_password" id="c_password" class="form-control" required>
                </div>
                
            </div>

      
        
        <div>
            <button type="button" class="btn my-btn-blue m-auto  mt-2 float-end p-auto" style="color:white;">
                 NEXT</button>
         </div>
           
        </div>
    </form>
           
           
    <script src="../js/jquery-3.6.4.js"></script>
    <script>
           $("#user-tools").attr('hidden', 'hidden')


    </script>

    
</div>
     
<!--1. basics - fname,l,m-->
<!-- 2. address -->
<!-- 3. username,pass,email -->
<!-- opt. email confirmation otp -->
<!-- 4. profile -->
<!-- helloo -->
<!-- hellooo -->

</body>
</html>