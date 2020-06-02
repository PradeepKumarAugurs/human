<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/favi.png">
        <title>:: Human Right ::</title>
        <link href="<?= base_url()?>assets/css/reset.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/css/fonts.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/assets/select2/css/select2.min.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/assets/magnific-popup/css/magnific-popup.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/assets/iconmoon/css/iconmoon.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/assets/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/css/animate.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/css/custom.css" rel="stylesheet">
    </head>
    <body>
        <!-- <div id="loading">
            <div class="element">
                <div class="sk-folding-cube">
                    <div class="sk-cube1 sk-cube"></div>
                    <div class="sk-cube2 sk-cube"></div>
                    <div class="sk-cube4 sk-cube"></div>
                    <div class="sk-cube3 sk-cube"></div>
                </div>
            </div>
        </div> -->
        <header> 
            <div class="container header-middle">
                <div class="row "> 
                    <span class="col-xs-3 xs-100 col-sm-3">
                    <a href="<?= site_url('home/index')?>"><img src="<?= base_url()?>assets/images/Logo_1.jpg" class="img-responsive" alt=""  style="height:115px;">
                       <div class="logo_title">Indian Human Right Association</div>
                       <div class="logo_title">Central Govt.Regd.No.-S-1416-014</div>
                    </a>
                </span>
               
                   
                    <div class="col-xs-9 xs-100 col-sm-9 padding-lg">
                        <div class="contact clearfix">
                            <ul>
                                <!-- <li> <span>Email</span> <a href="mailto:admin@hright.com">admin@hright.com</a> </li> -->
                                <li> <span>Mobile No</span> <span>+91-9795062905,+91-9473636399</span></li>
                                <!-- <li> <span>AISHE CODE </span><span>C-59279</span></li> -->
                            </ul>
                            <!-- <a href="<?= site_url('home/login')?>" class="login">Login <span class="icon-more-icon"></span></a> --></div> 
                    </div>
                </div>
            </div>
            <nav role="navigation" class="navbar navbar-default mainmenu">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul id="fresponsive" class="nav navbar-nav dropdown">
                        <li> <a href="<?= site_url('home/index')?>">Home</a></li>
                        <li class="dropdown">
                            <a href="<?= site_url('home/about')?>">About Us</a>
                            
                        </li>
                        <li> <a href="<?= site_url('home/enquiry')?>">Enquiry</a></li>
                        <li> <a href="<?= site_url('home/our_team')?>">Our  Team</a></li>

                       <!--  <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle">NCTE RECOGNITION ORDER<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php  if(isset($cources)) {  foreach($cources as $row) {?>
                                    <li><a href="<?= base_url()?>upload/nro_files/<?= $row['nro_files'] ?>" target="_blank"><?= $row['course_name'] ?></a></li>
                                <?php }}?>
                            </ul>
                        </li> -->
                        <li> <a href="<?= site_url('home/gallery')?>">PHOTO GALLERY</a></li>
                        <li> <a href="<?= site_url('home/get_id_card')?>">ID CARD</a></li>
                        <!-- <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle">FACULTY <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php  if(isset($cources)) {  foreach($cources as $row) {?>
                                    <li>
                                        <a href="<?= site_url('home/gwt_faculty_details/')?><?= $row['id'] ?>"><?= $row['course_name'] ?></a>
                                    </li>
                                <?php }}?>
                                <li>
                                    <a href="<?= site_url('home/gwt_faculty_details/0')?>">Non-Teaching Faculty</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle">Student Details<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <?php  if(isset($cources)) {  foreach($cources as $row) {?>
                                <li>
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?= $row['course_name'] ?><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                    <?php if(isset($row['year'])) { foreach($row['year'] as $submenu){ ?>
                                        <li><a href="<?= base_url()?>/upload/student_details/<?= $submenu['student_pdf'] ?>" target="_blank"><?= $row['course_name'] ?>&nbsp;<?= $submenu['course_year'] ?></a></li>
                                    <?php } }?>
                                    </ul>
                                </li>
                            <?php }}?>
                            </ul>
                        </li> -->
                        <!-- <li> <a href="<?= base_url()?>/assets/pdf/Affidavit.pdf" target="_blank">Affidavit</a></li>-->
                        <li> <a href="#">documentation</a></li>
                        <li> <a href="<?= site_url('home/contact')?>">Contact</a></li>
                    </ul>
                </div>
                </div>
            </nav>
        </header>