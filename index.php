<?php
$page_title = "Building Permit Application | Home";



session_start(); //start session
// print_r($_SESSION);

if (isset($_SESSION['user_id'])) { //check if session has active user
    //check active user's priviledges
    if (strtolower($_SESSION['privilege']) == "applicant") {
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
    <title><?php echo $page_title; ?></title>
    <link rel="icon" type="image/x-icon" href="img/Seal_of_Nasugbu.png">


    <style>
        .bg {
            background-image: url("img/construction_bg.webp");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .login-cont {
            background-color: #5A8BB5;
        
            max-width: 400px;
            max-height: 600px;
            min-width: 272px;
            min-height: 355px;
            
            border-radius: 10px;
            /* position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); */
            padding: 2%;

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

            10%,
            90% {
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

<body class="bg">

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
                    <div class="row mt-auto" style="justify-content:center">
                        <img src="img/Seal_of_Nasugbu.png" alt="Seal of Nasugbu" style="width:50%;" class="img-fluid">
                    </div>
                    <br>

                    <div class="row">
                        <label for="USERNAME" class="white-text ">USERNAME</label>
                        <div class="row m-auto">
                            <input type="text" value="" name="USERNAME" class="my-upper my-text-input my-border-8" placeholder="username88" required>
                        </div>
                        <label for="PASSWORD" class="white-text ">PASSWORD</label>
                        <div class="row m-auto">
                            <input type="password" value="" name="PASSWORD" class="my-upper my-text-input my-border-8" placeholder="required" required>
                        </div>
                    </div>

                    <div class="my-upper white-text" style="font-size: 0.9rem;">

                        <a href="pages/password_forgot.php" class="white-text">
                            <p class="mb-0 mt-1">FORGOT PASSWORD?</p>
                        </a>
                        <a href="pages\signup_question.php" class="white-text"><p class="mb-1 ">SIGNUP</p></a>



                    </div>


                    <div>
                        <button type="" class="btn my-btn-blue m-auto float-end p-auto" style="color:white;">
                            LOGIN</button>
                    </div>

                </div>
            </div>
        </form>



    </div>




    <script src="bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script>
        $("#user-tools").attr('hidden', 'hidden')
        $("#logo")[0].setAttribute("src", "img/Seal_of_Nasugbu.png")
        $("#title_logo").removeClass("col-4")
        $("#title_logo").addClass("p-0")



    </script>
</body>

</html>