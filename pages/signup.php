<?php
$page_title = "Signup | BPANMH";

// require '../php_func/session_check.php';
// privilege_keeping("applicant","engineering_home.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('../php_func/header_temp.php') ?>


</head>

<style>
    .signin-cont {
        background-color: #5A8BB5;
        min-width: 500px;
        min-height: 700px;
        max-width: 400px;
        max-height: 600px;
        border-radius: 10px;
        /* position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%); */
        padding: 2%;

    }


    
#regForm {
  background-color: #245A94;
  margin: 100px auto;
  /* font-family: Raleway; */
  padding: 40px;
  width: 70%;
  min-width: 300px;
  border-radius: 10px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>

<body>

    <div class="container-fluid">


        <div class="row">
            <?php require('../components/navbar.php') ?>
        </div>

        <form id="regForm" action="">

            <h1>Signup</h1>

            <!-- One "tab" for each step in the form: -->
            <div class="tab">

                <div class="row">
                    <label for="firstname" class="text-light">First name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" required>
                </div>
                <div class="row">
                    <label for="lastname" class="text-light">Last name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required>
                </div>
                <div class="row">
                    <label for="middlename" class="text-light">Middle Name</label>
                    <input type="text" name="middlename" id="middlename" class="form-control" required>
                </div>

            </div>

            <div class="tab">

                <div class="mb-1 mt-1 mx-2">

                    <label for="" class="Province" style="font-size: small;">Region<i>(Rehiyon)</i></label>
                    <select class="select box form-select" onchange='select_region();' id="input_region">

                    </select>
                </div>
                <div class="mb-1 mt-1 mx-2">

                    <label for="" class="Province" style="font-size: small;">Province<i>(Probinsya)</i></label>
                    <select class="select box form-select" onchange='select_province();' id="input_province">

                    </select>
                </div>

                <div class="mb-1 mt-1 mx-2">
                    <style>

                    </style>
                    <label for="" class="Municipality" style="font-size: small;">Municipality/City <i>(Bayan)</i></label>

                    <select class="select box form-select position-relative" onchange='select_city();' id="input_city">
                    </select>
                </div>
            </div>

            <div class="tab">
                <div class="row my-2">
                    <label for="email_add" class="text-light">Email Address</label>
                    <input type="text" name="email_add" id="email_add" class="form-control" required>
                </div>
                <div class="row my-2">
                    <label for="contact_no" class="text-light">Contact no</label>
                    <input type="text" name="contact_no" id="contact_no" class="form-control" required>
                </div>
            </div>

            <div class="tab">

            <div class="row my-2">
                    <label for="username" class="text-light">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
            <div class="row my-2">
            <label for="password" class="text-light">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="row my-2">
            <label for="c_password" class="text-light">Confirm Password</label>
            <input type="password" name="c_password" id="c_password" class="form-control" required>
        </div>
            </div>

            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>

            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>

        </form>

     


        



        <script src="../js/jquery-3.6.4.js"></script>
        <script>
            $("#user-tools").attr('hidden', 'hidden')
        </script>


    </div>

    <!--1. basics - fname,l,m-->
    <!-- 2. address -->
    <!-- 3. username,pass,email -->
    <!-- opt. email confirmation otp -->
    <!-- 4. profile -->
    <!-- helloo -->
    <!-- hellooo -->

</body>

<script src="../js/get_address.js"></script>
<script src="../js/jquery-3.6.4.js"></script>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

</script>

</html>