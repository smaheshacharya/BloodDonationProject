<?php 
require_once 'admin panel/includes/user_check.php';
require_once 'admin panel/includes/init.php';

?>
<?php 	 
require_once 'includes/index_header.php'; ?>

<body>
  <!--HEADER START-->
  <div class="main-navigation navbar-fixed-top">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
          <a class="navbar-brand" href="index.html">DonnerNepal</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#banner">Home</a></li>
            <li><a href="#portfolio">blood Request</a></li>
            <li><a href="#about"> Team</a></li>
            <li><a href="#contact">Contact Us</a></li> 
            <li><a href="delete.php" style="color:#f10a0a" onclick="confirm('are you sure to cancel registration')">Cancle Reg.</a></li>
            <?php $id=$_SESSION['user']['id']; ?>
            <li><a href="update-reg.php" style="color:#f10a0a">Edit your info</a></li>
             <li><a href="logout.php" style="color:#f10a0a">Logout</a></li>
          
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--HEADER END-->

  <!--BANNER START-->
  <div id="banner" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="jumbotron">
          <h1 class="small">Welcome To <span class="bold">Tempo</span></h1>
          <p class="big">Multipurpose HTML5 Bootstrap template.</p>
          <a href="#" class="btn btn-banner">Learn More<i class="fa fa-send"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!--BANNER END-->

  <!--CTA1 START-->
  <div class="cta-1">
    <div class="container">
      <div class="row text-center white">
        <h1 class="cta-title">Say Hey to Tempo!!</h1>
        <p class="cta-sub-title">Full Responsive HTML5 Bootstrap Template.</p>
      </div>
    </div>
  </div>
  <!--CTA1 END-->

  <!--SERVICE START-->
  <div id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>Our Service</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-icon"><i class="fa fa-picture-o"></i></div>
            <div class="service-text">
              <h3>Design</h3>
              <p> doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-icon"><i class="fa fa fa-code"></i></div>
            <div class="service-text">
              <h3>Development</h3>
              <p> doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-icon"><i class="fa fa-diamond"></i></div>
            <div class="service-text">
              <h3>Marketing</h3>
              <p> doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--SERVICE END-->
  <div id="portfolio">
    <div class="container">
      <div class="page-title text-center">
        <h1>Our Privious Works</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
        <hr class="pg-titl-bdr-btm"></hr>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-logo">Logo</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row" id="portfolio-wrapper">
        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="img/portfolio/app1.jpg" alt="">
            <div class="details">
              <h4>App 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="img/portfolio/web2.jpg" alt="">
            <div class="details">
              <h4>Web 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="img/portfolio/app3.jpg" alt="">
            <div class="details">
              <h4>App 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="">
            <img src="img/portfolio/card1.jpg" alt="">
            <div class="details">
              <h4>Card 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="">
            <img src="img/portfolio/card2.jpg" alt="">
            <div class="details">
              <h4>Card 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="img/portfolio/web3.jpg" alt="">
            <div class="details">
              <h4>Web 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="">
            <img src="img/portfolio/card3.jpg" alt="">
            <div class="details">
              <h4>Card 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="img/portfolio/app2.jpg" alt="">
            <div class="details">
              <h4>App 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
          <a href="">
            <img src="img/portfolio/logo1.jpg" alt="">
            <div class="details">
              <h4>Logo 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
          <a href="">
            <img src="img/portfolio/logo3.jpg" alt="">
            <div class="details">
              <h4>Logo 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="img/portfolio/web1.jpg" alt="">
            <div class="details">
              <h4>Web 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
          <a href="">
            <img src="img/portfolio/logo2.jpg" alt="">
            <div class="details">
              <h4>Logo 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!--TEAM START-->
  <div id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>Meet Our Team</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>
        <div class="autoplay">
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="img/agent1.jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Haris Brown</h3>
                <p class="marb-20">Sr. UI Designer</p>
                <p>Follow me:</p>
                <ul class="team-social">
                  <li class="bgblue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="bgred"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="bgblue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="bgblue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="img/agent2.jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Emmy Brown</h3>
                <p class="marb-20">Jr. UI Designer</p>
                <p>Follow me:</p>
                <ul class="team-social">
                  <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="img/agent3.jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Iain Dante</h3>
                <p class="marb-20">Jr. UI Designer</p>
                <p>Follow me:</p>
                <ul class="team-social">
                  <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="img/agent4.jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Kate Haris</h3>
                <p class="marb-20">Jr. UI Designer</p>
                <p>Follow me:</p>
                <ul class="team-social">
                  <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--TEAM END-->

  <!--CTA2 START-->
  <div class="cta2">
    <div class="container">
      <div class="row white text-center">
        <h3 class="wd75 fnt-24">“Every Thing is designed. Few Things are Designed well.” - Brian Reed</h3>
        <p class="cta-sub-title"></p>
        <a href="#" class="btn btn-default">Request A Quote</a>
      </div>
    </div>
  </div>
  <!--CTA2 END-->

  <!--CONTACT START-->
  <div id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>Quick Contact</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>

        <div class="form-sec">
          <form action="" method="post" role="form" class="contactForm">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="col-md-12 form-group">
              <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>

              <button class="button-medium" id="contact-submit" type="submit" name="contact">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--CONTACT END-->

  <!--FOOTER START-->
<?php include_once 'includes/index_footer.php'; ?>
