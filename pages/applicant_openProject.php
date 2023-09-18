<?php
require '../php_func/db_func.php';
session_start(); //start session

// print_r($_SESSION);

$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // get page url
$project_id = substr($full_url, strpos($full_url, "=") + 1);
// echo $project_id . "-----";
// echo $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.3.0\css\bootstrap.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="icon" type="image/x-icon" href="../img/Seal_of_Nasugbu.png">

    
    <script src="../bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
    <script src="../js/jquery-3.6.4.js"></script>

    <?php
    $condition = "id = '$project_id' AND owner_id = '" . $_SESSION['user_id'] . "' ";
    // echo $condition;

    $open_project = select("project", $condition); //result
    if ($row = mysqli_fetch_assoc($open_project)) {

        $project_status = $row['status'];
        // echo $project_status;
    }

    $condition = "project_id = '$project_id' AND owner_id = '" . $_SESSION['user_id'] . "' ";

    $open_project = select("vw_project_forms", $condition); //result

    //loop through result to get values
    if ($row = mysqli_fetch_assoc($open_project)) {
        // foreach ($row as $_column) {
        //     // array_push($form_values, $_column); //append to storage
        // }
        $project_title = ucwords($row['title']); //get project title

        $forms = array("form_id" => "$row[form_id]", "sanitary" => "$row[sanitary]", "electrical" => "$row[electrical]", "locational" => "$row[locational]", "unified" => "$row[unified]");
        $_SESSION["forms"] = $forms;
        $forms_id = $row['form_id']; //forms id

        // print_r($_SESSION);
        echo "<title>{$project_title}</title>";  //display tab title
    }

    ?>


    <style>
        ul>li {
            list-style: none;
            /* color: black; */

        }

        button>li {
            color: black;

        }

        #basics_label>*,
        #basics_input>input {
            display: inline;
            padding: 2px;
            margin-left: 10px;
        }

        #right_portion {
            height: calc(100vh - 60px);
        }

        button.nav-link {
            color: black;
        }

        .nav-pills .nav-link.active {
            background-color: unset;
        }

        .nav-pills .nav-link.active {
            background-color: #4074ac;
            border-radius: 10px;
            color: white;
            /* padding:6px; */
        }

        #right_portion::-webkit-scrollbar {
            display: none;
        }

        .my-dd-btn {
            background-color: transparent;
            border: none;
        }
    </style>
</head>

