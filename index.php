<?php
$page_title = "Building Permit Application | Home";

print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title;?></title>
    <link rel="icon" type="image/x-icon" href="img/Seal_of_Nasugbu.png">


    <style>
        .bg{
            background-image: url("img/construction_bg.webp");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .login-cont{
            background-color: #5A8BB5;
            min-width: 300px;
            min-height: 500px;
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

    <link rel="stylesheet" href="bootstrap-5.3.0\css\bootstrap.css">
    <link rel="stylesheet" href="css/general.css">
</head>
<body class = "bg">
    
<div class="container-fluid">
<!-- ** NAVBAR -->
    <div class="row">
    <?php
    require 'components\navbar.php';
    ?>
    </div>
    <form action="php_func/login_validation.php" method="post">
    <div class="row login-cont mx-auto mt-2">
       <div class="row mt-5" style = "justify-content:center">
            <img src="img/Seal_of_Nasugbu.png" alt="Seal of Nasugbu" style="width:50%;" class = "img-fluid">
       </div>
        <br>
      
       <div class="row">
        <label for="USERNAME" class = "white-text ">USERNAME</label>
        <div class="row m-auto">
            <input type="text" value="" name="USERNAME" 
            class="my-upper my-text-input my-border-8" placeholder="username88" required>
        </div>
        <label for="PASSWORD" class = "white-text ">PASSWORD</label>
        <div class="row m-auto">
            <input type="password" value="" name="PASSWORD" 
            class="my-upper my-text-input my-border-8" placeholder="required" required>
        </div>
       </div>

       <div class= "my-upper white-text" style="font-size: 0.9rem;">
       <p class = "mb-0 mt-1">FORGOT PASSWORD?</p>
       <p class = "mb-1">SIGNUP</p>

       </div>
       
        <!-- <a href = "pages/applicant_home.php">
           
       </a> -->
       <div>
       <button type="" class="btn my-btn-blue m-auto float-end p-auto" style="color:white;">
            LOGIN</button>
        </div>
      
    </div>
    </form>



</div>


<script src="../bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
<script src="../dependecies/jquery-3.6.4.js"></script>
<script>
       $("#user-tools").attr('hidden','hidden')
       $("#logo")[0].setAttribute("src","img/Seal_of_Nasugbu.png")
       $("#title_logo").removeClass("col-4")
       $("#title_logo").addClass("p-0")
</script>
</body>
</html>