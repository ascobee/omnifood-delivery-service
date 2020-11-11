<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <script src="https://kit.fontawesome.com/ba70ff08b2.js" crossorigin="anonymous"></script>

  <link href="./static/favicon.ico" rel="icon">

  <title>Contact me</title>

  <link href="./static/main.3f6952e4.css" rel="stylesheet">
</head>

<body class="">
  <div id="site-border-left"></div>
  <div id="site-border-right"></div>
  <div id="site-border-top"></div>
  <div id="site-border-bottom"></div>
  <!-- Add your content of header -->
  <header>
    <nav class="navbar  navbar-fixed-top navbar-default">
      <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
          aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav ">
            <li><a href="./index.html" title="">01 : Home</a></li>
            <li><a href="./works.html" title="">02 : Works</a></li>
            <li><a href="./about.html" title="">03 : About me</a></li>
            <li><a href="./contact.html" title="">04 : Contact</a></li>
            <!-- <li><a href="./components.html" title="">05 : Components</a></li> -->
          </ul>


        </div>
      </div>
    </nav>
  </header>

  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-container-spacer text-center">
            <h1 class="h2">04 : Contact me</h1>
          </div>

          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <!-- <form action="contact.php" method="POST" class="reveal-content"> -->
              <form method="POST" class="reveal-content">
                <?php
                if(isset($_POST['submit'])){
                  $del = ",";
                  $email = $_POST['email'];
                  $subject = $_POST['subject'];
                  $message = $_POST['message'];
                    
                  $file = fopen("database2.csv", "a");
                  // $data = $email.$del.$subject.$del.$message;

                  if($file){
                    fwrite($file, $email);
                    fclose($file);
                  }
                }
                ?>
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                      <textarea name="message" class="form-control" rows="5"
                        placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default btn-lg">Send</button>
                  </div>
                  <div class="col-md-5 address-container">
                    <ul class="list-unstyled">
                      <li>
                        <span class="fa-icon">
                          <i class="fas fa-phone-alt fa-sm" aria-hidden="true"></i>
                        </span>
                        <a href="tel:+3166555227">+ (316) 655-5227</a>
                      </li>
                      <li>
                        <span class="fa-icon">
                          <i class="fas fa-at fa-sm" aria-hidden="true"></i>
                        </span>
                        austin.scobee&commat;gmail.com
                      </li>
                      <li>
                        <span class="fa-icon">
                          <i class="fas fa-map-marker-alt fa-sm" aria-hidden="true"></i>
                        </span>
                        Arvada, CO
                      </li>
                    </ul>
                    <h3>Social Networks</h3>
                    <a href="http://www.linkedin.com/in/austin-scobee" title="" class="fa-icon">
                      <i class="fab fa-linkedin-in fa-lg"></i>
                    </a>
                    <a href="http://github.com/ascobee" title="" class="fa-icon">
                      <i class="fab fa-github-alt fa-lg"></i>
                    </a>

                  </div>
                </div>
              </form>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>


  <footer class="footer-container text-center">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p>
            Copyright
            <i class="far fa-copyright fa-sm"></i>
            <script type="text/javascript">
              document.write(new Date().getFullYear());
            </script>
            AUSTIN SCOBEE | Website created with <a href="http://www.mashup-template.com/"
              title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/"
              title="Beautiful Free Images">Unsplash</a></p>
        </div>
      </div>
    </div>
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", function (event) {
      navActivePage();
    });
  </script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

-->
  <script type="text/javascript" src="./static/main.70a66962.js"></script>
</body>

</html>