<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project title</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0\css\bootstrap.css">
    <link rel="stylesheet" href="../css/general.css">

    <style>
        ul > li{
            list-style: none;
        }

        #basics_label > *,#basics_input > input{
            display: inline;
            padding:2px;
            margin-left:10px;
        }

    </style>
</head>
<body>
    
<div class="container-fluid p-0">

    <?php
    require '../../components/navbar.php';
    ?>

    <div class="row">
    <div id="side_checklist" style ="width:418px;background-color:#E7E7E7;height:100%" class ="p-4 d-table col-5">
 
    <div class = "text-end p-0 m-0">BACK</div>
    
    <div class = "ms-3 d-table-row">
        <h5>Requirements</h5>
        <ul>
            <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Unified Application Form</li>
            <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Form 2</li>
            <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Form 3</li>
            <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Form 4</li>
        </ul>
        <hr class="mx-4">
        <h5>Additional Requirements(if needed)</h5>
        <ul>
            <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Form 1</li>
            <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Form 2</li>
            <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Form 3</li>
            <li><span><input type="checkbox" name="" id=""  class = "me-2"></span>Form 4</li>
        </ul>
    </div>

    <div id="empty_space"class ="d-table-row">
        <br><br><br><br>
    </div>

    <div id="footer">

        <h5 class = "text-end">Project 2% Complete</h5>
        <div class="row">
            <div class="col-3">FAQ</div>
            <div class="col text-end">
                <button type="" class = "btn my-btn-blue white-text" style = "font-size:small">SUBMIT FOR REVIEW</button>
            </div>
        </div>

    </div>
    </div>


    <div class="col m-0 p-0">
        <div class="row p-4 m-0">
            <div class="col">Form - 0% Complete</div>
            <div class="col text-end ">Application No.96247413</div>
        </div>

        <div id="paper" class = "row border-black m-5 p-3">

            <div id="form_header" class = "row text-center">
                <p>Republic of the Philippines <br>
                    City/Municipality of Nasugbu <br>
                    Province of Batangas
                 </p>

                 <h6 style="font-weight:bold">UNIFIED APPLICATION FORM FOR BUILDING PERMIT</h6>
            </div>

            <div id="form_body">
                <!-- APPLICATION TYPE -->
                <div id="part_application_type">
                    <div class="row text-center mb-2">
                        <div class="col" >
                            <p class="d-inline">APPLICATION TYPE : </p>
                            <select name="" id="application_type" class="d-inline"> 
                                <option value="">Simple</option>
                            </select>
                        </div>

                        <div class="col" >
                            <p class="d-inline">This also applies for : </p>
                            <select name="" id="application_type" class="d-inline"> 
                                <option value="">Locational Clearance</option>
                            </select>
                        </div>
                      
                    </div>
                </div>


                <div id="part_basics">
                    <div class="row" id ="basics_label">
                    <label for="firstname" class="col">FIRST NAME</label>
                    <label for="lastname" class="col">LAST NAME</label>
                    <label for="middlename" class="col">MIDDLE NAME</label>
                    <label for="tin" class="col">TIN</label>

                    </div>
                    <div class="row" id ="basics_input">
                        <input type="text" name="firstname" id="firstname" class="col">
                        <input type="text" name="lastname" id="lastname" class="col">
                        <input type="text" name="middlename" id="middlename" class="col">
                        <input type="text" name="tin" id="tin" class="col">
                    </div>
                </div>

                <div id="part_optional">
                    <div class="row">
                        <div class="col">
                            <p>FOR CONSTRUCTION OWNED BY AN ENTERPRISE<span>
                                <input type="checkbox" name="" id="">
                            </span></p>
                        </div>
                        <div class="col">
                            <div class="row m-0 d-inline">FORM OF OWNERSHIP</div>
                            <div class="row m-0 d-inline"><input type="text" name="" id=""></div>
                        </div>
                        <div class="col">
                            <div class="row m-0 d-inline">CONTACT NO</div>
                            <div class="row m-0 d-inline"><input type="text" name="" id=""></div>
                        </div>

                    </div>
                </div>

                <div id ="part_addresses">
                    <div class="row m-0">
                        <p class ="m-0">APPLICANT ADDRESS</p>
                    </div>
                    <div class="row m-0">
                        <input type="text" name="" id="">
                    </div>

                    <div class="row m-0">
                        <p class ="m-0">LOCATION OF CONSTRUCTION</p>
                    </div>
                    <div class="row m-0 mb-2">
                        <input type="text" name="" id="">
                    </div>
                </div>

                <div id="part_scope">
                    <div class="row">
                        <div class="col">SCOPE OF WORK :</div>
                        <div class="col">
                            <select name="" id="" class= "w-100">
                                <option value="">New Construction</option>
                            </select>
                        </div>
                        <div class="col">USE/CHARACTER OF OCCUPANCY <span><a href="">?</a></span></div>
                        <div class="col">
                            <select name="" id="" class= "w-100">
                                <option value="">Group A</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div id = "part_signature" class ="row">
                    <div class="col-4">
                        <div class="row">
                            <p>SIGNATURE</p>
                        </div>
                        <div class="row mb-2 ms-5">
                            
                            <div style = "background-color:#E7E7E7;border:1px solid black; height:200px;width:300px">PREVIEW</div>
                        </div>
                        <div class="row text-end">
                         
                            <div class="col">
                                <button type="" class="btn my-btn-blue m-0">UPLOAD</button>
                                <button type="" class="btn btn-success m-0">SUBMIT</button>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>

    </div>
    


</div>




<script src="../bootstrap-5.3.0/js/bootstrap.js"></script>
<script src="../dependecies/jquery-3.6.4.js"></script>
<script>
$("#title_logo").after('<div class="col text-center" id ="project_title"><input class="clear-input" type="text" name="" id="" value="Draft/Untitled"></div>')

</script>
</body>
</html>