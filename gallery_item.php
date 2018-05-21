<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Learn Kids Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- //Custom Theme files -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- //web-fonts -->


    <?php 
        // Get the folder
        $item = $_GET['item'];
        //Generate the proper URL
        $directory = "images/gallery/".$item."/";
        //Get a list of all the pictures
        $filecount = 0;
        $files = glob($directory . "*.jpg");
        if ($files){
         $filecount = count($files);
        }

        // Get the title
        $rawTitle = $_GET['title'];
        //Parse it properly
        $title =  str_replace("_"," ",$rawTitle);


    ?>
</head>

<body>
    <!-- header -->
    <div class="header-w3layoutstop">
        <div class="container">
            <!-- navigation -->
            <div class="top-nav w3-agiletop">
                <div class="container">
                    <div class="navbar-header w3llogo">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="hdr-w3left navbar-left">
                            <a href="index.html"><img src=images/logo_jcs_helv.png></a>
                        </div>
                        <div class="w3menu navbar-right">
                            <ul class="nav navbar">
                                <!--							<li><a href="index.html" class="active">About</a></li>-->
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">About</span><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="welcome.html">Welcome</a></li>
                                        <li><a href="vision.html">Vision and Mission</a></li>
                                        <li><a href="governance.html">Governance</a></li>
                                        <li><a href="pta.html">PTA</a></li>
                                        <li><a href="enviromental_mindfulness.html">Eco Awareness</a></li>
                                        <li><a href="recruitment.html">Recruitment</a></li>
                                    </ul>
                                </li>
                                <!--							<li><a href="about.html">Curriculum</a></li> -->
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">         <span data-letters="Pages">Curriculum</span><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="icons.html">Our Curriculum</a></li>
                                        <li><a href="eyfs.html">EYFS</a></li>
                                        <li><a href="primary.html">Primary</a></li>
                                        <li><a href="secondary.html">Secondary</a></li>
                                        <li><a href="bahasaIndonesia.html">Bahasa Indonesia</a></li>
                                        <li><a href="pastoral.html">Pastoral Care</a></li>
                                    </ul>
                                </li>

                                <!--                            <li><a href="gallery.html">School Life</a></li>-->
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">         <span data-letters="Pages">School Life</span><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="calendar.html">Calendar</a></li>
                                        <li><a href="times.html">Times of the Day</a></li>
                                        <li><a href="lunches.html">Lunches & Snack</a></li>
                                        <li><a href="houses.html">House System</a></li>
                                        <li><a href="merits.html">Merits and Dojos</a></li>
                                        <li><a href="asa.html">After School Activities</a></li>
                                        <li><a href="events.html">Special Events</a></li>
                                        <li><a href="uniform.html">Uniform</a></li>
                                    </ul>
                                </li>


                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">Admissions</span><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="admissions.html">Admissions Procedures</a></li>
                                        <li><a href="tuition.html">Tuiton Fees</a></li>
                                    </ul>
                                </li>


                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!-- //navigation -->
        </div>
    </div>
    <!-- //header -->

    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <h3 class="w3ls-title">
                <?php echo $title ?>
            </h3>
            <div class="gallery-grids-top">
                <div class="gallery-grids">

                    <?php for ($x = 1; $x <= $filecount; $x++) {  ?>
                    <div class="col-md-6 col-sm-4 col-xs-6 gallery-grid-grid">
                        <a class="example-image-link w3-agilepic" href="images/gallery/<?php echo $item ?>/<?php echo $x ?>.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/gallery/<?php echo $item ?>/<?php echo $x ?>.jpg" alt=""/> 
							<div class="w3ls-overlay">
								<h4><?php  echo $title ?></h4>
							</div> 
						</a>
                    </div>
                    <?php } ?>

                    <div class="clearfix"> </div>
                    <script src="js/lightbox-plus-jquery.min.js"></script>
                </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->
    <!-- footer -->
    <div class="footer w3layouts">
        <div class="container">
            <div class="footer-agileinfo">
                <div class="col-md-10 col-sm-6 footer-grid">
                    <h3>Location</h3>
                    <p>Jl Watugede, Mudal, Sariharjo, Ngaglik, Sleman, Yogyakarta, Indonesia 55581.</p>
                </div>
                <div class="col-md-2 col-sm-6 footer-grid w3social">
                    <h3>Media</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/Jogjakarta-Community-School-395131763855494"><i class="fa fa-facebook"></i>Facebook</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- modal-about -->
    <div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <img src="images/img2.jpg" class="img-responsive" alt="" />
                    <h4>Cras rutrum iaculis enim</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius miet congue consectetur adipiscing. <br>Uisque molestie cursus miet congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in. Fusce lacus purus, pulvinar ut lacinia id, sagittis eu mi. Vestibulum eleifend massa sem, eget dapibus turpis efficitur at. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //modal-about -->
    <!-- start-smooth-scrolling -->
    <script src="js/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });

    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });

    </script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>
