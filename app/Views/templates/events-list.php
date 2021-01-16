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
						<h1>Events</h1>
					</div>
				</div>
			</header>
			<!-- breadcrumb nav -->
			<nav class="breadcrumb-nav">
				<div class="container">
					<!-- breadcrumb -->
					<ol class="breadcrumb">
						<li><a href="course-single.html">Home</a></li>
						<li class="active">Events</li>
					</ol>
				</div>
			</nav>
			<!-- upcoming events block -->
			<section class="upcoming-events-block container">
				<!-- upcoming events list -->
				<ul class="list-unstyled upcoming-events-list">
					<li>
						<div class="alignright">
							<img src="http://placehold.it/220x130" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">01</strong>
								<strong class="month fw-light font-lato">march</strong>
								<strong class="day fw-light font-lato">WEDNESDAY</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="event-sigle.html">WordPress Theme Development with Bootstrap</a></h3>
							<address><time datetime="2011-01-12">8:00 am - 5:00 pm</time> | Great Russell Street, WC1B 3DG UK</address>
							<a href="event-sigle.html" class="btn btn-default text-uppercase">register</a>
						</div>
					</li>
					<li>
						<div class="alignright">
							<img src="http://placehold.it/220x130" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">05</strong>
								<strong class="month fw-light font-lato">march</strong>
								<strong class="day fw-light font-lato">SATURDAY</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="event-sigle.html">Build Apps with React Native</a></h3>
							<address><time datetime="2011-01-12">12:00 pm - 5:00 pm</time> | No1 Warehouse London, UK</address>
							<a href="event-sigle.html" class="btn btn-default text-uppercase">register</a>
						</div>
					</li>
					<li>
						<div class="alignright">
							<img src="http://placehold.it/220x130" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">13</strong>
								<strong class="month fw-light font-lato">march</strong>
								<strong class="day fw-light font-lato">Thursday</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="event-sigle.html">Free Yoga &amp; Excercise Class at Every Morning</a></h3>
							<address><time datetime="2011-01-12">4:00 pm - 8:00 pm</time> | 21 New Globe Walk London, UK</address>
							<a href="event-sigle.html" class="btn btn-default text-uppercase">register</a>
						</div>
					</li>
					<li>
						<div class="alignright">
							<img src="http://placehold.it/220x130" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">18</strong>
								<strong class="month fw-light font-lato">march</strong>
								<strong class="day fw-light font-lato">saturday</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="event-sigle.html">Free Yoga Class at Every Morning</a></h3>
							<address><time datetime="2011-01-12">8:00 am - 5:00 pm</time> | Great Russell Street, WC1B 3DG UK</address>
							<a href="event-sigle.html" class="btn btn-default text-uppercase">register</a>
						</div>
					</li>
					<li>
						<div class="alignright">
							<img src="http://placehold.it/224x149" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">22</strong>
								<strong class="month fw-light font-lato">march</strong>
								<strong class="day fw-light font-lato">wednesday</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="event-sigle.html">Learn Network Webinar for Music Teachers</a></h3>
							<address><time datetime="2011-01-12">12:00 pm - 5:00 pm</time> | No1 Warehouse London, UK</address>
							<a href="event-sigle.html" class="btn btn-default text-uppercase">register</a>
						</div>
					</li>
					<li>
						<div class="alignright">
							<img src="http://placehold.it/220x130" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">02</strong>
								<strong class="month fw-light font-lato">april</strong>
								<strong class="day fw-light font-lato">tuesday</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="event-sigle.html">Digital Marketing Briefing: Viyalosla 2017</a></h3>
							<address><time datetime="2011-01-12">4:00 pm - 8:00 pm</time> | 21 New Globe Walk London, UK</address>
							<a href="event-sigle.html" class="btn btn-default text-uppercase">register</a>
						</div>
					</li>
					<li>
						<div class="alignright">
							<img src="http://placehold.it/220x130" alt="image description">
						</div>
						<div class="alignleft">
							<time datetime="2011-01-12" class="time text-uppercase">
								<strong class="date fw-normal">13</strong>
								<strong class="month fw-light font-lato">april</strong>
								<strong class="day fw-light font-lato">thursday</strong>
							</time>
						</div>
						<div class="description-wrap">
							<h3 class="list-heading"><a href="#">Educational School Technology</a></h3>
							<address><time datetime="2011-01-12">12:00 pm - 5:00 pm</time> | No1 Warehouse London, UK</address>
							<a href="#" class="btn btn-default text-uppercase">register</a>
						</div>
					</li>
				</ul>
				<nav aria-label="Page navigation">
					<!-- pagination -->
					<ul class="pagination">
						<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li>
							<a href="#" aria-label="Next">
								<span aria-hidden="true">›</span>
							</a>
						</li>
					</ul>
				</nav>
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