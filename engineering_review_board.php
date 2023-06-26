<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPA | Engineering Department</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0\css\bootstrap.css">
    <link rel="stylesheet" href="../css/general.css">

    <style>
        td,thead{
            padding:3px;
        }
        thead{
            font-weight: bold;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid p-0">

    <?php require '../components/navbar.php'?>

    </div>

    <div class="main" style="padding:6%">
        <div class="row text-end">
            <div class="col">
                <h1 class ="text-center">PENDING</h1>
            </div>
            <div class="col">
                <input type="text" name="" id="" placeholder="search" class ="w-auto">
            </div>
        </div>

        <div class="row">
        <table class ="text-center border-black">
            <thead>
                <td>APPLICANT</td>
                <td>DATE APPLIED</td>
                <td>APPLICATION TYPE</td>
            </thead>
            <tr>
                <td>LORENZ ANGELO GUILLERO</td>
                <td>JUNE 20,2023</td>
                <td>SIMPLE</td>
            </tr>
            <tr>
                <td>REIGNOEL RODRIGUEZ</td>
                <td>JUNE 20,2023</td>
                <td>COMPLEX</td>
            </tr>
        </table>
        </div>

        

    </div>

       


<script src="../bootstrap-5.3.0/js/bootstrap.js"></script>
<script src="../dependecies/jquery-3.6.4.js"></script>
<script>
$("#title_logo").after('<div class="col text-center white-text" id ="project_title"><div class="row"><h5 class="clear-input w-100 text-center m-0 mt-2" id="">ENGINEERING DEPARTMENT</h5></div><div class="row"><p>Home - Admin <span>•••</span></p></div></div>')

</script>
</body>
</html>