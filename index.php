<?php
$page_title = "Building Permit Application | Home";


 
session_start(); //start session
// print_r($_SESSION);

if (isset($_SESSION['user_id'])) { //check if session has active user
    //check active user's priviledges
    if(strtolower($_SESSION['privilege']) == "applicant"){
        header('Location: pages/applicant_home.php');
    }
}


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

        .custom-modal .modal-dialog {
      max-width: 400px;
    }

    .custom-modal .modal-content {
      border-radius: 10px;
    }

    .custom-modal .modal-header {
      background-color: #f8f9fa;
      border-bottom: none;
    }

    .custom-modal .modal-body {
      padding: 20px;
    }

    .custom-modal .modal-footer {
      border-top: none;
    }

    .hidden {
        display: none;
      }

    .popup-message {
    animation: popup 3s forwards;
    }

    @keyframes popup {
      0% {
        transform: translateY(15%);
        opacity: 0;
      }
      10%, 90% {
        transform: none;
        opacity: 1;
      }
      100% {
        transform: translateY(15%);
        opacity: 0;
        pointer-events: none;
      }
    }

    #btn4-text {
        height: 72px;
        padding: 8px 16px;
        border-radius: 8px;
        background: rgb(240, 134, 134);
        font-weight: bold;
        text-align: center;
        line-height: 72px;
        position: fixed;
        right: 5%;
        bottom: 10%;
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
    <div class="my-centered">
    <div class="row login-cont m-auto">
       <div class="row mt-auto" style = "justify-content:center">
            <img src="img/Seal_of_Nasugbu.png" alt="Seal of Nasugbu" style="width:50%; aspect-ratio:1/1" class = "img-fluid">
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
       
       <a href="../pages/password_forgot.php" class = "white-text"><p class = "mb-0 mt-1">FORGOT PASSWORD?</p></a>
       <p class = "mb-1" data-bs-toggle="modal" data-bs-target="#modalContainer">SIGNUP</p>

       

       </div>
       
       
       <div>
       <button type="" class="btn my-btn-blue m-auto float-end p-auto" style="color:white;">
            LOGIN</button>
        </div>
      
    </div>
    </div>
    </form>



</div>




  <div class="modal fade" id="modalContainer" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header text-center" style="background-color: #5A8BB5;">
          <h5 class="modal-title text-white text-uppercase" id="modalLabel">Confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center" style="background-color: aliceblue;">
          <p class="h4 text-center"><b>Is the location of the building is around nasugbu?</b></p>
          <button type="button" id="yesBtn" class="btn btn-success">Yes</button>
          <button type="button" id="noBtn" class="btn btn-danger">No</button>
        </div>
        <p id="btn4-text" class="hidden">Sorry, this is only available at nasugbu area</p>
      </div>
    </div>
  </div>


<script src="bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
<script src="js/jquery-3.6.4.js"></script>
<script>
       $("#user-tools").attr('hidden','hidden')
       $("#logo")[0].setAttribute("src","img/Seal_of_Nasugbu.png")
       $("#title_logo").removeClass("col-4")
       $("#title_logo").addClass("p-0")



       const yesBtn = document.getElementById('yesBtn');
    const noBtn = document.getElementById('noBtn');
    const btn4Text = document.getElementById('btn4-text');

    yesBtn.addEventListener('click', () => {
      // Action when "Yes" button is clicked
      window.location.href = "signup.html";
      $('#modalContainer').modal('hide');
    });

    noBtn.addEventListener('click', () => {
      // Action when "No" button is clicked
      console.log("1")
      btn4Text.classList.remove('hidden');
      btn4Text.classList.add('popup-message');
      $('#modalContainer').modal('hide');
    });

    // btn4Text.addEventListener('animationend', () => {
    //   console.log("2")

    //     btn4Text.classList.remove('popup-message');
    //     btn4Text.classList.add('hidden');
    //   });
</script>
</body>
</html>