<body>

    <div class="container-fluid p-0">

        <?php require '../components/navbar.php'; //include navbar
        ?>

        <div class="row m-0">
            <!-- checklist -->
            <div class="col-3 m-0 p-0">
                <!-- cointainer -->
                <div style="width:100%;background-color:#dfdfdf94;display:flex;flex-direction:column;min-height:100%" class="p-4 m-0">

                    <!-- header -->
                    <div class="text-end p-0 m-0"><a href="applicant_home.php">BACK</a> </div>
                    <!-- main -->
                    <div class="ms-3" name="main" style="flex-grow:1">
                        <ul>


                            <div class="accordion" id="accordionExample" style="margin-left:-10%">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            FORMS
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="d-flex align-items-start">
                                                <div class="nav flex-column nav-pills me-3" role="tablist" aria-orientation="vertical" id="form_nav">
                                                    <button class="nav-link active" id="v-pills-locational_" data-bs-toggle="pill" data-bs-target="#v-pills-cont-locational_" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Locational</button>

                                                    <button class="nav-link " id="v-pills-sanitary_" data-bs-toggle="pill" data-bs-target="#v-pills-cont-sanitary_" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Sanitary</button>

                                                    <button class="nav-link" id="v-pills-electrical_" data-bs-toggle="pill" data-bs-target="#v-pills-cont-electrical_" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Electrical</button>



                                                    <button class="nav-link" id="v-pills-unified_" data-bs-toggle="pill" data-bs-target="#v-pills-cont-unified_" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Unified</button>

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            DOCUMENTS
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="d-flex align-items-start">
                                                <div class="nav flex-column nav-pills me-3" role="tablist" aria-orientation="vertical">
                                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">LANDS</button>
                                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">PERMITS</button>
                                                    <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">PLANS</button>
                                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">COSTS</button>
                                                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">ADDITIONAL DOCUMENTS</button>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </ul>

                    </div>

                    <div id="footer">
                        <!-- <button>Add Form</button> -->



                        <h5 class="text-end" hidden>Project 0% Complete</h5>
                        <div class="row">

                            <div class="col-3" style="bottom: 0px;">FAQ</div>
                            <div class="col text-end">


                                <button type="button" class="btn my-btn-blue white-text" id="preview_app_btn" data-bs-toggle="modal" data-bs-target="#preview_app">
                                    PREVIEW
                                </button>

                                <!-- Button trigger modal submit_confirmation-->
                                <button type="button" class="btn my-btn-blue white-text" id="submit_for_review_btn" data-bs-toggle="modal" data-bs-target="#submit_confirmation">
                                    SUBMIT FOR REVIEW
                                </button>

                            </div>
                        </div>





                        <!-- Modal submit_confirmation -->
                        <div class="modal fade" id="submit_confirmation" tabindex="-1" aria-labelledby="submit_confirmationLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="submit_confirmationLabel">Confirm submission</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to submit your project for review? <br>
                                        <b>This will lock your project temporarily - you will not be able to make changes</b>
                                        while we send your forms and documents to designated departments.
                                        Please make sure everything is filled and checked before proceeding.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, I'll do it later</button>

                                        <form action="../php_func/submit_for_review.php" method="post">
                                            <input name="project_id" value="<?php echo $project_id ?>" hidden>
                                            <button type="submit" class="btn btn-primary">Submit for review</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>


                </div>

            </div>


            <div class="modal fade" id="preview_app" tabindex="-1" aria-labelledby="preview_appLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="width: fit-content;
    height: 2047px;">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="preview_appLabel">Preview</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick='$("#v-pills-locational_").click()'></button>
                        </div>
                        <div class="modal-body" style="width:fit-content;height:fit-content;">

                            <!-- <h1>IMAGE VIEW</h1> -->
                            <ul class="nav nav-pills flex-column flex-sm-row" id="preview_tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-home-tab" data-bs-toggle="pill" data-bs-target="#preview-home" type="button" role="tab" aria-controls="preview-home" aria-selected="true">Unified Form</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-profile-tab" data-bs-toggle="pill" data-bs-target="#preview-profile" type="button" role="tab" aria-controls="preview-profile" aria-selected="false">Sanitary</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-contact-tab" data-bs-toggle="pill" data-bs-target="#preview-contact" type="button" role="tab" aria-controls="preview-contact" aria-selected="false">Electrical</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="preview-disabled-tab" data-bs-toggle="pill" data-bs-target="#preview-disabled" type="button" role="tab" aria-controls="preview-disabled" aria-selected="false" disabled>Disabled</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="preview_tab-tabContent">
                                <div class="tab-pane fade" id="preview-home" role="tabpanel" aria-labelledby="preview-home-tab" tabindex="0">
                                    <?php
                                    $mode = "view";
                                    require "..\components\prevf_unified.php"; ?>
                                </div>
                                <div class="tab-pane fade" id="preview-profile" role="tabpanel" aria-labelledby="preview-profile-tab" tabindex="0">
                                    <?php //require "../components/prefv_sanitary.html";
                                    ?>

                                </div>
                                <div class="tab-pane fade" id="preview-contact" role="tabpanel" aria-labelledby="preview-contact-tab" tabindex="0">
                                    <?php //require "../components/prefv_electrical.html";
                                    ?>

                                </div>
                                <div class="tab-pane fade" id="preview-disabled" role="tabpanel" aria-labelledby="preview-disabled-tab" tabindex="0">...</div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick='$("#v-pills-locational_").click()'>Close</button>
                            <button type="submit" class="btn btn-primary">Print</button>



                        </div>
                    </div>
                </div>
            </div>


            <!-- right portion/forms selected -->

            <div class="col m-0 p-0" style="position:static;overflow-y:scroll" id="right_portion">
                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-cont-locational_" role="tabpanel" aria-labelledby="v-pills-locational_" tabindex="0">
                        <!-- Locational -->
                        <?php
                        require '../components\form_locational.php';
                        ?>

                    </div>


                    <div class="tab-pane fade " id="v-pills-cont-sanitary_" role="tabpanel" aria-labelledby="v-pills-sanitary_" tabindex="0">
                        <!-- Sanitary -->

                        <?php
                        require '../components\form_sanitary.php';
                        ?>

                    </div>

                    <div class="tab-pane fade" id="v-pills-cont-electrical_" role="tabpanel" aria-labelledby="v-pills-electrical_" tabindex="0">
                        <!-- Electrical -->
                        <?php
                        require '../components\form_electrical.php';
                        ?>
                    </div>



                    <div class="tab-pane fade" id="v-pills-cont-unified_" role="tabpanel" aria-labelledby="v-pills-unified_" tabindex="0">
                        <!-- Unified -->
                        <?php
                        require '../components\form_unified.php';
                        ?>

                    </div>
                    <!-- DOCUMENTS -->

                    <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                        <!-- LANDS -->
                        <?php
                        require '../pages/lands.html';
                        ?>
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <!-- PERMITS -->
                        <?php
                        require '../pages/permits.html';
                        ?>
                    </div>

                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                        <!-- PLANS -->
                        <?php
                        require '../pages/plans.html';
                        ?>
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                        <!-- COSTS -->
                        <?php
                        require '../pages/costs.html';
                        ?>
                    </div>

                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                        <!-- ADDITIONAL REQUIREMENTS -->
                        <?php
                        require '../pages/additional_req.html';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // add center project name
        $("#nav_center_section").append('<div class="text-center" id ="project_title"><input class="clear-input text-center white-text" type="text" name="" id="inp_project_name" onchange = "update_title()" value="<?php echo $project_title; ?>"></div>')
        $("#nav_center_section").addClass("m-auto");

        var project_status = "<?php echo $project_status ?>";
        console.log(project_status);
        if (project_status != "open") {
            $("select").attr("disabled", "disabled")
            $("input").attr("disabled", "disabled")
            $("#submit_for_review_btn")[0].innerText = project_status;
            $("#submit_for_review_btn").css("text-transform", "uppercase");
            $("#submit_for_review_btn").attr("disabled", "disabled");

            if (project_status == "approved") {
                $("#submit_for_review_btn").css("background-color", "#00920091");
            } else if (project_status == "denied") {
                $("#submit_for_review_btn").css("background-color", "#d100008a");

            }
        }

        if ($("#sel_add_form").children().length == 0) {
            $("#sel_add_form").parent().attr("hidden", "hidden") // hide div form additon
        }
        var elements = document.getElementsByClassName("nav-link");

        //add event listeners to nav-links
        for (var i = 0; i < elements.length; i++) {
            elements[i].addEventListener('click', function() {

                //get active links
                active_links = $("button.nav-link.active")
                active_contents = $("#v-pills-tabContent > div.active.show")

                if (active_links.length > 1) { //check if there's more than one

                    //remove all
                    active_links.removeClass("active")
                    active_contents.removeClass("active")
                    active_contents.removeClass("show")

                    //set active to one just clicked
                    $("#" + this.id).addClass("active")

                    // console.log(this.id)


                }
            }, false);
        }

        //updating title
        function update_title() {

            // get project title and page
            var project_title = $("#inp_project_name")[0];
            var page_title = $("head > title")[0];

            // if left empty, set to UNtitled
            if (project_title.value == "" || project_title.value == null) {
                // project_title = "Untitled";
                project_title.value = "Untitled";
                page_title.text = "Untitled";

            } else {
                //reflect page title
                page_title.text = project_title.value;

            }

            //update value in db
            $.ajax({
                url: "../php_func/db_func.php",
                type: "POST",
                cache: false,
                async: true,
                data: {
                    "action": "update",
                    "table": "project",
                    "to_update": "`title` = '" + project_title.value + "'",
                    "condition": "`id` = '<?php echo "$project_id" ?>'"

                },
                success: function(dataResult) {
                    console.log(dataResult);

                }
            });

        }

        function add_form() {

            //get selected value of dropdown
            var selected = $("#sel_add_form  option:selected")[0].value;
            var table = "f_" + selected.toLowerCase();
            //insert new form
            //update form tables

            <?php $form_id = gen_uuid(); ?>


            $.ajax({
                url: "../php_func/db_func.php",
                type: "POST",
                cache: false,
                async: true,
                data: {
                    "action": "insert",
                    "table": table,
                    "column": "id",
                    "value": "'<?php echo $form_id; ?>'"

                },
                success: function(dataResult) {
                    console.log(dataResult);

                }
            });

            //update
            $.ajax({
                url: "../php_func/db_func.php",
                type: "POST",
                cache: false,
                async: true,
                data: {
                    "action": "update",
                    "table": "forms",
                    "to_update": "`" + table.replace("f_", "") + "` = '<?php echo $form_id ?>'",
                    "condition": "`id` = '<?php echo $forms_id ?>'"

                },
                success: function(dataResult) {
                    console.log(dataResult);

                }
            });

            location.reload();
            sleep(1.2);

        }

        function delete_form(id) {

            var table = $('#' + id).attr("table");
            console.log(id);
            console.log(table)



            //update on forms

            $.ajax({
                url: "../php_func/db_func.php",
                type: "POST",
                cache: false,
                async: true,
                data: {
                    "action": "update",
                    "table": "forms",
                    "to_update": "`" + table.replace("f_", "") + "` = NULL",
                    "condition": "`id` = '<?php echo $forms_id ?>'"

                },
                success: function(dataResult) {
                    console.log(dataResult);

                }
            });
            //delete on table

            $.ajax({
                url: "../php_func/db_func.php",
                type: "POST",
                cache: false,
                async: true,
                data: {
                    "action": "delete",
                    "table": table,
                    "condition": "`id` = '" + id.replace("del_btn_", "") + "'",


                },
                success: function(dataResult) {
                    console.log(dataResult);

                }
            });

            location.reload();
            sleep(1.2);


        }

   
        // function printDiv() {
        //     var divContents = document.getElementById("prevf_unified").innerHTML;
        //     var divStyle = document.getElementById("prevf_unified_style");
        //     var a = window.open('', '', 'height=auto, width=auto');
        //     a.document.write('<html>');
        //     a.document.write('<head>');
        //     a.document.write(divStyle);
        //     a.document.write('</head>');
        //     a.document.write('<body > <h1>Div contents are <br>');
        //     a.document.write(divContents);
        //     a.document.write('</body></html>');
        //     a.document.close();
        //     a.print();
        // }
   
        function printPageArea(areaID){

            //add print/scaling settings
    var printContent = document.getElementById(areaID).innerHTML;
    var originalContent = document.body.innerHTML;
    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = originalContent;
}


    </script>
</body>

</html>