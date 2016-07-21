<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="adjust-nav">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../">
                <img src="../assets/img/amii.ico" />
            </a>
        </div>
        <span class="logout-spn" >
                  <a href="../login/logout.php" style="color:#fff;">LOGOUT</a>  
        </span>
    </div>
</div>
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="active-link">
                <a href="#" ><i class="fa fa-desktop "></i>Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-gear "></i>Settings</a>
            </li>
        </ul>
    </div>
</nav>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
             <h2>ADMIN DASHBOARD</h2>   
            </div>
        </div>
        <hr />
        <?php require("includes/principal/index.php"); ?>
    </div> 
<!-- /. PAGE INNER  -->
</div>