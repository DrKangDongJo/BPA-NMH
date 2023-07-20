<?php
$unified_id = $_SESSION["forms"]["unified"];

$unified_data = select("f_unified","id = '$unified_id'");

if ($row = mysqli_fetch_assoc($unified_data)) {
    // echo "wobble wobble";
    // print_r($row);

?>

<div class="row p-5">
    <div class="row p-5 m-0 border-black">
        <div id="form_header" class="row text-center">
            <p>REPUBLIC OF THE PHILIPINES<br>
                <b>MUNICIPALITY OF NASUGBU </b> <br>
                <b>PROVINCE OF BATANGAS</b> <br>
            </p>

            <H3>UNIFIED APPLICATION FORM FOR BUILDING PERMIT</H3>


        </div>


        <div class="row my-2">
            <div class="col">
                <p><b>THIS APPLIES ALSO FOR</b></p>
            </div>
            <div class="col">
                <p><b>SCOPE OF WORK</b></p>
            </div>
        </div>
        <div class="row my-2">
            <div class="col">
                <select id="project-type-select" class="form-select mb-2">
                    <option value="">Select an option</option>
                    <option value="SIMPLE">SIMPLE</option>
                    <option value="NEW">NEW</option>
                    <option value="RENEWAL">RENEWAL</option>
                    <option value="AMENDATORY">COMPLEX</option>
                    <option value="OTHERS">OTHERS (SPECIFY)</option>
                </select>
                <input type="text" id="project-type-others" name="others" class="mx-3 w-60 d-none" style="border:none; border-bottom: 1px solid black; outline: none;">
            </div>
            <div class="col">
                <select id="project-scope-select" class="form-select mb-2"
                oninput="update_table_ajax('f_unified','scope',this.value,'<?php echo $unified_id?>')">
                    <option value="">Select an option</option>
                    <option value="NEW CONSTRUCTION">NEW CONSTRUCTION</option>
                    <option value="IMPROVEMENT">ERECTION</option>
                    <option value="ADDITION">ADDITION</option>
                    <option value="ALTERATION">ALTERATION</option>
                    <option value="RENOVATION">RENOVATION</option>
                    <option value="CONVERTION">CONVERTION</option>
                    <option value="REPAIR">REPAIR</option>
                    <option value="MOVING">MOVING</option>
                    <option value="RAISING">RAISING</option>
                    <option value="ACCESSORY BUILDING/STRUCTURE">ACCESSORY BUILDING/STRUCTURE</option>
                    <option value="LEGALIZATION OF EXISTING BUILDING">LEGALIZATION OF EXISTING BUILDING</option>
                    <option value="OTHERS">OTHERS (SPECIFY)</option>
                </select>
                <input type="text" id="project-nature-others" name="others" class="mx-3 w-60 d-none" style="border:none; border-bottom: 1px solid black; outline: none;">
            </div>
        </div>

        <br>


        <div class="row my-2">
            <p><b>USER OR CHARACTER OF OCCUPANCY</b></p>
            <div class="row">
                <div class="col">
                    <label for="group_classifier">GROUP</label>
                </div>
                <div class="col">
                    <select id="character-of-occupancy" class="form-select mb-2"
                    oninput="update_table_ajax('f_unified','character_of_occupancy',this.value,'<?php echo $unified_id?>')">
                        <option value="">Group A (INDUSTRIAL)</option>
                        <option value="NEW CONSTRUCTION">NEW CONSTRUCTION</option>
                        <option value="IMPROVEMENT">ERECTION</option>
                        <option value="ADDITION">ADDITION</option>
                    </select></div>
                <div class="col"> 
                    <select id="character-of-occupancy-2" class="form-select mb-2"
                    oninput="update_table_ajax('f_unified','character_of_occupancy',this.value,'<?php echo $unified_id?>')">
                        <option value="">SINGLE</option>
                        <option value="NEW CONSTRUCTION">DUPLEX</option>
                        <option value="IMPROVEMENT">ERECTION</option>
                        <option value="ADDITION">ADDITION</option>
                    </select></div>

            </div>


            <div class="row my-2">

                <div class="col-6">
                    <div class="col">
                        <label for="" class="my-1 mx-1">OCCUPANCY CLASSIFIED</label>
                        <input type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;">
                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">NUMBER OF UNITS</label>
                        <input id="no-of-units-input" type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;"
                        oninput="update_table_ajax('f_unified','no_of_units',this.value,'<?php echo $unified_id?>')">
                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">NUMBER OF STOREY</label>
                        <input id="no-of-storey-input" type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;"
                        oninput="update_table_ajax('f_unified','no_of_storey',this.value,'<?php echo $unified_id?>')">
                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">TOTAL FLOOR AREA </label>
                        <input id="total-floor-area-input" type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;"
                        oninput="update_table_ajax('f_unified','ttl_floor_area',this.value,'<?php echo $unified_id?>')">
                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">LOT AREA</label>
                        <input id="lot-area-input" type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;"
                        oninput="update_table_ajax('f_unified','lot_area',this.value,'<?php echo $unified_id?>')">
                    </div>
                    <div class="col my-2">
                        <label for="" class="my-1 mx-1">PROPOSED DATE OF CONSTRUCTION</label>
                        <div class="row">
                            <div class="input-group date" id="datepicker">
                                <input id="proposed-start-date" type="date" class="form-control" id="date" 
                                oninput="update_table_ajax('f_unified','proposed_start',this.value,'<?php echo $sanitary_id?>')"/>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="col my-2">
                        <label for="" class="my-1 mx-1">EXPECTED DATE OF COMPLETION</label>
                        <div class="row">
                            <div class="input-group date" id="datepicker">
                                <input id="estimated-finish-date" type="date" class="form-control" id="date" 
                                oninput="update_table_ajax('f_unified','est_finish',this.value,'<?php echo $sanitary_id?>')"/>
                                
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-6">
                    <div class="col">
                        <label for="" class="my-1 mx-1">TOTAL ESTIMATED COST: P</label>
                        <input id="total-estimated-cost-input" type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;"
                        oninput="update_table_ajax('f_unified','ttl_est_cost',this.value,'<?php echo $unified_id?>')">
                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">BUILDING</label>
                        <input type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;">
                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">ELECTRICAL</label>
                        <input type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;">
                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">MECHANICAL</label>
                        <input type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;">
                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">ELECTRONICS</label>
                        <input type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;">
                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">PLUMBING</label>
                        <input type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;">
                    </div>

                </div>



            </div>

            <div class="row my-3">
                <p><b>COST OF EQUIPMENT INSTALLED</b></p>

                <div class="col-6">
                    <div class="col">
                        <label for="" class="my-1 mx-1">P</label>
                        <input type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;">
                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">P</label>
                        <input type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;">
                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">P</label>
                        <input type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;">
                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">P </label>
                        <input type="text" name="" class="mx-1 w-20" style="border:none; border-bottom: 1px solid black; outline: none;">
                    </div>
                </div>





            </div>
        </div>
    </div>
</div>

    <script src="../js/db_operations_ajax.js"></script>
    <script>

        selectElement('character-of-occupancy-2', '<?php echo $row['character_of_occupancy']?>');
        selectElement('character-of-occupancy', '<?php echo $row['character_of_occupancy']?>');
        selectElement('project-scope-select', '<?php echo $row['scope']?>');
        selectElement('no-of-units-input', '<?php echo $row['no_of_units']?>');
        selectElement('no-of-storey-input', '<?php echo $row['no_of_storey']?>');
        selectElement('total-floor-area-input', '<?php echo $row['ttl_floor_area']?>');
        selectElement('lot-area-input', '<?php echo $row['lot_area']?>');
        selectElement('total-estimated-cost-input', '<?php echo $row['ttl_est_cost']?>');
        selectElement('proposed-start-date', '<?php echo $row['proposed_start']?>');
        selectElement('estimated-finish-date', '<?php echo $row['est_finish']?>');


    </script>

<?php
}
?>