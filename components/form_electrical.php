<?php
// session_start();
// print_r($_SESSION);

// echo $_SESSION["forms"]["electrical"];

$electrical_id = $_SESSION["forms"]["electrical"];

$electrical_data = select("f_electrical","id = '$electrical_id'");

if ($row = mysqli_fetch_assoc($electrical_data)) {
    // print_r($row);

?>

<div class="row p-5">
    <!-- dyurdurdyud -->
    <div class="row p-5 m-0 border-black">

    <div id="form_header" class="row text-center">
            <p>REPUBLIC OF THE PHILIPINES<br>
                <b>MUNICIPALITY OF NASUGBU </b> <br>
                <b>PROVINCE OF BATANGAS</b> <br>
            </p>

            <H3>ELECTRICAL PERMIT</H3>


        </div>

        <!-- SCOPE OF WORK -->
        <div id="scope_of_work">
            <div class="row my-2">
                <div class="col-12">
                    <p class="my-2"><b>SCOPE OF WORK</b></p>
                    

                    <select id="scope-select" class="form-select form-select-sm mb-2" 
                    oninput="update_table_ajax('f_electrical','scope',this.value,'<?php echo $electrical_id?>')">
                        <option value="">Select an option</option>
                        <option value="NEW INSTALLATION">NEW INSTALLATION</option>
                        <option value="ANNUAL INSPECTION">ANNUAL INSPECTION</option>
                        <option value="TEMPORARY">TEMPORARY</option>
                        <option value="RECONNECTION OF SERVICE ENTRANCE">RECONNECTION OF SERVICE ENTRANCE</option>
                        <option value="SEPARATION OF SERVICE ENTRANCE">SEPARATION OF SERVICE ENTRANCE</option>
                        <option value="UPGRADING OF SERVICE ENTRANCE">UPGRADING OF SERVICE ENTRANCE</option>
                        <option value="RELOCATION OF SERVICE ENTRANCE">RELOCATION OF SERVICE ENTRANCE</option>
                        <option value="OTHER">OTHER (Specify)</option>
                    </select>
                    <input type="text" name="others" class="mx-5 w-50 d-none" style="border:none; border-bottom: 1px solid black; outline: none;">
                </div>
            </div>
            <button id="add-scope-btn" class="btn btn-primary">Add</button>
        </div>



        <!-- SUMMARY OF ELECTRICAL LOADS/CAPACITIES APPLIED FOR -->
        <div class="row my-2">
            <h6 class="text-center"><b>SUMMARY OF ELECTRICAL LOADS/CAPACITIES APPLIED FOR</b></h6>
            <div class="row">
                <div class="col-4">
                    <label for="inp_total_load" class="col">TOTAL CONNECTED LOAD</label>
                    <input type="number" id = "inp_total_load" name="inp_total_load" 
                    class="mx-2 w-50" style="border:none; border-bottom: 1px solid black; outline: none;"
                    value = "<?php echo $row['ttl_conn_load']?>" 
                    oninput="update_table_ajax('f_electrical','ttl_conn_load',this.value,'<?php echo $electrical_id?>')">
                </div>
                <div class="col-4">
                    <label for="inp_total_transformer" class="col">TOTAL TRANSFORMERS CAPACITY</label>
                    <input type="number" id = "inp_total_transformer"name="inp_total_transformer" 
                    class="mx-4 w-50" style="border:none; border-bottom: 1px solid black; outline: none;"
                    value = "<?php echo $row['ttl_transformer_cap']?>"
                    oninput="update_table_ajax('f_electrical','ttl_transformer_cap',this.value,'<?php echo $electrical_id?>')">
                </div>

                <div class="col-4">
                    <label for="inp_generator_capacity" class="col">TOTAL GENERATOR/UPS CAPACITY</label>
                    <input type="number" id ="inp_generator_capacity" name="inp_generator_capacity" 
                    class="mx-4 w-50" style="border:none; border-bottom: 1px solid black; outline: none;"
                    value = "<?php echo $row['ttl_generator_cap']?>"
                    oninput="update_table_ajax('f_electrical','ttl_generator_cap',this.value,'<?php echo $electrical_id?>')">
                </div>


            </div>


        </div>

    </div>


</div>
<script src="../js/db_operations_ajax.js"></script>
<script>

selectElement('scope-select', '<?php echo $row['scope']?>');



</script>

<?php
}

?>