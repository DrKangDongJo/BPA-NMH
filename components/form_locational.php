<?php
$locational_id = $_SESSION["forms"]["locational"];

$locational_data = select("f_locational","id = '$locational_id'");

if ($row = mysqli_fetch_assoc($locational_data)) {
    // print_r($row);

?>



<div class="row p-5">
    <div class="row p-5 m-0 border-black">
    <div id="form_header" class="row text-center">
            <p>REPUBLIC OF THE PHILIPINES<br>
                <b>MUNICIPALITY OF NASUGBU </b> <br>
                <b>PROVINCE OF BATANGAS</b> <br>
            </p>

            <H3>APPLICATION FOR LOCATIONAL CLEARANCE</H3>


        </div>
        <div class="row my-2">
           
            <div class="col">
                <p><b>PROJECT NATURE</b></p>
            </div>
        </div>
        <div class="row my-2">
         
            <div class="col">
                <select id="project-nature-select" class="form-select mb-2"
                oninput="update_table_ajax('f_locational','project_nature',this.value,'<?php echo $locational_id?>')">
                    <option value="">Select an option</option>
                    <option value="NEW DEVELOPMENT">NEW DEVELOPMENT</option>
                    <option value="IMPROVEMENT">IMPROVEMENT</option>
                    <option value="OTHERS">OTHERS (SPECIFY)</option>
                </select>
                <input type="text" id="project-nature-others" name="others" class="mx-3 w-60 d-none" style="border:none; border-bottom: 1px solid black; outline: none;">
            </div>
        </div>

        <br>


        <div id="NUMBER_9-10">
            <div class="row">
         
                <label for="ProjectArea" class="col">PROJECT AREA(in square meters)</label>
                <label for="Lot" class="col">LOT</label>
                <label for="Building_Improvement" class="col" hidden>BUILDING IMPROVEMENT</label>
            </div>
            <div class="row">
  
                <input type="number" name="ProjectArea" id="inp_project_area" class="col" 
                onfocusout="update_table_ajax('f_locational','project_area',this.value,'<?php echo $locational_id?>')">
                <input type="text" name="Lot" id="inp_lot" class="col"
                onfocusout="update_table_ajax('f_locational','lot',this.value,'<?php echo $locational_id?>')">
                <!-- <input type="text" name="Building_Improvement" id="Building_Improvement" class="col" hidden> -->
            </div>
        </div><br><br>


        <div class="row my-2">
            <div class="col">
                <p><b>RIGHT OVER LAND</b></p>
                <select id="right-over-land-select" class="form-select mb-2" 
                oninput="update_table_ajax('f_locational','right_over_land',this.value,'<?php echo $locational_id?>')">     
                    <option value="">Select an option</option>
                    <option value="OWNER">OWNER</option>
                    <option value="LEASE">LEASE</option>
                    <option value="OTHERS">OTHERS</option>
                </select>
                <input type="text" id="right-over-land-specify" name="right-over-land-specify" class="mx-3 w-60 d-none" style="border:none; border-bottom: 1px solid black; outline: none;">
            </div>
            <div class="col">
                <p><b>PROJECT TENURE</b></p>
                <select id="project-tenure-select" class="form-select mb-2" 
                oninput="update_table_ajax('f_locational','project_tenure',this.value,'<?php echo $locational_id?>')">     
                    <option value="">Select an option</option>
                    <option value="PERMANENT">PERMANENT</option>
                    <option value="TEMPORARY">TEMPORARY </option>
                    <option value="VACANT/IDLE">VACANT/IDLE</option>
                    <option value="AGRICULTURAL">AGRICULTURAL</option>
                    <option value="TENANTED">TENANTED</option>
                    <option value="NOT TENANTED">NOT TENANTED</option>
                </select>
                <input type="text" id="project-tenure-specify" name="project-tenure-specify" class="mx-3 w-60 d-none" style="border:none; border-bottom: 1px solid black; outline: none;">
            </div>
        </div>


        <div class="row my-2">
            <div class="col">
                <p><b>EXISTING LAND USE FOR PROJECT SITE</b></p>
                <select id="existing-land-use-select" class="form-select mb-2"
                oninput="update_table_ajax('f_locational','existing_land_use',this.value,'<?php echo $locational_id?>')">
                    <option value="">Select an option</option>
                    <option value="RESIDENTIAL">RESIDENTIAL</option>
                    <option value="COMMERCIAL">COMMERCIAL</option>
                    <option value="INDUSTRIAL">INDUSTRIAL</option>
                    <option value="INSTITUTIONAL">INSTITUTIONAL</option>
                </select>
            </div>
        </div>


        <div class="row my-2">
            <div class="col">
                <p><b>PROJECT COST/CAPITALIZATION(in pesos,write int words and figures)</b></p>

            </div>

        </div>

        <div class="row my-2">
            <div class="col">
                <input id="project-cost-input" type="text" name="others" class=" w-100" style="border:none; border-bottom: 1px solid black; outline: none;">
                <!-- onfocusout="update_table_ajax('f_locational','project_cost',this.value,'<?php //echo $locational_id?>')" -->

            </div>

        </div>
        <div class="row my-2">
            <div class="col">
                <p><b>IF THE PROJECT APPLIED FOR THE SUBJECT OF THE WRITTEN NOTICE FROM
                        THIS COMMISION AND ITS DEPUTIZED ZONING ADMINISTRATOR TO THE EFFECT REQUIRING FOR THE PRESENTATION OF THE
                        LOCATIONAL CLEARANCE/CERTIFICATE OF ZONING COMPLIANCE/CZC
                    </b></p>

            </div>

        </div>

        <div class="row my-2">

            <div class="col-8">

            <div class="row">
            <div class="col">
                    <p><span><input type="radio" name="rad_written_notice" id="" class="mx-2" value = "yes"
                    onclick="update_table_ajax('f_locational','project_cost',this.value,'<?php echo $locational_id?>')"
                    ></span>YES</p>
                    
                </div>

                <div class="col">
                <p><span><input type="radio" name="rad_written_notice" id="" class="mx-2" value = "no"></span>NO</p>


                </div>
            </div>
            <div class="row">
            <p><span><input type="radio" name="rad_written_notice" id="" class="mx-2" value = "other"></span>OTHER HSRC OFFICER OF ZONING ADMINISTRATOR WHO ISSUED THE NOTICE</p>

            </div>
           
                
                <div class="col">
                    <label for="" class="my-1 mx-1">DATE OF NOTICE</label>
                    <input type="text" name="others" class="mx-3 w-60" style="border:none; border-bottom: 1px solid black; outline: none;">

                </div>
                <div class="col">
                    <label for="" class="my-1 mx-1">ORDER/REQUEST INDICATE IN THE NOTICE</label>
                    <input type="text" name="others" class="mx-3 w-60" style="border:none; border-bottom: 1px solid black; outline: none;">

                </div>
            </div>
        </div>
        <div class="row my-2">
        

            <div class="row my-3" id = "subj_similar_app">
                <div class="col-8">
                    <p><b> IS THE PROJECT APPLIED FOR THE SUBJECT OF THE SIMILAR APPLICATION WITH THE OTHER OFFICER
                            OF THE COMMISSION AND/OR DEPUTIZED ZONING ADMINISTRATOR?
                        </b></p>

                </div>


                <div class="coL-4">
                    <p><span><input type="radio" name="rad_subj_similar_app" id="" class="mx-2"></span>YES</p>
                    
                </div>
                <div class="col-4">
                <p><span><input type="radio" name="rad_subj_similar_app" id="" class="mx-2"></span>NO</p>

                </div>
            </div>

            <div class="row">
                <p><b> If Yes Please Answer the Following:
                    </b></p>

                <div class="col-8">
                    <div class="col">
                        <label for="" class="my-1 mx-1">(a)Other HSRC Office where similar application was/were filed:</label>
                        <input type="text" name="others" class="mx-3 w-60" style="border:none; border-bottom: 1px solid black; outline: none;">

                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">(b)Date Filled:</label>
                        <input type="text" name="others" class="mx-3 w-60" style="border:none; border-bottom: 1px solid black; outline: none;">

                    </div>
                    <div class="col">
                        <label for="" class="my-1 mx-1">(c)Action taken by office mentioned in (a):</label>
                        <input type="text" name="others" class="mx-3 w-60" style="border:none; border-bottom: 1px solid black; outline: none;">

                    </div>
                </div>

            </div>

            <div class="row my-2">
       


                <div class="row my-3">
                    <p><b> PREPARED MODE OF LEASE OF DECISION</b></p>
                    <div class="col-8">
                        <select id="lease-decision-mode-select" class="form-select mb-2">
                            <option value="">Select an option</option>
                            <option value="PICK-UP">PICK-UP</option>
                            <option value="BY MAIL, ADDRESS TO">BY MAIL, ADDRESS TO</option>
                            <option value="APPLICANT">APPLICANT</option>
                            <option value="AUTHORIZED REPRESENTATIVE">AUTHORIZED REPRESENTATIVE</option>
                            <option value="OTHERS">OTHERS (SPECIFY)</option>
                        </select>
                        <input type="text" id="lease-decision-mode-specify" name="lease-decision-mode-specify" class="mx-3 w-60 d-none" style="border:none; border-bottom: 1px solid black; outline: none;">
                    </div>
                </div>
            </div>

        </div>


    </div>

</div>
<script src="../js/db_operations_ajax.js"></script>
<script>

selectElement('project-nature-select', '<?php echo $row['project_nature']?>');
selectElement('inp_project_area', '<?php echo $row['project_area']?>');
selectElement('inp_lot', '<?php echo $row['lot']?>');



selectElement('existing-land-use-select', '<?php echo $row['existing_land_use']?>');

selectElement('right-over-land-select', '<?php echo $row['right_over_land']?>');
selectElement('project-tenure-select', '<?php echo $row['project_tenure']?>');
selectElement('project-cost-input', '<?php echo $row['project_cost']?>');


// function radio_set(id,value){
//     onclick='$("input[name=rad_written_notice][value=yes]").prop("checked", true);';

//     update_table_ajax('f_locational','project_cost',this.value,'<?php echo $locational_id?>')
// }



</script>

<?php
}
?>