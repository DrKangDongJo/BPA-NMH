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
</style>

<div id="navbar" class= "row m-0 gx-4">

    <div id="title_logo" class = "col-4">
        <div id="logo_container">
            <img id = "logo" src="../img/Seal_of_Nasugbu.png" alt="Seal_of_Nasugbu" >
        </div>

        <div id="title_container">
            <h1 id = "navbar_title">BPA : NMH</h1>
        </div>

       
    </div>



    <div class="col-4 text-end white-text my-auto" id ="user-tools">
            MESSAGES • NOTIFICATIONS • PROFILE
    </div>


   


</div>