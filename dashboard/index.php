<?php
    require("../DAL/config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: ../account");
        die("Redirecting to ../account"); 
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AMII Admin Page</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/admin-bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/admin-font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/admin-custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.dataTables.css">
    <link href="../assets//css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../assets/js/jquery.dataTables.js"></script>
</head>
   
<body>     
    <div id="wrapper">
        <div id="page-inner">
            <?php require("main/index.php"); ?>
        </div>
    </div>
<div class="footer">
    <div class="row">
        <div class="col-lg-12" >
            &copy;  2016 AstraMarine.org | Design by: <a href="keithtaunan0014@gmail.com" style="color:#fff;" target="_blank">GummyBearXIV</a>
        </div>
    </div>
</div>
<!-- JQUERY SCRIPTS -->
<script src="../assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS -->
<script src="../assets/js/bootstrap.min.js"></script>
  <!-- CUSTOM SCRIPTS -->
<script src="../assets/js/custom.js"></script>
</body>
</html>
