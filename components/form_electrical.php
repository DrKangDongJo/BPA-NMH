<div class="row p-5">
    <div class="row p-5 m-0 border-black">
        <!-- SCOPE OF WORK -->
        <div id="scope_of_work">
            <div class="row my-2">
                <div class="col-12">
                    <p class="my-2"><b>SCOPE OF WORK</b></p>
                    <select id="scope-select" class="form-select form-select-sm mb-2">
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
                    <label for="totalconload" class="col">TOTAL CONNECTED LOAD</label>
                    <input type="text" name="others" class="mx-2 w-50" style="border:none; border-bottom: 1px solid black; outline: none; ">
                </div>
                <div class="col-4">
                    <label for="totaltransCapacity" class="col">TOTAL TRANSFORMERS CAPACITY</label>
                    <input type="text" name="others" class="mx-4 w-50" style="border:none; border-bottom: 1px solid black; outline: none;">
                </div>

                <div class="col-4">
                    <label for="totalgenerator" class="col">TOTAL GENERATOR/UPS CAPACITY</label>
                    <input type="text" name="others" class="mx-4 w-50" style="border:none; border-bottom: 1px solid black; outline: none;">
                </div>


            </div>


        </div>

    </div>


</div>