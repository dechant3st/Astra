<?php 
    require("../DAL/config.php"); 
    $submitted_username = ''; 
    if(!empty($_POST)){ 
        $query = " 
            SELECT 
                id, 
                username, 
                password, 
                salt, 
                email 
            FROM users 
            WHERE 
                username = :username 
        "; 
        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 
         
        try{ 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $login_ok = false; 
        $row = $stmt->fetch(); 
        if($row){ 
            $check_password = hash('sha256', $_POST['password'] . $row['salt']); 
            for($round = 0; $round < 65536; $round++){
                $check_password = hash('sha256', $check_password . $row['salt']);
            } 
            if($check_password === $row['password']){
                $login_ok = true;
            } 
        } 

        if($login_ok){ 
            unset($row['salt']); 
            unset($row['password']); 
            $_SESSION['user'] = $row;  
            header("Location: ../"); 
            die("Redirecting to: ../"); 
        } 
        else { 
            //print("Login Failed.");
            if(isset($_POST['username'])) {
                $_SESSION['errors'] = array("Your username or password was incorrect.");
            }
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
        } 
    } 
?> 
<!-- Author: Michael Milstead / Mode87.com
     for Untame.net
     Bootstrap Tutorial, 2013
-->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
    <title>AMII</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/login-style.css" />
    <!-- Google Font -->
    <link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core CSS -->
    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery Library -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/creative.css" type="text/css">
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JS -->
    <script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
     <nav id="mainNav" class="navbar navbar-default navbar-fixed-top ">
        <div class="container-fluid" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="../" ><span class="fa fa-ship" aria-hidden="true"  ></span>  Astra Marine International Inc.</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="header-content">
            <section class="container">
                <section class="login-form">
                    <h4>Sign in with your Astra Account</h4>
                    <form method="post" action="../login/" role="login">
                        
                        <img src="../assets/img/user.png" alt="" />
                        <?php if (isset($_SESSION['errors'])): ?>
                            <div class="form-errors">
                                <?php foreach($_SESSION['errors'] as $error): ?>
                                    <p><?php echo $error ?></p>
                                <?php endforeach; ?>
                                <?php unset($_SESSION['errors']); ?>
                            </div>
                        <?php endif; ?>
                        <input type="text" name="username" required placeholder="User Name" class="form-control input-lg" value="<?php echo $submitted_username; ?>" />
                        <input type="password" name="password" required placeholder="Password" class="form-control input-lg" />
                        <button type="submit" name="go" class="btn btn-block btn-info">Sign in</button>
                    <!--	<input type="checkbox" name="remember" value="1" checked /> Stay signed in -->
                    <!--	<a href="#" class="pull-right">Need help?</a>
                    </form>-->
                    </section>
            </section>
        </div>
    </header>
    <div class="container">
        <table class="table well table-hover">
            <caption>Goverment Related Links</caption>
            <thead>
                <tr>
                    <th><center>POEA</center></th>
                    <th><center>TESDA</center></th> 
                    <th><center>DFA</center></th>
                    <th><center>DOLE</center></th>
                    <th><center>PRC</center></th>
                </tr>
            </thead>
            <tbody>
                <tr class="success">
                    <td align="center"><a href="http://www.poea.gov.ph"><img alt="POEA" src="../assets/img/portfolio/poea_png.png" style="width: 70px; height: 70px;" title="POEA" /></td>
                    <td align="center"><a href="http://www.tesda.gov.ph"><img alt="TESDA" src="../assets/img/portfolio/tesda_png.png" style="width: 70px; height: 70px;" title="TESDA" /></td>
                    <td align="center"><a href="http://www.dfa.gov.ph"><img alt="DFA" src="../assets/img/portfolio/dfa_png.png" style="width: 70px; height: 70px;" title="DFA" /></a></td>
                    <td align="center"><a href="http://www.dole.gov.ph"><img alt="DOLE" src="../assets/img/portfolio/dole_png.png" style="width: 70px; height: 70px;" title="DOLE" /></a></td>
                    <td align="center"><a href="http://www.prc.gov.ph"><img alt="PRC" src="../assets/img/portfolio/prc_png.png" style="width: 70px; height: 70px;" title="PRC" /></a></td>

                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

