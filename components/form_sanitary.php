<div class="row p-5">
    <div class="row p-5 m-0 border-black">
    <div class="row">
        <div class="col-sm-4">
            <p><b>SCOPE OF WORK</b></p>
            <div class="form-check mx-4">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  NEW INSTALLATION
                </label>
            </div>
        </div>
        <div class="col-sm-4 my-3">
            <div class="d-flex">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="showInput1" data-target="textInputContainer1">
                    <label class="form-check-label" for="showInput1">ADDITION OF</label>
                  </div>
                  <div class="flex-grow-1">
                    <div class="mx-3" id="textInputContainer1" style="display: none;">
                        <input type="text" class="form-control input-text-outline w-50" id="textInput1">
                      </div>
                  </div>    
            </div>
            
              <div class="d-flex my-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="showInput2" data-target="textInputContainer2">
                    <label class="form-check-label" for="showInput2">REPAIR OF</label>
                  </div>
                  <div class="flex-grow-1">
                    <div class="mx-3" id="textInputContainer2" style="display: none;">
                        <input type="text" class="form-control input-text-outline w-50 mx-2" id="textInput2">
                      </div>
                  </div>
              </div>

              <div class="d-flex my-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="showInput3" data-target="textInputContainer3">
                    <label class="form-check-label" for="showInput3">REMOVAL OF</label>
                  </div>
                  <div class="flex-grow-1">
                    <div class="mx-3" id="textInputContainer3" style="display: none;">
                        <input type="text" class="form-control input-text-outline w-50" id="textInput3">
                      </div>
                  </div>
              </div>
        </div>
        <div class="col-sm-4 my-3">
            <p>OTHERS(specify)</p>
            <div class="d-flex my-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="showInput4" data-target="textInputContainer4">
                    
                  </div>
                  <div class="flex-grow-1">
                    <div class="mx-3" id="textInputContainer4" style="display: none;">
                        <input type="text" class="form-control input-text-outline w-50" id="textInput4">
                    </div>
                </div>
            </div>

            <div class="d-flex my-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="showInput5" data-target="textInputContainer5">
                    
                  </div>
                  <div class="flex-grow-1">
                    <div class="mx-3" id="textInputContainer5" style="display: none;">
                        <input type="text" class="form-control input-text-outline w-50" id="textInput5">
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        <div class="row">
            <div class="col">
                <div class="row my-2">
                    <p><b>USE OR TYPE OF OCCUPANCY</b></p>
                    <div class="col">
                        <select id="occupancy-select" class="form-select mb-2">
                            <option value="">Select an option</option>
                            <option value="RESIDENTIAL">RESIDENTIAL</option>
                            <option value="COMMERCIAL">COMMERCIAL</option>
                            <option value="INDUSTRIAL">INDUSTRIAL</option>
                            <option value="INSTITUTIONAL">INSTITUTIONAL</option>
                            <option value="AGRICULTURAL">AGRICULTURAL</option>
                            <option value="PARKS">PARKS, PLAZAS, MONUMENTS</option>
                            <option value="RECREATIONAL">RECREATIONAL</option>
                            <option value="OTHERS">OTHERS (SPECIFY)</option>
                        </select>
                        <button id="add-occupancy-btn" class="btn my-btn-blue btn-block">Add</button>
                    </div>

                </div>
            </div>

            <div class="col">
                <div class="row my-2">
                    <p><b>FIXTURES TO BE INSTALLED</b></p>
                    <div class="col-12">
                        <select id="fixtures-select" class="form-select mb-2">
                            <option value="">Select an option</option>
                            <option value="WATER CLOSET">WATER CLOSET</option>
                            <option value="FLOOR DRAIN">FLOOR DRAIN</option>
                            <option value="LAVATORIES">LAVATORIES</option>
                            <option value="KITCHEN SINK">KITCHEN SINK</option>
                            <option value="FAUCET">FAUCET</option>
                            <option value="SHOWER HEAD">SHOWER HEAD</option>
                            <option value="WATER METER">WATER METER</option>
                            <option value="GREASE TRAP">GREASE TRAP</option>
                            <option value="BATH TUBS">BATH TUBS</option>
                            <option value="SLOP SINK">SLOP SINK</option>
                            <option value="URINAL">URINAL</option>
                            <option value="AIR CONDITIONING UNIT">AIR CONDITIONING UNIT</option>
                            <option value="WATER TANK/RESERVOIR">WATER TANK/RESERVOIR</option>
                            <option value="BIDETTE">BIDETTE</option>
                            <option value="LAUNDRY TRAYS">LAUNDRY TRAYS</option>
                            <option value="DENTAL CUSPIDOR">DENTAL CUSPIDOR</option>
                            <option value="GAS HEATER">GAS HEATER</option>
                            <option value="ELECTRICAL HEATER">ELECTRICAL HEATER</option>
                            <option value="WATER BOILER">WATER BOILER</option>
                            <option value="DRINKING FOUNTAIN">DRINKING FOUNTAIN</option>
                            <option value="BAR SINK">BAR SINK</option>
                            <option value="SODA FOUNTAIN SINK">SODA FOUNTAIN SINK</option>
                            <option value="LABORATORY SINK">LABORATORY SINK</option>
                            <option value="STERILIZER">STERILIZER</option>
                            <option value="SWIMMING POOL">SWIMMING POOL</option>
                            <option value="OTHERS">OTHERS (SPECIFY)</option>
                        </select>
                        <button id="add-fixtures-btn" class="btn my-btn-blue btn-block">Add</button>
                        <input type="text" id="others-text" name="others" class="mx-3 w-10 d-none" style="border:none; border-bottom: 1px solid black; outline: none;">
                    </div>
                </div>
            </div>
        </div>





        <div class="row">
            <div class="col">
                <p class="my-4"><b>WATER SUPPLY</b></p>
                <div id="water-supply-container">
                    <select class="form-select mb-2" name="water-supply">
                        <option value="">Select an option</option>
                        <option value="SHALLOW WELL">SHALLOW WELL</option>
                        <option value="DEEP WELL & PUMP SET">DEEP WELL & PUMP SET</option>
                        <option value="CITY/MUNICIPAL WATER SYSTEM">CITY/MUNICIPAL WATER SYSTEM</option>
                        <option value="OTHERS">OTHERS</option>
                    </select>
                    <input type="text" name="others" class="mx-3 w-10 d-none" style="border:none; border-bottom: 1px solid black; outline: none;">
                </div>
                <button id="add-water-supply-btn" class="btn my-btn-blue">Add</button>
            </div>

            <div class="col">
                <p class="my-4"><b>SYSTEM OF DISPOSAL</b></p>
                <div id="disposal-container">
                    <select class="form-select mb-2" name="disposal">
                        <option value="">Select an option</option>
                        <option value="WASTE WATER TREATMENT PLANT">WASTE WATER TREATMENT PLANT</option>
                        <option value="SEPTIC VAULT/IMHOPE TANK">SEPTIC VAULT/IMHOPE TANK</option>
                        <option value="SANITARY SEWER CONNECTION">SANITARY SEWER CONNECTION</option>
                        <option value="SUB-SURFACE SAND FILTER">SUB-SURFACE SAND FILTER</option>
                        <option value="OTHERS">OTHERS</option>
                    </select>
                    <input type="text" name="others" class="mx-3 w-10 d-none" style="border:none; border-bottom: 1px solid black; outline: none;">
                </div>
                <button id="add-disposal-btn" class="btn my-btn-blue">Add</button>


            </div>
        </div>


        <div class="row">
            <div class="col">

                <div class="row">
                    <p class="my-4">NUMBER OF STOREYS OF BUILDING</p>
                </div>
                <div class="row"><input type="text" name="storeys" class="mx-5 w-50 d-flex" style="border:none; border-bottom: 1px solid black; outline: none;">
                </div>


            </div>
            <div class="col">


                <div class="row">
                    <p class="my-4">TOTAL AREA OF BUILDING SUBDIVISION</p><br>
                </div>
                <div class="row">
                    <p style="margin-right: 10px" class="my-0"><span><input type="text" name="area" class="mx-1 w-50 " style="border:none; border-bottom: 1px solid black; outline: none;"></span>SQ. M</p>
                </div>


            </div>


        </div>


        <div class="row">
            <div class="col">
                <div class="row">
                    <p class="my-3 mx-1 ">PROPOSED DATE <br> START OF INSTALLATION</p>


                </div>
                <div class="row">
                    <input type="text" name="start-date" class="mx-5 w-50" style="border:none; border-bottom: 1px solid black; outline: none; margin-top: 10px">

                </div>

            </div>
            <div class="col">
                <div class="row">

                    <p class="my-3 mx-1">EXPECTED DATE <br> OF COMPLETION</p>

                </div>
                <div class="row">
                    <input type="text" name="completion-date" class="mx-5 w-50" style="border:none; border-bottom: 1px solid black; outline: none;">


                </div>


            </div>
        </div>



        <div class="row">

            <p class="my-4">TOTAL COST <br> OF INSTALLATION ₱</p>
            <input type="text" name="cost" class="mx-1 w-50" style="border:none; border-bottom: 1px solid black; outline: none; margin-top: 10px">


        </div>



    </div>
</div>