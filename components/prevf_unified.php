<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>UNIFIED FORM</title>
 -->

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<style id = "prevf_unified_style">
    .body {
        line-height: 0px;
    }

    .input-field {
        border: 1px solid black;
        float: left;
        margin: 0;
        padding: 0;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        width: 205px;
        height: 20px;
    }

    .input-field-date {
        border: 1px solid black;
        float: left;
        /* margin: 0;
	padding: 0; */
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        width: 140px;
        height: 20px;
    }

    .input-field-short {
        border: 1px solid black;
        float: left;
        margin: 0;
        padding: 0;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        vertical-align: middle;
        width: 85px;
        height: 20px;
    }

    .input-field-qty {
        border: 1px solid black;
        float: right;
        margin: 0;
        padding: 0;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        width: 75px;
        height: 17px;
        margin-bottom: 4px;
    }

    .checkbox {
        width: 8px;
        height: 8px;
        margin: 0;
        padding: 0;
        vertical-align: middle;
    }

    .custom-align {
        display: flex;
        align-items: center;
    }


    .form-check {
        margin-bottom: -2px;
        /* Adjust this value as needed */
    }
</style>

<!-- </head> -->

<!-- <body style=""> -->


<div onclick="printPageArea('preview-home')">print</div>
<div style="width: 240.89999999999998mm;border: 1px solid white;height: 402.6mm;" id = "prevf_unified">
    <div style="
            width:inherit; height: inherit; background-size: contain;">

        <p class="my-3 text-center text-uppercase fw-bold" style="font-size: 10px;">republic of the philippines <br>
            municipality of nasugbu <br>PROVINCE OF batangas <br>
        <p class="text-center fw-bold">UNIFIED APPLICATION FORM FOR BUILDING PERMIT</p>
        <div class="text-center">
            <div class="form-check d-inline-block">
                <input class="form-check-input rounded-circle" type="checkbox" value="Simple" id="simple">
                <label class="form-check-label" style="font-size: 9px;" for="simple">Simple</label>
            </div>
            <div class="form-check d-inline-block">
                <input class="form-check-input rounded-circle" type="checkbox" value="Complex" id="complex">
                <label class="form-check-label" style="font-size: 9px;" for="complex">Complex</label>
            </div>
        </div>

        <!-- Application Purpose -->
        <div class="text-center">
            <div class="form-check d-inline-block">
                <input class="form-check-input rounded-circle" type="checkbox" value="New" id="new">
                <label class="form-check-label" style="font-size: 9px;" for="new">New</label>
            </div>
            <div class="form-check d-inline-block">
                <input class="form-check-input rounded-circle" type="checkbox" value="Amendatory" id="amendatory">
                <label class="form-check-label" style="font-size: 9px;" for="amendatory">Amendatory</label>
            </div>
            <div class="form-check d-inline-block">
                <input class="form-check-input rounded-circle" type="checkbox" value="Renewal" id="renewal">
                <label class="form-check-label" style="font-size: 9px;" for="renewal">Renewal</label>
            </div>
            <div class="form-check d-inline-block">
                <input class="form-check-input rounded-circle" type="checkbox" value="Fire Safety Evaluation Clearance" id="fire_clearance">
                <label class="form-check-label" style="font-size: 9px;" for="fire_clearance">Fire Safety Evaluation Clearance</label>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="application" class="mx-3 text-uppercase fw-bold" style="font-size: 8px;">application no.</label>
                    <input class="mx-3 form-control w-50" style="height: 25px; font-size: 8px;" type="text" placeholder="">
                </div>
            </div>

            <div class="col-6">
                <div class="form-group d-block" style="margin-left: 180px">
                    <label for="application" class="mx-3 text-uppercase fw-bold" style="font-size: 8px;">AREA no.</label>
                    <input class="mx-3 form-control w-75" style="height: 25px; font-size: 8px;" type="text" placeholder="">
                </div>
            </div>
        </div>




        <p class="mx-4 text-start text-uppercase fw-bold mb-0" style="font-size: 10px;">BOX1(TO BE ACCOMPLISHED IN PRINT BY THE APPLICANT )</p>

        <div class="mx-2 border rounded border-dark " style="height: 230.6mm;">
            <div class="row">
                <div class="col-4">
                    <div class="mx-2 align-items-center">
                        <p class="text-uppercase" style="font-size: 9px;">name of owner/applicant</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mx-2 align-items-center">
                        <p class="text-uppercase" style="font-size: 9px;">lastname firstname m.i</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mx-2 align-items-center">
                        <p class="text-uppercase" style="font-size:9px;">TIN NO.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input class="w-100 input-field" style="margin-top: -17px;" type="text" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="align-items-center">
                        <p class="text-uppercase" style="font-size: 9px;">FOR CONSTRUCTION OWNED BY AN ENTERPRISE </p>
                    </div>
                </div>
                <div class="col-4">

                </div>
                <div class="col-4">
                    <div class="align-items-center">
                        <p class="text-uppercase" style="font-size: 9px;">FORM OF OWNERSHIP</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input class="w-100 input-field" style="margin-top: -17px;" type="text" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="align-items-center">
                        <p class="text-uppercase fw-bold" style="font-size: 9px;">ADDRESS</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="align-items-center">
                        <p class="text-uppercase" style="font-size: 9px;">no. street, barangay, city/municipality</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="align-items-center">
                        <p class="text-uppercase" style="font-size: 9px;">CONTACT NO.</p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <input class="w-100 input-field" style="margin-top: -17px;" type="text" placeholder="">
                    </div>
                </div>
            </div>
            <hr class="w-100 text-dark" style="margin-top: 5px; border-top: 1.5px solid black">
            <div class="row">
                <div class="col-4">
                    <div class="align-items-center">
                        <p class="text-uppercase fw-bold" style="font-size: 9px;">location of construction: </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="align-items-center">
                        <p class="text-uppercase" style="font-size: 9px;">no. street, barangay, city/municipality</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="align-items-center">
                        <p class="text-uppercase" style="font-size:9px;">Current tax Dec no.</p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <input class="w-100 input-field" style="margin-top: -17px;" type="text" placeholder="">
                    </div>
                </div>
            </div>

            <hr class="w-100 text-dark" style="margin-top: 5px; border-top: 1.5px solid black">

            <div class="row" style="line-height: 20px;">
                <div class="col-4 mb-1">
                    <p class="mx-2 text-start text-uppercase fw-bold" style="font-size: 8px; margin-top: -10px;">Scope of Work</p>

                    <!-- Checkbox 1 -->
                    <div class="d-flex align-items-center">
                        <div class="form-check" style="margin-right: 5px;">
                            <input class="form-check-input rounded-circle" type="checkbox" value="" id="flexCheckDefault1">
                            <label class="form-check-label text-uppercase ml-1" style="font-size: 8px;" for="flexCheckDefault1">
                                NEW CONSTRUCTION
                            </label>
                        </div>
                    </div>

                    <!-- Checkbox 2 -->
                    <div class="d-flex align-items-center mt-1">
                        <div class="form-check" style="margin-right: 5px;">
                            <input class="form-check-input rounded-circle" type="checkbox" value="" id="flexCheckDefault2">
                            <label class="form-check-label text-uppercase ml-1" style="font-size: 8px;" for="flexCheckDefault2">
                                RENOVATION
                            </label>
                        </div>
                    </div>

                    <!-- Checkbox 3 -->
                    <div class="d-flex align-items-center mt-1">
                        <div class="form-check" style="margin-right: 5px;">
                            <input class="form-check-input rounded-circle" type="checkbox" value="" id="flexCheckDefault3">
                            <label class="form-check-label text-uppercase ml-1" style="font-size: 8px;" for="flexCheckDefault3">
                                RAISING
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-1">
                    <!-- Checkbox 4 -->
                    <div class="d-flex align-items-center">
                        <div class="form-check" style="margin-right: 5px;">
                            <input class="form-check-input rounded-circle" type="checkbox" value="" id="flexCheckDefault4">
                            <label class="form-check-label text-uppercase ml-1" style="font-size: 8px;" for="flexCheckDefault4">
                                ERECTION
                            </label>
                        </div>
                    </div>

                    <!-- Checkbox 5 -->
                    <div class="d-flex align-items-center mt-1">
                        <div class="form-check" style="margin-right: 5px;">
                            <input class="form-check-input rounded-circle" type="checkbox" value="" id="flexCheckDefault5">
                            <label class="form-check-label text-uppercase ml-1" style="font-size: 8px;" for="flexCheckDefault5">
                                CONVERSION
                            </label>
                        </div>
                    </div>

                    <!-- Checkbox 6 -->
                    <div class="d-flex align-items-center mt-1">
                        <div class="form-check" style="margin-right: 5px;">
                            <input class="form-check-input rounded-circle" type="checkbox" value="" id="flexCheckDefault6">
                            <label class="form-check-label text-uppercase ml-1" style="font-size: 8px;" for="flexCheckDefault6">
                                ACCESSORY
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-1">
                    <!-- Checkbox 7 -->
                    <div class="d-flex align-items-center">
                        <div class="form-check" style="margin-right: 5px;">
                            <input class="form-check-input rounded-circle" type="checkbox" value="" id="flexCheckDefault7">
                            <label class="form-check-label text-uppercase ml-1" style="font-size: 8px;" for="flexCheckDefault7">
                                ADDITION
                            </label>
                        </div>
                    </div>

                    <!-- Checkbox 8 -->
                    <div class="d-flex align-items-center mt-1">
                        <div class="form-check" style="margin-right: 5px;">
                            <input class="form-check-input rounded-circle" type="checkbox" value="" id="flexCheckDefault8">
                            <label class="form-check-label text-uppercase ml-1" style="font-size: 8px;" for="flexCheckDefault8">
                                LEGALIZATION EXISTING BUILDING
                            </label>
                        </div>
                    </div>

                    <!-- Checkbox 9 -->
                    <div class="d-flex align-items-center mt-1">
                        <div class="form-check" style="margin-right: 5px;">
                            <input class="form-check-input rounded-circle" type="checkbox" value="" id="flexCheckDefault9">
                            <label class="form-check-label text-uppercase ml-1" style="font-size: 8px;" for="flexCheckDefault9">
                                ALTERATION
                            </label>
                        </div>
                    </div>
                </div>
            </div>



            <hr class="w-100 text-dark" style="margin-top: -8px; border-top: 1.5px solid black">

            <div class="row">
                <!-- First Column: Groups A-D -->
                <div class="col-4">
                    <!-- Group A: Residential(Dwellings) -->
                    <div class="form-check">
                        <input class="form-check-input rounded-circle" type="checkbox" value="" id="flexCheckDefault7">
                        <label class="form-check-label text-uppercase fw-bold " style="font-size: 8px;" for="flexCheckDefault7">GROUP A: Residential(Dwellings)</label>
                    </div>
                    <div class="row" style="margin-left: 16px;">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" value="" id="checkbox1_1">
                                <label class="form-check-label text-uppercase " style="font-size: 8px;" for="checkbox1_1">
                                    Single
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" value="" id="checkbox1_2">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox1_2">
                                    Duplex
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" value="" id="checkbox1_3">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox1_3">
                                    Residential r-1,r-2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" value="" id="checkbox1_4">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox1_4">
                                    Others
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Group B: Residential -->
                    <div class="form-check">
                        <input class="form-check-input rounded-circle" type="checkbox" value="" id="flexCheckDefault8">
                        <label class="form-check-label text-uppercase fw-bold" style="font-size: 8px;" for="flexCheckDefault8">GROUP B: RESIDENTIAL</label>
                    </div>
                    <div class="row" style="margin-left: 16px;">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" value="" id="checkbox2_1">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox2_1">
                                    HOTEL
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" value="" id="checkbox2_2">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox2_2">
                                    DORMITORY
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" value="" id="checkbox2_3">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox2_3">
                                    Residential r-1,r-2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox2_4">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox2_4">
                                    Others
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Group C: Educational -->
                    <div class="form-check">
                        <input class="form-check-input rounded-circle" type="checkbox" value="" id="flexCheckDefault4">
                        <label class="form-check-label text-uppercase fw-bold" style="font-size: 8px;" for="flexCheckDefault4">GROUP C: EDUCATIONAL</label>
                    </div>
                    <div class="row" style="margin-left: 16px;">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox3_1">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox3_1">
                                    SCHOOL BUILDING
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox3_2">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox3_2">
                                    GYMNASIUM
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox3_3">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox3_3">
                                    CIVIC CENTER
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" value="" id="checkbox3_4">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox3_4">
                                    CHURCH, MOSQUE, TEMPLE
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Group D: Institutional -->
                    <div class="form-check">
                        <input class="form-check-input  rounded-circle" type="checkbox" value="" id="flexCheckDefault10">
                        <label class="form-check-label text-uppercase fw-bold" style="font-size: 8px;" for="flexCheckDefault10">GROUP D: Institutional</label>
                    </div>
                    <div class="row" style="margin-left: 16px;">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox4_1">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox4_1">
                                    HOSPITAL
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox4_2">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox4_2">
                                    HOME FOR THE AGED
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" value="" id="checkbox4_3">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox4_3">
                                    GOVERNMENT OFFICE
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox4_4">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox4_4">
                                    Others
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Column: Groups E-H -->
                <div class="col-4">
                    <!-- Group E: Commercial -->
                    <div class="form-check">
                        <input class="form-check-input  rounded-circle" type="checkbox" value="" id="flexCheckDefault11">
                        <label class="form-check-label text-uppercase fw-bold" style="font-size: 8px;" for="flexCheckDefault11">GROUP E: Commercial</label>
                    </div>
                    <div class="row" style="margin-left: 16px;">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox5_1">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox5_1">
                                    BANK
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox5_2">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox5_2">
                                    STORE
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox5_3">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox5_3">
                                    SHOPPING ESTABLISHMENT
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox5_4">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox5_4">
                                    Others
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Group F: Light Industrial -->
                    <div class="form-check">
                        <input class="form-check-input  rounded-circle" type="checkbox" value="" id="flexCheckDefault12">
                        <label class="form-check-label text-uppercase fw-bold" style="font-size: 8px;" for="flexCheckDefault12">GROUP F: Light Industrial</label>
                    </div>
                    <div class="row" style="margin-left: 16px;">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input rounded-circle" type="checkbox" value="" id="checkbox6_1">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox6_1">
                                    FACTORY/PLANT
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox6_2">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox6_2">
                                    Others
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Group G: Industrial Storage and Hazardous -->
                    <div class="form-check">
                        <input class="form-check-input rounded-circle" type="checkbox" value="" id="flexCheckDefault13">
                        <label class="form-check-label text-uppercase fw-bold" style="font-size: 8px;" for="flexCheckDefault13">GROUP G INDUSTRIAL STORAGE AND HAZARDOUS</label>
                    </div>
                    <div class="row" style="margin-left: 16px;">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox7_1">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox7_1">
                                    STORAGE (WAREHOUSE)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox7_2">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox7_2">
                                    FACTORY FOR HAZARDOUS
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox7_3">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox7_3">
                                    Others
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third Column: Groups I-J -->
                <div class="col-4">
                    <!-- Group H: Assembly Less Than 1000 -->
                    <div class="form-check">
                        <input class="form-check-input  rounded-circle" type="checkbox" value="" id="flexCheckDefault14">
                        <label class="form-check-label text-uppercase fw-bold" style="font-size: 8px;" for="flexCheckDefault14">GROUP H: ASSEMBLY LESS THAN 1000</label>
                    </div>
                    <div class="row" style="margin-left: 16px;">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox8_1">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox8_1">
                                    THEATER, AUDITORIUM, CONVENTION HALL
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox8_2">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox8_2">
                                    Others
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Group I: Assembly More Than 1000 -->
                    <div class="form-check">
                        <input class="form-check-input  rounded-circle" type="checkbox" value="" id="flexCheckDefault15">
                        <label class="form-check-label text-uppercase fw-bold" style="font-size: 8px;" for="flexCheckDefault15">GROUP I: ASSEMBLY MORE THAN 1000</label>
                    </div>
                    <div class="row" style="margin-left: 16px;">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox9_1">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox9_1">
                                    COLOSSEUM, SPORTS COMPLEX AND CONVENTION CENTER
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox9_2">
                                <label class="form-check-label text-uppercase " style="font-size: 8px;" for="checkbox9_2">
                                    Others
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Group J-1: Agricultural Institutional -->
                    <div class="form-check">
                        <input class="form-check-input  rounded-circle" type="checkbox" value="" id="flexCheckDefault16">
                        <label class="form-check-label text-uppercase fw-bold" style="font-size: 8px;" for="flexCheckDefault16">GROUP J-1 AGRICULTURAL: Institutional</label>
                    </div>
                    <div class="row" style="margin-left: 16px;">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox10_1">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox10_1">
                                    BARN, GRANARY, POULTRY HOUSE, PIGGERY, ETC.
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox10_2">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox10_2">
                                    Others
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Group J-2: Accessory -->
                    <div class="form-check">
                        <input class="form-check-input  rounded-circle" type="checkbox" value="" id="flexCheckDefault17">
                        <label class="form-check-label text-uppercase fw-bold" style="font-size: 8px;" for="flexCheckDefault17">GROUP J-2 ACCESSORY</label>
                    </div>
                    <div class="row" style="margin-left: 16px;">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox11_1">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox11_1">
                                    PRIVATE CARPORT, GARAGE, TOWER
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="checkbox11_2">
                                <label class="form-check-label text-uppercase" style="font-size: 8px;" for="checkbox11_2">
                                    Others
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Others (Specify) -->
            <div class="mx-4 form-check" style="margin-top: -4px;">
                <input class="form-check-input  rounded-circle" type="checkbox" value="" id="flexCheckDefault18">
                <label class="form-check-label text-uppercase fw-bold" style="font-size: 8px;" for="flexCheckDefault18">others(specify)</label>
            </div>






            <br>

            <hr class=" text-dark" style="margin-top: -4px; border-top: 1.5px solid black">

            <div class="row">
                <div class="col-md-4">
                    <!-- Column 1 Content -->
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                OCCUPANCY CLASSIFIED
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                NUMBER OF UNITS
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                NUMBER IN STOREY
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                TOTAL FLOOR AREA
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>

                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                LOT AREA
                            </label>
                        </div>
                        <input class="input-field" style="height: 20px;" type="text" placeholder="">
                    </div>



                </div>

                <div class="col-md-4">
                    <!-- Column 2 Content -->
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                Total Estimated Cost:
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                BUILDING:
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                ELECTRICAL:
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                MECHANICAL:
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                ELECTRONICS:
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                PLUMBING:
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>

                </div>

                <div class="col-md-4">
                    <!-- Column 3 Content -->
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                COST OF EQUIPMENT INSTALLED
                            </label>
                        </div>
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                P
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                P
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                P
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                P
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                P
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>

                </div>
            </div>
        </div>









        <p class="mx-3 text-uppercase fw-bold mb-0" style="font-size: 10px;">box 2 (to be accomplished by building official)</p>

        <div class="mx-2 border rounded border-dark" style="height: 50 .6mm;">
            <div class="row">
                <p class="mx-3 my-3 text-uppercase fw-bold" style="font-size: 10px;">full-time inspector and supervisor of construction works (representing the owner)</p>

                <!-- end of col -->
                <div class="row">
                    <!-- First Column -->
                    <div class="col-4">
                        <div class="col-md-12 d-flex align-items-center justify-content-center">
                            <div class="d-inline-block">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <hr class="w-100 text-center text-dark mb-0" style="border-top: 1.5px solid black;">
                                        <p class="mx-3 my-2 text-uppercase fw-bold" style="font-size: 10px;">ARCHITECT OR CIVIL ENGINEER </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mx-3">
                                            <p class="text-capitalize fw-normal mb-0" style="font-size: 10px; line-height: 0px;">(sign over printed name)</p>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mx-3">
                                            <input class="input-field-date" style="height: 20px;" type="date" placeholder="" id="sanitary_date">
                                            <p class="text-uppercase fw-bold" style="font-size: 10px;">date</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Column -->
                    <div class="col-4">
                        <div class="col-md-12">
                            <!-- Column 1 Content -->
                            <div class="d-inline-flex align-items-start justify-content-start">
                                <div class="form-check">
                                    <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                        Address
                                    </label>
                                </div>
                                <input class="input-field" style="height: 30px;" type="text" placeholder="">
                            </div>
                            <div class="d-inline-flex align-items-start justify-content-start">
                                <div class="form-check">
                                    <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                        PRC no.
                                    </label>
                                </div>
                                <input class="input-field" style="height: 30px;" type="text" placeholder="">
                            </div>
                            <div class="d-inline-flex align-items-start justify-content-start">
                                <div class="form-check">
                                    <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                        PTR NO.
                                    </label>
                                </div>
                                <input class="input-field" style="height: 30px;" type="text" placeholder="">
                            </div>
                            <div class="d-inline-flex align-items-start justify-content-start">
                                <div class="form-check">
                                    <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                        ISSUED AT.
                                    </label>
                                </div>
                                <input class="input-field" style="height: 30px;" type="text" placeholder="">
                            </div>
                        </div>
                    </div>

                    <!-- Third Column -->
                    <div class="col-4">

                        <!-- Column 2 Content -->
                        <div class="col-md-12">
                            <!-- Column 1 Content -->
                            <div class="d-inline-flex align-items-start justify-content-start">
                                <div class="form-check">
                                    <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                        VALIDITY
                                    </label>
                                </div>
                                <input class="input-field" style="height: 30px;" type="text" placeholder="">
                            </div>
                            <div class="d-inline-flex align-items-start justify-content-start">
                                <div class="form-check">
                                    <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                        DATE ISSUED
                                    </label>
                                </div>
                                <input class="input-field" style="height: 30px;" type="text" placeholder="">
                            </div>
                            <div class="d-inline-flex align-items-start justify-content-start">
                                <div class="form-check">
                                    <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                        TIN
                                    </label>
                                </div>
                                <input class="input-field" style="height: 30px;" type="text" placeholder="">
                            </div>
                        </div>

                    </div>
                </div>



                <!-- end of row -->
            </div>




            <!-- end of border 2-->
        </div>

        <p class="mx-3 text-uppercase fw-bold mb-0" style="font-size: 10px;">box 3 </p>

        <div class="mx-2 border rounded border-dark" style="height: 90 .6mm;">
            <div class="row">
                <p class="mx-3 my-3 text-uppercase fw-bold" style="font-size: 10px;">full-time inspector and supervisor of construction works (representing the owner)</p>

                <!-- end of col -->
                <div class="row">
                    <!-- First Column -->
                    <div class="col-4">
                        <p class="mx-3 my-3 text-uppercase fw-bold" style="font-size: 10px;">APPLICANT:</p>

                        <div class="col-md-12 d-flex align-items-center justify-content-center">
                            <div class="d-inline-block">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <hr class="w-100 text-center text-dark mb-0" style="border-top: 1.5px solid black;">
                                        <p class="mx-3 my-2 text-uppercase fw-bold" style="font-size: 10px;">(sign over printed name) </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="mx-3">
                                            <input class="input-field-date" style="height: 20px;" type="date" placeholder="" id="sanitary_date">
                                            <p class="text-uppercase fw-bold" style="font-size: 10px;">date</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Column -->
                    <div class="col-4">

                    </div>

                    <!-- Third Column -->
                    <div class="col-4">
                        <p class="mx-3 my-3 text-uppercase fw-bold" style="font-size: 10px;">WITH MY CONCENT:LOT OWNER AUTHORIZE REPRESENTATIVE:</p>
                        <div class="col-md-11 d-flex align-items-center justify-content-center">
                            <div class="d-inline-block">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <hr class="w-100 text-center text-dark mb-0" style="border-top: 1.5px solid black;">
                                        <p class="mx-3 my-2 text-uppercase fw-bold" style="font-size: 10px;">(sign over printed name) </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="mx-3">
                                            <input class="input-field-date" style="height: 20px;" type="date" placeholder="" id="sanitary_date">
                                            <p class="text-uppercase fw-bold" style="font-size: 10px;">date</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                    <!-- end of row -->
                </div>









                <!-- end of border 2-->
            </div>


        </div>
        <p class="mx-3 text-uppercase fw-bold mb-0" style="font-size: 10px;">box 4</p>

        <div class="mx-2 border rounded border-dark" style="height: 100 .6mm;">
            <div class="row">
                <div class="col-6">
                    <div class="d-inline-flex  justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                republic OF THE philippines CITY/MUNICIPALITY OF
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                </div>






                <!-- end of row -->
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                before me on the city /municipality of
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                </div>

                <div class="col-6">
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                on
                            </label>
                        </div>
                        <input class="input-field" style="height: 30px;" type="text" placeholder="">
                    </div>
                </div>

                <div class="col-6">
                    <div class="d-inline-flex align-items-start justify-content-start">
                        <div class="form-check">
                            <label class="form-check-label text-uppercase" style="font-size: 10px;">
                                personaly appeared the following:
                            </label>
                        </div>
                    </div>


                </div>


            </div>

            <div class="row">
                <div class="col-3">
                    <div class="col-12 text-center">
                        <hr class="w-100 text-center text-dark mb-0" style="border-top: 1.5px solid black;">
                        <p class="mx-3 my-2 text-uppercase fw-bold" style="font-size: 10px;">APplicant </p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-12 text-center">
                        <hr class="w-100 text-center text-dark mb-0" style="border-top: 1.5px solid black;">
                        <p class="mx-3 my-2 text-uppercase fw-bold" style="font-size: 10px;">gov ID </p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-12 text-center">
                        <hr class="w-100 text-center text-dark mb-0" style="border-top: 1.5px solid black;">
                        <p class="mx-3 my-2 text-uppercase fw-bold" style="font-size: 10px;">date issued </p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-12 text-center">
                        <hr class="w-100 text-center text-dark mb-0" style="border-top: 1.5px solid black;">
                        <p class="mx-3 my-2 text-uppercase fw-bold" style="font-size: 10px;">place issued </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="d-inline-block">
                        <div class="row">
                            <div class="col-12 text-center">
                                <hr class="w-100 text-center text-dark mb-0" style="border-top: 1.5px solid black;">
                                <p class="mx-3 my-2 text-uppercase fw-bold" style="font-size: 10px;">LICENSED ARCHITECT OR CIVIL ENGINEER </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mx-3">
                                    <p class="text-capitalize fw-normal mb-0" style="font-size: 10px; line-height: 0px;">(sign over printed name)</p>
                                </div>
                            </div>
                        </div><br>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-12 text-center">
                        <hr class="w-100 text-center text-dark mb-0" style="border-top: 1.5px solid black;">
                        <p class="mx-3 my-2 text-uppercase fw-bold" style="font-size: 10px;">gov ID </p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-12 text-center">
                        <hr class="w-100 text-center text-dark mb-0" style="border-top: 1.5px solid black;">
                        <p class="mx-3 my-2 text-uppercase fw-bold" style="font-size: 10px;">date issued </p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-12 text-center">
                        <hr class="w-100 text-center text-dark mb-0" style="border-top: 1.5px solid black;">
                        <p class="mx-3 my-2 text-uppercase fw-bold" style="font-size: 10px;">place issued </p>
                    </div>
                </div>
            </div>


            <div class="row">
                <p class="mx-3 text-uppercase fw-bold" style="font-size: 10px;">
                    whose signatures appear hereinabove, known to me to be the same persons who executed this standard prescribed form and acknowledged to me that the same is their free and
                    voluntary act and deed.
                </p>
            </div>




        </div>
    </div>
</div>
<!-- <script src="../js/jquery-3.6.4.js"></script> -->


<?php

if($mode == "view"){
    echo '
    <script>
    $("#prevf_unified >* ").attr("disabled","disabled")
    $("#prevf_unified >*").css("background-color","transparent")
    </script>';
}

?>
<!-- </body>

</html> -->