<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
	<!-- main container of all the page elements -->
	<div id="wrapper">
	<?= $this->include('templates/another-header') ?>
		<!-- contain main informative part of the site -->
		<main id="main">
			<!-- heading banner -->
			<header class="heading-banner text-white bgCover" style="background-image: url(http://placehold.it/1920x181);">
				<div class="container holder">
					<div class="align">
						<h1>Contact</h1>
					</div>
				</div>
			</header>
			<!-- breadcrumb nav -->
			<nav class="breadcrumb-nav">
				<div class="container">
					<!-- breadcrumb -->
					<ol class="breadcrumb">
						<li><a href="home.html">Home</a></li>
						<li class="active">Contact</li>
					</ol>
				</div>
			</nav>
			<!-- contact block -->
			<section class="contact-block">
				<div class="container">
					<header class="seperator-head text-center">
						<h2>Contact Details</h2>
						<p>Welcome to our Website. We are glad to have you around.</p>
					</header>
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<!-- detail column -->
							<div class="detail-column">
								<span class="icn-wrap no-shrink element-block">
									<img src="images/icon11.png" alt="icon">
								</span>
								<div class="descr-wrap">
									<h3 class="text-uppercase">give us a call</h3>
									<p><a href="tel:+618006592684">+61 (800) 659-2684</a>, <a href="tel:+618006595214">+61 (800) 659-5214</a></p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<!-- detail column -->
							<div class="detail-column">
								<span class="icn-wrap no-shrink element-block">
									<img src="images/icon12.png" alt="icon">
								</span>
								<div class="descr-wrap">
									<h3 class="text-uppercase">send us a message</h3>
									<p><a href="mailto:&#069;&#120;&#097;&#109;&#112;&#108;&#101;&#105;&#100;&#064;&#099;&#121;&#098;&#101;&#114;&#108;&#109;&#115;&#046;&#099;&#111;&#109;">&#069;&#120;&#097;&#109;&#112;&#108;&#101;&#105;&#100;&#064;&#099;&#121;&#098;&#101;&#114;&#108;&#109;&#115;&#046;&#099;&#111;&#109;</a></p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<!-- detail column -->
							<div class="detail-column">
								<span class="icn-wrap no-shrink element-block">
									<img src="images/icon13.png" alt="icon">
								</span>
								<div class="descr-wrap">
									<h3 class="text-uppercase">visit our location</h3>
									<p>9015 Sunset Boulevard United Kingdom</p>
								</div>
							</div>
						</div>
					</div>
					<hr class="sep-or element-block" data-text="or">
					<!-- contact form -->
					<form action="#" class="contact-form">
						<h3 class="text-center">Drop Us a Message</h3>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control element-block" placeholder="Your Name">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<input type="email" class="form-control element-block" placeholder="Email">
								</div>
							</div>
							<div class="col-xs-12">
								<div class="form-group">
									<textarea class="form-control element-block" placeholder="Message"></textarea>
								</div>
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-theme btn-warning text-uppercase font-lato fw-bold">send message</button>
						</div>
					</form>
				</div>
				<!-- mapHolder -->
				<div class="mapHolder">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13607.729903367896!2d74.30893281977539!3d31.498539800000007!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1530737870558" style="border:0" allowfullscreen="" width="100%" height="400" frameborder="0"></iframe>
					<span class="mapMarker">
						<img src="images/map-marker.png" alt="marker">
					</span>
				</div>
				<!-- btn aside block -->
				<aside class="btn-aside-block container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col">
							<h3>Have Any Questions?</h3>
							<p>Various versions years, sometimes by accident, sometimes on purpose</p>
						</div>
						<div class="col-xs-12 col-sm-4 text-right col">
							<a href="#" class="btn btn-warning btn-theme text-capitalize font-lato fw-normal">Ask Question Now</a>
						</div>
					</div>
				</aside>
			</section>
		</main>
		<!-- footer area container -->
		<div class="footer-area bg-dark text-gray">
			<!-- aside -->
			<aside class="aside container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3 col">
						<div class="logo"><a href="home.html"><img src="images/logo.png" alt="studyLMS"></a></div>
						<p>We have over 20 years experience providing expert Educational both businesses and individuals. Our Investment Committee brings cades the industry expertise in driving our investment approach. portfolio constructor and allocation</p>
						<a href="#" class="btn btn-default text-uppercase">Start Leaning Now</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col hidden-xs">
						<h3>Popular Courses</h3>
						<!-- widget cources list -->
						<ul class="widget-cources-list list-unstyled">
							<li>
								<a href="course-single.html">
									<div class="alignleft">
										<img src="http://placehold.it/60x60" alt="image description">
									</div>
									<div class="description-wrap">
										<h4>Introduction to Mobile Apps Development</h4>
										<strong class="price text-primary element-block font-lato text-uppercase">$99.00</strong>
									</div>
								</a>
							</li>
							<li>
								<a href="course-single.html">
									<div class="alignleft">
										<img src="http://placehold.it/60x60" alt="image description">
									</div>
									<div class="description-wrap">
										<h4>Become a Professional Film Maker</h4>
										<strong class="price text-success element-block font-lato text-uppercase">Free</strong>
									</div>
								</a>
							</li>
							<li>
								<a href="course-single.html">
									<div class="alignleft">
										<img src="http://placehold.it/60x60" alt="image description">
									</div>
									<div class="description-wrap">
										<h4>Swift Programming For Beginners</h4>
										<strong class="price text-primary element-block font-lato text-uppercase">$75.00</strong>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<nav class="col-xs-12 col-sm-6 col-md-3 col">
						<h3>Quick Links</h3>
						<!-- fooer navigation -->
						<ul class="fooer-navigation list-unstyled">
							<li><a href="#">All Courses</a></li>
							<li><a href="#">Summer Sessions</a></li>
							<li><a href="#">Recent Exams</a></li>
							<li><a href="#">Professional Courses</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">All Courses</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</nav>
					<div class="col-xs-12 col-sm-6 col-md-3 col">
						<h3>contact us</h3>
						<p>If you want to contact us about any issue our support available to help you 8am-7pm Monday to saturday.</p>
						<!-- ft address -->
						<address class="ft-address">
							<dl>
								<dt><span class="fas fa-map-marker"><span class="sr-only">marker</span></span></dt>
								<dd>Address: 9015 Sunset Boulevard United Kingdom</dd>
								<dt><span class="fas fa-phone-square"><span class="sr-only">phone</span></span></dt>
								<dd>Call: <a href="tel:+2156237532">+ 215 623 7532</a></dd>
								<dt><span class="fas fa-envelope-square"><span class="sr-only">email</span></span></dt>
								<dd>Email: <a href="mailto:info@Studylms.com">info@Studylms.com</a></dd>
							</dl>
						</address>
					</div>
				</div>
			</aside>
			<!-- page footer -->
			<footer id="page-footer" class="font-lato">
				<div class="container">
					<div class="row holder">
						<div class="col-xs-12 col-sm-push-6 col-sm-6">
							<ul class="socail-networks list-unstyled">
								<li><a href="#"><span class="fab fa-facebook"></span></a></li>
								<li><a href="#"><span class="fab fa-twitter"></span></a></li>
								<li><a href="#"><span class="fab fa-instagram"></span></a></li>
								<li><a href="#"><span class="fab fa-linkedin"></span></a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-pull-6 col-sm-6">
							<p><a href="#">Studylms</a> | &copy; 2018 <a href="#">DesignFalls</a>, All rights reserved</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- back top of the page -->
		<span id="back-top" class="text-center fa fa-caret-up"></span>
	</div>

<?= $this->endSection('content') ?>