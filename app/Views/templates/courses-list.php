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
						<h1>Courses</h1>
					</div>
				</div>
			</header>
			<!-- breadcrumb nav -->
			<nav class="breadcrumb-nav">
				<div class="container">
					<!-- breadcrumb -->
					<ol class="breadcrumb">
						<li><a href="home.html">Home</a></li>
						<li class="active">Courses</li>
					</ol>
				</div>
			</nav>
			<!-- two columns -->
			<div id="two-columns" class="container">
				<div class="row">
					<!-- content -->
					<article id="content" class="col-xs-12 col-md-12">
						<!-- show head -->
						<!--
						<header class="show-head">
							<p> Showing 1–9 of 15 results</p>
							<select class="chosen-select-no-single">
								<option value="0">All Courses</option>
								<option value="0">All Courses</option>
								<option value="0">All Courses</option>
								<option value="0">All Courses</option>
							</select>
						</header>
						-->
						<div class="row flex-wrap">
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-primary text-white font-lato text-uppercase price-tag">$99.00</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">French for Beginners to Advanced Training</a></h3>
									<div class="post-author">
										<div class="alignleft rounded-circle no-shrink">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Keny White</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">98</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">10</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-success text-white font-lato text-uppercase price-tag">Free</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">Introduction to Mobile Apps Development</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Sarah Johnson</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">200</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">3</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="far fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-primary text-white font-lato text-uppercase price-tag">$85.60</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">How to Become a Startup Founder</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Jhon Milton</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">200</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">3</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="far fa-star-half"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-success text-white font-lato text-uppercase price-tag">free</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">Your Complete Guide to Self Devlopement</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Sarah Johnson</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">48</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">5</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-primary text-white font-lato text-uppercase price-tag">$68.00</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">Adobe InDesign CS6 Tutorial Beginners</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Ans Niversity</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">48</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">5</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-primary text-white font-lato text-uppercase price-tag">$75.00</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">Swift Programming for Beginners</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Don Cooper</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">48</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">5</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-primary text-white font-lato text-uppercase price-tag">$89.00</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">Become a Professional Film Maker</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Don Cooper</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">48</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">5</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-primary text-white font-lato text-uppercase price-tag">$55.00</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">Branding like a professional in 10 days</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Logancee Wok</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">48</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">5</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-4">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-success text-white font-lato text-uppercase price-tag">free</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">Anatomy for Figure Drawing Mastering Figure</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Keny White</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">48</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">5</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
						</div>
						<nav aria-label="Page navigation">
							<!-- pagination -->
							<ul class="pagination">
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">2</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">&rsaquo;</span>
									</a>
								</li>
							</ul>
						</nav>
					</article>
					<!--
					-- sidebar --
					<aside class="col-xs-12 col-md-3" id="sidebar">
						-- widget search --
						<section class="widget widget_search">
							<h3>Course Search</h3>
							-- search form --
							<form action="#" class="search-form">
								<fieldset>
									<input placeholder=" Search&hellip;" class="form-control" name="s" type="search">
									<button type="button" class="fas fa-search"><span class="sr-only">search</span></button>
								</fieldset>
							</form>
						</section>
						-- widget categories --
						<section class="widget widget_categories">
							<h3>Course Categories</h3>
							<ul class="list-unstyled text-capitalize font-lato">
								<li class="cat-item cat-item-1"><a href="#">Business</a></li>
								<li class="cat-item active cat-item-2"><a href="#">Design</a></li>
								<li class="cat-item cat-item-3"><a href="#">Programing Language</a></li>
								<li class="cat-item cat-item-4"><a href="#">Photography</a></li>
								<li class="cat-item cat-item-5"><a href="#">Language</a></li>
								<li class="cat-item cat-item-6"><a href="#">Life Style</a></li>
								<li class="cat-item cat-item-7"><a href="#">IT &amp; Software</a></li>
							</ul>
						</section>
						-- widget intro --
						<section class="widget widget_intro">
							<h3>Course Intro</h3>
							<div class="aligncenter overlay">
								<a href="http://www.youtube.com/embed/9bZkp7q19f0?autoplay=1" class="btn-play far fa-play-circle lightbox fancybox.iframe"></a>
								<img src="http://placehold.it/262x220" alt="image description">
							</div>
						</section>
						-- widget popular posts --
						<section class="widget widget_popular_posts">
							<h3>Popular Courses</h3>
							-- widget cources list --
							<ul class="widget-cources-list list-unstyled">
								<li>
									<a href="course-single.html">
										<div class="alignleft large">
											<img src="http://placehold.it/80x70" alt="image description">
										</div>
										<div class="description-wrap">
											<h4>Introduction to Mobile Apps Development</h4>
											<strong class="price text-primary element-block font-lato text-uppercase">$99.00</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="course-single.html">
										<div class="alignleft large">
											<img src="http://placehold.it/80x70" alt="image description">
										</div>
										<div class="description-wrap">
											<h4>Become a Professional Film Maker</h4>
											<strong class="price text-success element-block font-lato text-uppercase">Free</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="course-single.html">
										<div class="alignleft large">
											<img src="http://placehold.it/80x70" alt="image description">
										</div>
										<div class="description-wrap">
											<h4>Swift Programming For Beginners</h4>
											<strong class="price text-primary element-block font-lato text-uppercase">$75.00</strong>
										</div>
									</a>
								</li>
							</ul>
						</section>
					</aside>
					-->
				</div>
			</div>
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