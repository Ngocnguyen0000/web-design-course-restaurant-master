<?php include("partials/menu.php"); ?>


<?php
    session_start();

    if(isset($_SESSION['mySession'])){
    header('location: login.php');
}
?>


    <!-- Main Content Section Starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>DASHBOARD</h1>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Categories
            </div>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Categories
            </div>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Categories
            </div>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Categories
            </div>
        </div>


        
    </div>



    
    <div class="clearfix"></div>

    


    <!-- Main Content Section Ends -->


<?php include("partials/footer.php"); ?>
