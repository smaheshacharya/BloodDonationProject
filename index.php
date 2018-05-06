<?php
require_once 'includes/init.php';
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
						<li><a href="login.php" style="color:#f10a0a">Login</a></li>
						<li><a href="register.php" style="color:#f10a0a">Register</a></li>
						
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
			
			<div class="row" id="portfolio-wrapper">
				<div class="col-lg-3 col-md-6 portfolio-item filter-app">
					
					<img src="img/portfolio/A+.png" alt="">
					<div class="details">
						<button>Request Blood A+ </button>
					</div>
					
				</div>
				<div class="col-lg-3 col-md-6 portfolio-item filter-web">
					<a href="">
						<img src="img/portfolio/B+.png" alt="">
						<div class="details">
							<button>Request Blood B+</button>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 portfolio-item filter-app">
					
					<img src="img/portfolio/AB+.png" alt="">
					<div class="details">
						<button>Request Blood AB+</button>
					</div>
					
				</div>
				<div class="col-lg-3 col-md-6 portfolio-item filter-card">
					
					<img src="img/portfolio/O+.png" alt="">
					<div class="details">
						<button>Request Blood O+</button>
					</div>
					
				</div>
				<div class="col-lg-3 col-md-6 portfolio-item filter-card">
					
					<img src="img/portfolio/A-.png" alt="">
					<div class="details">
						<button>Request Blood A-</button>
						
					</div>
					
				</div>
				<div class="col-lg-3 col-md-6 portfolio-item filter-web">
					
					<img src="img/portfolio/B-.png" alt="">
					<div class="details">
						<button data-toggle="modal" data-target="#exampleModal">Request Blood B-</button>
					</div>
					
				</div>
				<div class="col-lg-3 col-md-6 portfolio-item filter-card">
					
					<img src="img/portfolio/AB-.png" alt="">
					<div class="details">
						<button>Request Blood AB-</button>
					</div>
					
				</div>
				<div class="col-lg-3 col-md-6 portfolio-item filter-app">
					
					<img src="img/portfolio/O-.png" alt="">
					<div class="details">
						<button>Request Blood O- </button>
					</div>
					
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
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="exampleModalLabel" style="text-align: center; color: #f10a0a;">Request Blood</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="request.php" method="get">
				<div class="col-md-6">
					<div class="form-group">
						<label for="Address">Hospital Address</label>
						<input type="text" id="address" name="address" class="form-control" placeholder="hospital address">
						
					</div>
					<div class="form-group">
						<label for="Address">Phone No</label>
						<input type="text" id="phone" name="phone" class="form-control" placeholder="Phone No">
						
					</div>
					<div class="form-group">
						<label for="Address">Time</label>
						<input type="text" id="time" name="time" class="form-control" placeholder="Time for blood in hour">
						
					</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal" style="background-color: #f10a0a;">Request</button>
				</div>
			</div>
		</div>
	</div>
	<!--CONTACT END-->
	<!--FOOTER START-->
	<?php include_once 'includes/index_footer.php'; ?>