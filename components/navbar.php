<style>
    #navbar {
        width: 100%;
        height: 60px;
        background-color: #245A94;
        /* position: absolute; */
    }

    #title_logo {
        display: flex;
        flex-direction: row;
        height: inherit;
    }

    #logo_container {
        height: inherit;
    }

    #logo {
        height: -webkit-fill-available;
        padding: 10px;
    }
    #navbar_title{
        margin: 0px;
        display: inline-flex;
        align-content: center;
        align-items: center;
        height: 100%;
        color:white;
        font-weight: 400;
    }

    #user-tools > div.dropdown{
        display: inline;
    }

    .my-dd-btn{
        background-color: transparent;
        border: none;
    }

    .my-dd-icon{
        height: 2em;
        /* filter:invert(1); */
    }

    .my-dd-icon:hover{
        /* filter: invert(1); */
        background-color:#376ea9;
    }
    .my-dd-btn:hover{
        /* filter: invert(1); */
        background-color:#376ea9;
    }

    .btn:first-child:active, .btn.active, .btn.show {
        background-color: #32659b;
    }

    .dropdown-toggle::after{
        content: none;
        background-color: transparent;
    }

</style>

<div id="navbar" class= "row m-0 gx-4" >

    <div id="title_logo" name = "nav_left_section" class = "col-4">
        <div id="logo_container">
            <a href="../index.php">
            <img id = "logo" src="../img/Seal_of_Nasugbu.png" alt="Seal_of_Nasugbu" >
            </a>
        </div>

        <div id="title_container">
            <h1 id = "navbar_title">BPA : NMH</h1>
        </div>

       
    </div>
    <div class="col" name = "nav_center_section" id = "nav_center_section"></div>



    <div id ="user-tools" name = "nav_right_section" class="col-4 text-end white-text my-auto d-flex-inline" >

    <!-- notifications -->
    <!-- btn btn-secondary dropdown-toggle -->
        <a class="my-dd-btn" type="button" 
        href = "../pages/applicant_home.php">
                <img src="../img/icon/home-w.png" alt="user-icon" class = "my-dd-icon">
        </a>
         <div class="dropdown">
            <button class="my-dd-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../img/icon/bell-w.png" alt="user-icon" class = "my-dd-icon">
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Your application..</a></li>
                <li><a class="dropdown-item" href="#">UPDATE!</a></li>
                <li><a class="dropdown-item" href="#">Please check your em..</a></li>
            </ul>
        </div>

    <!-- inbox -->
        <div class="dropdown">
            <button class="my-dd-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../img/icon/inbox-w.png" alt="user-icon" class = "my-dd-icon">
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Person 1</a></li>
                <li><a class="dropdown-item" href="#">Person 2</a></li>
                <li><a class="dropdown-item" href="#">Person 3</a></li>
            </ul>
        </div>

    <!-- profile -->
        <div class="btn-group drop-start">
            <button class="my-dd-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../img/icon/user-w.png" alt="user-icon" class = "my-dd-icon">
            </button>
            <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="../pages/applicant_settings.php">Profile</a></li>
                <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
                <li><a class="dropdown-item" href="../php_func/logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</div>

