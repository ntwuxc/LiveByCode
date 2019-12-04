<?php require_once 'controllers/authController.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>LiveByCode &mdash; Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <h4><span class="small mr-3" style="float: right; padding-right: 20px;"> Welcome, <span style="color: blue; "><?php echo $_SESSION['username']; ?></span></span></h4>
      <br>
      <a href="index.php?logout=1" style="color: red; float: right; padding-right: 83px; font-variant: small-caps;">logout</a>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">

            <a href="chatbot/chatbot.html" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> livebycode@googlegroups.com</a> 
          </div>
          
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="mainindex.php" class="d-block">
              <img src="images/logo.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="index.html" class="nav-link text-left">Home</a>
                </li>
                  <a href="about.html" class="nav-link text-left">About Us</a>
                <li>
                  <a href="indexblog.php" class="nav-link text-left">Blog</a>
                </li>
                <li>
                  <a href="game.html" class="nav-link text-left">Game</a>
                </li>
                <li>
                  <a href="Compiler/frame.html" class="nav-link text-left">Compiler</a>
                </li>
                <li>
                    <a href="contact.html" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                         </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="https://chat.whatsapp.com/BR3KAAwy7DI7ZCWoVvAPl6"><span class="icon-whatsapp"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>

          </div>
         
        </div>
      </div>

    </header>

    
    
    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>Live By Code</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>You Can <u>Code</u> the Future.</h1>
            </div>
          </div>
        </div>
      </div>

    </div>
    

    <div></div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>OUR OBJECTIVE</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-mortarboard text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Personalize Learning</h2>
                <p>To encourage students to learning experience designed for each student with the programming languages.</p>
                <!--<p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>-->
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-school-material text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Valuable Questions</h2>
                <p>LBC admins often ask valuable programs and problems to their students to solve. </p>
                <!--<p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>-->
              </div>
            </div> 
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-library text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Tools for Students</h2>
                <p>LBC provides tools for students such as compiler to develop and enhance their skills in programming.</p>
                <!--<p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>-->
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>


  

    


    <div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>About Our Community</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="lead">LBC stands for LiveByCode, it is a platform where students can enhance their programming skills and expand their knowledge and prepare better. </p>
            <p>Students to solve problems in a wide range of Computer Science domains such as algorithms, data structures, as well as to practice different programming paradigms. LBC is not only for learning and developing skills but also for discussing among others who have been logged in. LBC also provides playing platform where the students can be relaxed by playing games. In addition to that, LBC provides more information about technical and also tips, tricks etc., </p>
          </div>
        </div>
      </div>
    </div>

    <!-- // 05 - Block -->
    <div>
      <br>
    </div>
    

    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-mortarboard"></span>
            <h3>Our Philosphy</h3>
            <p>We want the best outcomes for our students and meeting their needs is first in everything we do. We care for our students in a good manner. We support, guide, lead and care for them.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-school-material"></span>
            <h3>LBC Principle</h3>
            <p>LBC creates a culture of learning around good programming. Programming is the process of coding, testing, troubleshooting, debugging and maintaining a system.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-library"></span>
            <h3>Key of Success</h3>
            <p>We are proud of our students, who have acquired their programming skills in higher level from our community and have experience with programming.</p>
          </div>
        </div>
      </div>
    </div>
    <div><br></div>

    <div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2>Subscribe to us!</h2>
            <p>We will send technical updates, tips, tricks direct to your Inbox. </p>
          </div>
          <div class="col-lg-5">
            <form action="" class="d-flex">
              <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
              <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div> 

    <div>
      <br>
    </div>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="images/logo.png" alt="Image" class="img-fluid"></p>
            <p><b>&nbsp; &nbsp; &nbsp;THINK. IMPLEMENT. QUIT. REPEAT.</b></p>  
            
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Department</span></h3>
              <ul class="list-unstyled">
                  <li><a href="http://www.saranathan.ac.in/dept.php?tgt=itabout&dept=IT">Information Technology</a></li>
              </ul>
              <h3 class="footer-heading"><span>Our College</span></h3>
              <ul class="list-unstyled">
                  <li><a href="http://www.saranathan.ac.in">Saranathan College of Engineering</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Compiler Language support</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Bash (4.0 | 4.4)</a></li>
                <li><a href="#">Basic (fbc 1.05.0)</a></li>
                <li><a href="#">C</a></li>
                <li><a href="#">C++</a></li>
                <li><a href="#">Clojure (1.8.0)</a></li>
                <li><a href="lang.html">Read More</a></li>
            </ul>
          </div>
          
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact us at</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Gmail</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Whatsapp</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </i> by <a href="index.html" target="_blank" >Live By Code</a>
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>