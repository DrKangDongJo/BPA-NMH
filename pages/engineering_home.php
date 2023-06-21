<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPA | Engineering Department</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0\css\bootstrap.css">
    <link rel="stylesheet" href="../css/general.css">
    <style>
                #pop_up_nav > select{
            background-color: transparent;
            border: none;
            color:white
        }
    </style>
</head>
<body>
    
    <div class="container-fluid p-0">

    <?php require '../components/navbar.php'?>

    </div>

    <div class="main" style="padding:3%">
        <div class="row">
            <div class="col">
                <div style = "width:90%;aspect-ratio:3/1;" class="border-black my-border-8 text-center">
                    <p>TOTAL NUMBER OF APPLICATIONS</p>
                    <h1>562</h1>
                </div>
            </div>
            <div class="col">
                <div style = "width:90%;aspect-ratio:3/1;" class="border-black my-border-8 text-center">
                    <p>PENDING APPLICATION REVIEW</p>
                    <h1>2</h1>
                </div>
            </div> <div class="col">
                <div style = "width:90%;aspect-ratio:3/1;" class="border-black my-border-8 text-center">
                    <p>AVERAGE COMPLETION TIME</p>
                    <h1>30.2 MINS</h1>
                </div>
            </div> <div class="col">
                <div style = "width:90%;aspect-ratio:3/1;" class="border-black my-border-8 text-center">
                    <p>APPROVED-DENIED RATIO</p>
                    <h1>2/1</h1>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                 <p>PREDICTION FOR NEXT BUILDING CONSTRUCTION</p>
                <div style="width:100%;aspect-ratio:6/4" class= "border-black my-border-8 text-center">
                  
                </div>
            </div>
            <div class="col">
                <div class="row mb-2">
                    <p>REPORT 1</p>
                    <div style="width:100%;aspect-ratio:6/1.7" class= "border-black my-border-8 text-center ">
                    

                    </div>

                </div>
                <div class="row mt-3">
                    <p>REPORT 2</p>
                    <div style="width:100%;aspect-ratio:6/1.7" class= "border-black my-border-8 text-center">
                    

                    </div>

                </div>
        </div>


    </div>

       


<script src="../bootstrap-5.3.0/js/bootstrap.js"></script>
<script src="../dependecies/jquery-3.6.4.js"></script>
<script>
$("#title_logo").after('<div class="col text-center white-text" id ="project_title"><div class="row"><h5 class="clear-input w-100 text-center m-0 mt-2" id="">ENGINEERING DEPARTMENT</h5></div><div class="row"><p>Home - Admin <span id = "pop_up_nav"></span></p></div></div>')
$("#pop_up_nav").append('<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">'+
' <option value="">Select...</option><option value="engineering_review_board.php">Pending Applications</option><option value="https://yahoo.com">Yahoo</option></select>')

</script>
</body>
</html>