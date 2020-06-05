<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/font-awesome.css" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="css/style.css">
  <!-- =======================================================
    Theme Name: Hidayah
    Theme URL: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>
    <div class="main-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-4">

            <h1><a class="navbar-brand" href="index.php" data-0="line-height:90px;" data-300="line-height:50px;">
            IAMTA
              </a></h1>

          </div>

          <div class="col-md-8">
            <div class="dropdown">
              <ul class="nav nav-pills">
                <li><a href="index.php">Home</a></li>
                <li><a href="membership.php">Membership</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="events.php">Event</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="content">


  
  <section id="section-works" class="section appear clearfix">
    <div class="container">
  <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Contact</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
          </div>
        </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Get in touch with us by filling <strong>contact form below</strong></h4>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" id="contactform" method="post" role="form" class="contactForm">
            <div class="row">
              <div class="col-lg-4 field">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation">
                </div>
              </div>
              <div class="col-lg-4 field">
                <input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation">
                </div>
              </div>
              <div class="col-lg-4 field">
                <input type="text" name="subject" placeholder="Enter your subject" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation">
                </div>
              </div>
              <div class="col-lg-12 margintop10 field">
                <textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..."
                  data-rule="required" data-msg="Please write something"></textarea>
                <div class="validation">
                </div>
                <p>
                  <button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
                  <span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
</section>
  
  <footer>
    <section id="footer" class="section footer">
      <div class="container">
        <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
          <div class="col-sm-12 align-center">
            <ul class="social-network social-circle">
              <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
              <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-sm-12 text-center">
          <p>Copyright &copy; IAMTA</p>
          <div class="credits">
            <!--
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Hidayah
              -->
            Designed by <a href="https://bootstrapmade.com/">ColossalCLR</a>
          </div>
        </div>
      </div>

    </section>
    <a href="#" class="scrollup"><i class="fa fa-chevron-up"> </i></a>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
