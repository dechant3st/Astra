<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>AMII</title>
        <link rel="icon" href="amii.ico">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.caom/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/creative.css" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body id="page-top">

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
                    <a class="navbar-brand page-scroll" href="#page-top" ><span class="fa fa-ship" aria-hidden="true"  ></span>  Astra Marine International Inc.</a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">Services</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio">Portfolio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                        <?php 
                            if(empty($_SESSION['user'])) {
                                echo '<li><a class="page-scroll" href="login/">Sign In</a></li>';
                            }
                            else {
                                echo '<li><a class="page-scroll" href="dashboard/">Dashboard</a></li>';
                                echo '<li><a class="page-scroll" href="login/logout.php">Sign Out</a></li>';
                            }
                        ?>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <h1>Where personal touch to our Seafarers is a Standard.</h1>
                    <hr>
                    <!--  <p>A Manning Agency  with SEC Registration No. 183060 filed on  October 25, 1990 and affixed on October 29, 1990.
                         A Manning Agency who are licensed to process applicants to work abroad.</p> -->
                    <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
                </div>
            </div>
        </header>

        <section class="bg-primary" id="about" >
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">We've got what you need!</h2>
                        <hr class="light">
                        <p class="text-faded">A Manning Agency  with SEC Registration No. 183060 filed on  October 25, 1990 and affixed on October 29, 1990.
                            A Manning Agency licensed to process applicants to work abroad.</p>
                        <a href="download.html" class="btn btn-default btn-xl">Apply Now!</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">We are highly committed to the following:</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-6 text-center">
                        <div class="service-box">
                            <i   class="fa fa-4x   fa-plus-square  wow bounceIn text-primary"></i>
                            <h3></h3>
                            <p class="text-muted">
                                To consistently provide Principals with highly qualified, competent and medically fit seafarers.

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".1s"></i>
                            <h3></h3>
                            <p class="text-muted">
                                To consistently provide services that will meet customer satisfaction and are applicable to statutory and regulatory requirements both local and international.

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-thumbs-o-up wow bounceIn text-primary" data-wow-delay=".2s"></i>
                            <h3></h3>
                            <p class="text-muted">
                                To provide services with "personal human touch" to our seafarers and families.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x glyphicon glyphicon-pencil wow bounceIn text-primary" data-wow-delay=".3s"></i>
                            <h3></h3>
                            <p class="text-muted">
                                To continuously transact business with the stake holders with a good sense of purpose and maintain its harmonious relationship with them.  

                            </p>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-flag wow bounceIn text-primary" data-wow-delay=".3s"></i>
                            <h3></h3>
                            <p class="text-muted">
                                To continuosly implement and maintain the organization's quality management system and develop its continual improvement.
                            </p>
                        </div>
                    </div>


                </div> <!--row -->
            </div> <!--container -->
        </section>

        <section class="no-padding" id="portfolio">
            <div class="container-fluid">
                <div class="row no-gutter">
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="assets/img/portfolio/VL1Z.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        COSMIC MARITIME CORP
                                        <h6>MV Volans Leader </h6>
                                    </div>
                                    <div class="project-name">

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="assets/img/portfolio/CH1.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        COSMIC MARITIME CORP
                                         <h6>MV Columbia Highway </h6>
                                    </div>
                                    <div class="project-name">
                                        <!--    Project Name -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="assets/img/portfolio/KG1.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        TOEI JAPAN LTD
                                         <h6>MV Kobe Gloria </h6>
                                    </div>
                                    <div class="project-name">

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="assets/img/portfolio/ST1.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        FS MARITIME CORP
                                         <h6>MV Santa Paulina</h6>
                                    </div>
                                    <div class="project-name">

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="assets/img/portfolio/CHAV1.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        FS MARITIME CORP
                                         <h6>MV Chavin Queen</h6>
                                    </div>
                                    <div class="project-name">

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="#" class="portfolio-box">
                            <img src="assets/img/portfolio/ZZ.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        TOEI JAPAN LTD
                                         <h6>MV Shoei Prosperity </h6>
                                    </div>
                                    <div class="project-name">

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <aside class="bg-dark">
            <div class="container text-center">
                <div class="call-to-action">
                    <!--    <h2>Free Download at Start Bootstrap!</h2>
                        <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a> -->
                </div>
            </div>
        </aside>

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Let's Get In Touch!</h2>
                        <hr class="primary">
                        <p>Ready to start your next career with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2 text-center">

                        <i class="fa fa-phone fa-3x wow bounceIn"></i>
                        <p>524-7521 / 524-4280</p>
                    </div>

                    <div class="col-lg-4 text-center">
                        <i class="fa fa-road fa-3x wow bounceIn" data-wow-delay=".1s" aria-hidden="true"></i>
                        <p>12th Floor, Jemarsons Place 1626 Pilar Hidalgo Lim St. Malate, Manila</p>

                        <p> </p>
                    </div>


                    <div class="col-lg-12 text-center">
                        <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                        <p><a href="mailto:your-email@your-domain.com">amii@astramarine.net</a></p>
                    </div>
                </div>
            </div>
        </section>

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
                        <td align="center"><a href="http://www.poea.gov.ph"><img alt="POEA" src="assets/img/portfolio/poea_png.png" style="width: 70px; height: 70px;" title="POEA" /></td>
                        <td align="center"><a href="http://www.tesda.gov.ph"><img alt="TESDA" src="assets/img/portfolio/tesda_png.png" style="width: 70px; height: 70px;" title="TESDA" /></td>
                        <td align="center"><a href="http://www.dfa.gov.ph"><img alt="DFA" src="assets/img/portfolio/dfa_png.png" style="width: 70px; height: 70px;" title="DFA" /></a></td>
                        <td align="center"><a href="http://www.dole.gov.ph"><img alt="DOLE" src="assets/img/portfolio/dole_png.png" style="width: 70px; height: 70px;" title="DOLE" /></a></td>
                        <td align="center"><a href="http://www.prc.gov.ph"><img alt="PRC" src="assets/img/portfolio/prc_png.png" style="width: 70px; height: 70px;" title="PRC" /></a></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!--jquery -->
    <script src ="assets/js/jquery.js"></script>

    <!--Bootstrap Core Javascrpt -->
    <script src = "assets/js/bootstrap.min.js"></script>

    <!--plugin javascript -->
    <script src= "assets/js/jquery.easing.min.js"></script>
    <script src= "assets/js/jquery.fittext.js"></script>
    <script src= "assets/js/wow.min.js"></script>
    <script src= "assets/js/creative.js"></script>


</body>

</html>
<!-- On rows -->
