<?php
$page_title = "Home | Admin | Engineering | BPA";
session_start();
// print_r($_SESSION);

// require '../php_func/db_func.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php require('../php_func/header_temp.php') ?>
    <style>
        #pop_up_nav>select {
            background-color: transparent;
            border: none;
            color: white
        }
    </style>
</head>

<body>


    <p>in progress as first step of approval process</p>
    <?php
    // $locational_data = select("project", "status = 'reviewing'");

    // while ($row = mysqli_fetch_assoc($locational_data)) {
    //     // print_r($row);
    // }

    ?>

    <div class="container-fluid p-0">

        <?php require '../components/navbar.php' ?>

    </div>



    <div class="main" style="padding:3%">


        <div class="row">
            <div class="col">
                <div style="width:90%;aspect-ratio:3/1;" class="border-black my-border-8 text-center">

                    <!-- applications not archived, open, deleted -->
                    <p>TOTAL NUMBER OF APPLICATIONS</p>
                    <!-- <h1>562</h1> -->
                    <h1>0</h1>

                </div>
            </div>
            <div class="col">
                <?php
                $pending_applications = full_query('SELECT *,count(id) as "count" FROM `project` WHERE status = "pending"');

                while ($row = mysqli_fetch_assoc($pending_applications)) {
                    // print_r($row);
                ?>
                    <div style="width:90%;aspect-ratio:3/1;" class="border-black my-border-8 text-center">
                        <p>PENDING APPLICATION REVIEW</p>
                        <h1><?php echo $row['count'] ?></h1>
                    </div>
                <?php
                }

                ?>
            </div>
            <div class="col">
                <div style="width:90%;aspect-ratio:3/1;" class="border-black my-border-8 text-center">
                    <p>AVERAGE COMPLETION TIME</p>
                    <h1>N/A</h1>
                    <!-- <h1>30.2 MINS</h1> -->

                </div>
            </div>
            <div class="col">
                <div style="width:90%;aspect-ratio:3/1;" class="border-black my-border-8 text-center">
                    <p>APPROVED-DENIED RATIO</p>
                    <h1>N/A</h1>
                    <!-- <h1>2/1</h1> -->

                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <p>PREDICTION FOR NEXT BUILDING CONSTRUCTION</p>
                <div style="width:100%;aspect-ratio:6/4" class="border-black my-border-8 text-center">

                </div>
            </div>
            <div class="col">
                <div class="row mb-2">
                    <p>REPORT 1</p>
                    <div style="width:100%;aspect-ratio:6/1.7" class="border-black my-border-8 text-center ">


                    </div>

                </div>
                <div class="row mt-3">
                    <p>REPORT 2</p>
                    <div style="width:100%;aspect-ratio:6/1.7" class="border-black my-border-8 text-center">


                    </div>

                </div>
            </div>


        </div>
    </div>






    <script src="../bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
    <script src="../js/jquery-3.6.4.js"></script>
    <script>
        $("#nav_center_section").append('<div class="col text-center white-text" id ="project_title"><div class="row"><h5 class="clear-input w-100 text-center m-0 mt-2" id="">MPDC DEPARTMENT</h5></div><div class="row"><p>Home - Admin <span id = "pop_up_nav"></span></p></div></div>')
        $("#user-tools").removeClass("my-auto");
        $("#user-tools").addClass("my-2");
        $("#title_logo").append('<div class = "mx-2"style ="width:22px;height:90%;background-color:#ffcb2f"></div>')


        // $("#pop_up_nav").append('<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">'+
        // ' <option value="">Select...</option><option value="engineering_review_board.php">Pending Applications</option><option value="https://yahoo.com">Yahoo</option></select>')
    </script>
</body>

</html>