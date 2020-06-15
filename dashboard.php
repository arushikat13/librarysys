<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | User Dash Board</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>

<html>
<body>


<img src="assets/img/welcome.jpeg" alt="Welcome,user!" width="1500" height="333">

</body>
</html>





<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <u><h4 class="header-line" h4 style="font-family:arial;" h4 style="font-size:300%" >User DASHBOARD</h4></u>
                
                            </div>

        </div>
        

             
        <button type="UPLOAD YOUR DOCUMENTS" form="nameform" value="UPLOAD YOUR DOCUMENT">UPLOAD YOUR DOCUMENTS</button>
        <form action="admin/upload.php" method="get" id="nameform">

        <h5 class="header-line" h5 style="font-family:arial;" h5 style="font-size:300%">CLICK BELOW TO VIEW THE DOCUMENTS AVAILABLE-------------------------------------
                                                                                         |
                                                                                         |
                                                                                         |
                                                                                        \|/                                                                                         |/
</h5>
        <div id="button"><a href="DOWNLOAD.php">DOCUMENTS AVAILABLE TO VIEW OFFLINE</a></div>

</form>
    </div>
    </div>

    


     <!-- CONTENT-WRAPPER SECTION END-->
<?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php } ?>
