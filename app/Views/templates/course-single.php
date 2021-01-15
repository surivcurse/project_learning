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
						<h1>Course Single</h1>
					</div>
				</div>
			</header>
			<!-- breadcrumb nav -->
			<nav class="breadcrumb-nav">
				<div class="container">
					<!-- breadcrumb -->
					<ol class="breadcrumb">
						<li><a href="home.html">Home</a></li>
						<li><a href="contact.html">Course</a></li>
						<li class="active">Swift Programming for Beginners</li>
					</ol>
				</div>
			</nav>
			<!-- two columns -->
			<div id="two-columns" class="container">
				<div class="row">
					<!-- content -->
					<!-- <article id="content" class="col-xs-12 col-md-9"> -->
					<article id="content" class="col-xs-12 col-md-12">
						<!-- content h1 -->
						<h1 class="content-h1 fw-semi">Swift Programming for Beginners</h1>
						<!-- view header -->
						<header class="view-header row">
							<div class="col-xs-12 col-sm-9 d-flex">
								<div class="d-col">
									<!-- post author -->
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="#"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<div class="description-wrap">
											<h2 class="author-heading"><a href="#">Instructor</a></h2>
											<h3 class="author-heading-subtitle text-uppercase">lospher cooke</h3>
										</div>
									</div>
								</div>
								<div class="d-col">
									<!-- post author -->
									<div class="post-author">
										<div class="alignleft no-shrink icn-wrap">
											<i class="far fa-bookmark"></i>
										</div>
										<div class="description-wrap">
											<h2 class="author-heading"><a href="#">Category</a></h2>
											<h3 class="author-heading-subtitle text-uppercase">Programing language</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="rating-holder">
									<!--
									<ul class="star-rating list-unstyled justify-end">
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
									</ul>
									<strong class="element-block text-right subtitle fw-normal">(2 Reviews)</strong>
									-->
									<strong class="element-block text-right subtitle fw-normal">( 2 Views )</strong>
								</div>
							</div>
						</header>
						<div class="aligncenter content-aligncenter">
							<img src="http://placehold.it/828x430" alt="image description">
						</div>
						<h3 class="content-h3">Course Description</h3>
						<p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
						<p>Encyclopaedia galactica Orion's sword explorations vanquish the impossible, astonishment radio telescope with pretty stories for which there's little good evidence light years muse about, great turbulent clouds billions upon billions the sky calls to us realm of the galaxies laws of physics globular star cluster. Quasar the only home we've ever known extraordi claims require extraordinary evidence billions upon billions Drake Equation.</p>
						<h3 class="content-h3">What you will learn</h3>
						<p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
						<ul class="listDefault list-unstyled">
							<li>Thomas Edison may have been behind the invention.</li>
							<li>Edison worked alongside partners, both financial and commercial, to get his best inventions off the ground,</li>
							<li>Battling challenging cost targets and the need to build.</li>
						</ul>
						<p>Quasar the only home we've ever known extraordinary claims require extraordinary evidence billions billions Drake Eqa tion. Stirred by starlight! At the edge of forever. Rich in mystery Sea of Tranquility. Are creatures of the cosmos descend from astronomers. Trillion and billions upon billions upon billions upon billions upon billions. upon billions upon billions!</p>
						<h2>Carriculam</h2>
						<!-- sectionRow -->
						<section class="sectionRow">
							<h2 class="h6 text-uppercase fw-semi rowHeading">Section-1: Introduction</h2>
							<!-- sectionRowPanelGroup -->
							<div class="panel-group sectionRowPanelGroup" id="accordion" role="tablist" aria-multiselectable="true">
								<!-- panel -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h3 class="panel-title fw-normal">
											<a class="accOpener" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
												<span class="accOpenerCol">
													<i class="fas fa-chevron-circle-right accOpenerIcn"></i><i class="fas fa-play-circle inlineIcn"></i> Welcome to the course <span class="label label-primary text-white text-uppercase">Video</span>
												</span>
												<span class="accOpenerCol hd-phone">
													<span class="tagText bg-primary fw-semi text-white text-uppercase">preview</span>
													<time datetime="2011-01-12" class="timeCount">17 Min</time>
												</span>
											</a>
										</h3>
									</div>
									<!-- collapseOne -->
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											<p>Capitalize on low hanging fruit to identify a ballpark value added activity beta test Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
											<p><a href="http://www.youtube.com/embed/9bZkp7q19f0?autoplay=1" class="btn btn-default btn-play far fa-play-circle lightbox fancybox.iframe">Play Video</a></p>
										</div>
									</div>
								</div>
								<!-- panel -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h3 class="panel-title fw-normal">
											<a class="accOpener" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<span class="accOpenerCol">
													<i class="fas fa-chevron-circle-right accOpenerIcn"></i><i class="far fa-file inlineIcn"></i> Add and manage users <span class="label label-success text-white text-uppercase">free</span>
												</span>
												<span class="accOpenerCol hd-phone">
													<time datetime="2011-01-12" class="timeCount">25 Min</time>
												</span>
											</a>
										</h3>
									</div>
									<!-- collapseOne -->
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body">
											<p>Capitalize on low hanging fruit to identify a ballpark value added activity beta test Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
											<p><a href="http://www.youtube.com/embed/9bZkp7q19f0?autoplay=1" class="btn btn-default btn-play far fa-play-circle lightbox fancybox.iframe">Play Video</a></p>
										</div>
									</div>
								</div>
								<!-- panel -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h3 class="panel-title fw-normal">
											<a class="accOpener" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
												<span class="accOpenerCol">
													<i class="fas fa-chevron-circle-right accOpenerIcn"></i><i class="fas fa-puzzle-piece inlineIcn"></i> Magic wand vs quick selection <span class="label label-primary text-white text-uppercase">Quiz</span>
												</span>
												<span class="accOpenerCol hd-phone">
													<time datetime="2011-01-12" class="timeCount">37 Min</time>
												</span>
											</a>
										</h3>
									</div>
									<!-- collapseOne -->
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="panel-body">
											<p>Capitalize on low hanging fruit to identify a ballpark value added activity beta test Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
											<p><a href="http://www.youtube.com/embed/9bZkp7q19f0?autoplay=1" class="btn btn-default btn-play far fa-play-circle lightbox fancybox.iframe">Play Video</a></p>
										</div>
									</div>
								</div>
								<!-- panel -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFour">
										<h3 class="panel-title fw-normal">
											<a class="accOpener" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												<span class="accOpenerCol">
													<i class="fas fa-chevron-circle-right accOpenerIcn"></i><i class="fas fa-play-circle inlineIcn"></i> How to use LearnPress <span class="label label-primary text-white text-uppercase">Video</span>
												</span>
												<span class="accOpenerCol hd-phone">
													<span class="tagText bg-primary fw-semi text-white text-uppercase">preview</span>
													<time datetime="2011-01-12" class="timeCount">22 Min</time>
												</span>
											</a>
										</h3>
									</div>
									<!-- collapseOne -->
									<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
										<div class="panel-body">
											<p>Capitalize on low hanging fruit to identify a ballpark value added activity beta test Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
											<p><a href="http://www.youtube.com/embed/9bZkp7q19f0?autoplay=1" class="btn btn-default btn-play far fa-play-circle lightbox fancybox.iframe">Play Video</a></p>
										</div>
									</div>
								</div>
								<!-- panel -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFive">
										<h3 class="panel-title fw-normal">
											<a class="accOpener" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
												<span class="accOpenerCol">
													<i class="fas fa-chevron-circle-right accOpenerIcn"></i><i class="far fa-file inlineIcn"></i> Add and manage users <span class="label label-warning text-white text-uppercase">Seminare</span>
												</span>
												<span class="accOpenerCol hd-phone">
													<time datetime="2011-01-12" class="timeCount">48 Min</time>
												</span>
											</a>
										</h3>
									</div>
									<!-- collapseOne -->
									<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
										<div class="panel-body">
											<p>Capitalize on low hanging fruit to identify a ballpark value added activity beta test Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
											<p><a href="http://www.youtube.com/embed/9bZkp7q19f0?autoplay=1" class="btn btn-default btn-play far fa-play-circle lightbox fancybox.iframe">Play Video</a></p>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- sectionRow -->
						<section class="sectionRow">
							<h2 class="h6 text-uppercase fw-semi rowHeading">Section-2: Basic tools Management</h2>
							<!-- sectionRowPanelGroup -->
							<div class="panel-group sectionRowPanelGroup" id="accordion2" role="tablist" aria-multiselectable="true">
								<!-- panel -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading2One">
										<h3 class="panel-title fw-normal">
											<a class="accOpener" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse2One" aria-expanded="false" aria-controls="collapse2One">
												<span class="accOpenerCol">
													<i class="fas fa-chevron-circle-right accOpenerIcn"></i><i class="fas fa-play-circle inlineIcn"></i> Welcome to the course <span class="label label-primary text-white text-uppercase">Video</span>
												</span>
												<span class="accOpenerCol hd-phone">
													<span class="tagText bg-primary fw-semi text-white text-uppercase">preview</span>
													<time datetime="2011-01-12" class="timeCount">17 Min</time>
												</span>
											</a>
										</h3>
									</div>
									<!-- collapseOne -->
									<div id="collapse2One" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2One">
										<div class="panel-body">
											<p>Capitalize on low hanging fruit to identify a ballpark value added activity beta test Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
											<p><a href="<?php echo base_url('quiz/1/1')?>" class="btn btn-default far">Take Quiz</a></p>
										</div>
									</div>
								</div>
								<!-- panel -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading2Two">
										<h3 class="panel-title fw-normal">
											<a class="accOpener" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse2Two" aria-expanded="false" aria-controls="collapse2Two">
												<span class="accOpenerCol">
													<i class="fas fa-chevron-circle-right accOpenerIcn"></i><i class="far fa-file inlineIcn"></i> Add and manage users <span class="label label-success text-white text-uppercase">free</span>
												</span>
												<span class="accOpenerCol hd-phone">
													<time datetime="2011-01-12" class="timeCount">25 Min</time>
												</span>
											</a>
										</h3>
									</div>
									<!-- collapseOne -->
									<div id="collapse2Two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2Two">
										<div class="panel-body">
											<p>Capitalize on low hanging fruit to identify a ballpark value added activity beta test Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
											<p><a href="<?php echo base_url('quiz/1/2')?>" class="btn btn-default far">Take Quiz</a></p>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!--
						-- bookmarkFoot --
						<div class="bookmarkFoot">
							<div class="bookmarkCol">
								<ul class="socail-networks list-unstyled">
									<li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
									<li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
									<li><a href="#" class="google"><span class="fab fa-google-plus-g"></span></a></li>
									<li><a href="#"><span class="fas fa-plus"></span></a></li>
								</ul>
							</div>
							<div class="bookmarkCol text-right">
								<a href="#" class="btn btn-theme btn-warning text-uppercase fw-bold">Bookmark this course</a>
							</div>
						</div>
						<h2>About Instructor</h2>
						-- instructorInfoBox --
						<div class="instructorInfoBox">
							<div class="alignleft">
								<a href="instructor-single.html"><img src="http://placehold.it/80x80" alt="Merry Jhonson"></a>
							</div>
							<div class="description-wrap">
								<h3 class="fw-normal"><a href="instructor-single.html">Merry Jhonson</a></h3>
								<h4 class="fw-normal">Back-end Developer</h4>
								<p>Encyclopaedia galactica Orion's sword explorations vanquish the impossible, astonishment radio telescope with pretty stories for which there's little good.</p>
								<a href="#" class="btn btn-default font-lato fw-semi text-uppercase">View Profile</a>
							</div>
						</div>


						<h2>Reviews</h2>
						<h3 class="h6 fw-semi">There are 2 reviews on this course</h3>
						-- reviewsList --
						<ul class="list-unstyled reviewsList">
							<li>
								<div class="alignleft">
									<a href="instructor-single.html"><img src="http://placehold.it/50x50" alt="Lavin Duster"></a>
								</div>
								<div class="description-wrap">
									<div class="descrHead">
										<h3>Lavin Duster – <time datetime="2011-01-12">March 7, 2016</time></h3>
										<ul class="star-rating list-unstyled justify-end">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</div>
									<p>Brunch fap cardigan, gentrify put a bird on it distillery mumblecore you probably haven't heard of them asymmetrical bushwick. Put a bird on it schlitz fashion.</p>
								</div>
							</li>
							<li>
								<div class="alignleft">
									<a href="instructor-single.html"><img src="http://placehold.it/50x50" alt="Tim Cook"></a>
								</div>
								<div class="description-wrap">
									<div class="descrHead">
										<h3>Tim Cook – <time datetime="2011-01-12">March 5, 2016</time></h3>
										<ul class="star-rating list-unstyled justify-end">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</div>
									<p>Flxie sartorial cray flexitarian pop-up health goth single-origin coffee sriracha</p>
								</div>
							</li>
						</ul>
						-- reviesSubmissionForm --
						<form action="#" class="reviesSubmissionForm">
							<h2 class="text-noCase">Add a Review</h2>
							<p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
							<div class="form-group">
								<span class="formLabel fw-normal font-lato no-shrink">Your Rating</span>
								<ul class="star-rating list-unstyled">
									<li>
										<input type="checkbox" id="rate1" class="customFormReset">
										<label for="rate1" class="fas fa-star"><span class="sr-only">star</span></label>
									</li>
									<li>
										<input type="checkbox" id="rate2" class="customFormReset">
										<label for="rate2" class="fas fa-star"><span class="sr-only">star</span></label>
									</li>
									<li>
										<input type="checkbox" id="rate3" class="customFormReset">
										<label for="rate3" class="fas fa-star"><span class="sr-only">star</span></label>
									</li>
									<li>
										<input type="checkbox" id="rate4" class="customFormReset">
										<label for="rate4" class="fas fa-star"><span class="sr-only">star</span></label>
									</li>
									<li>
										<input type="checkbox" id="rate5" class="customFormReset">
										<label for="rate5" class="fas fa-star"><span class="sr-only">star</span></label>
									</li>
								</ul>
							</div>
							<div class="form-group">
								<label for="rview" class="formLabel fw-normal font-lato no-shrink">Your Review <span class="required">*</span></label>
								<textarea id="rview" class="form-control element-block"></textarea>
							</div>
							<div class="form-group">
								<label for="name" class="formLabel fw-normal font-lato no-shrink">Name <span class="required">*</span></label>
								<input type="text" id="name" class="form-control element-block">
							</div>
							<div class="form-group">
								<label for="Email" class="formLabel fw-normal font-lato no-shrink">Email <span class="required">*</span></label>
								<input type="email" id="Email" class="form-control element-block">
							</div>
							<button type="submit" class="btn btn-theme btn-warning text-uppercase font-lato fw-bold">Submit</button>
						</form>
					-->
					</article>

					<!-- 
					-- sidebar --
					<aside class="col-xs-12 col-md-3" id="sidebar">
						-- widget course select --
						<section class="widget widget_box widget_course_select">
							<header class="widgetHead text-center bg-theme">
								<h3 class="text-uppercase">Take This Course</h3>
							</header>
							<strong class="price element-block font-lato" data-label="price:">£39.00</strong>
							<ul class="list-unstyled font-lato">
								<li><i class="far fa-user icn no-shrink"></i> 199 Students</li>
								<li><i class="far fa-clock icn no-shrink"></i> Duration: 30 days</li>
								<li><i class="fas fa-bullhorn icn no-shrink"></i> Lectures: 10</li>
								<li><i class="far fa-play-circle icn no-shrink"></i> Video: 12 hours</li>
								<li><i class="far fa-address-card icn no-shrink"></i> Certificate of Completion</li>
							</ul>
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
								<img src="http://placehold.it/260x220" alt="image description">
							</div>
						</section>
						-- widget popular posts --
						<section class="widget widget_popular_posts">
							<h3>Popular Courses</h3>
							-- widget cources list --
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
						</section>
						-- widget tags --
						<nav class="widget widget_tags">
							<h3>Tags</h3>
							-- tag clouds --
							<ul class="list-unstyled tag-clouds font-lato">
								<li><a href="#">Future</a></li>
								<li><a href="#">Science</a></li>
								<li><a href="#">Coding</a></li>
								<li><a href="#">Education</a></li>
								<li><a href="#">Technology</a></li>
							</ul>
						</nav>
					</aside>
					-->
				</div>
			</div>
		</main>
		<?= $this->include('templates/footer') ?>
		</div>
		<!-- back top of the page -->
		<span id="back-top" class="text-center fa fa-caret-up"></span>

	</div>
	<div class="popup-holder">
		<div id="popup1" class="lightbox-demo">
			<form action="#" class="user-log-form">
				<h2>Login Form</h2>
				<div class="form-group">
					<input type="text" class="form-control element-block" placeholder="Username or email address *">
				</div>
				<div class="form-group">
					<input type="password" class="form-control element-block" placeholder="Password *">
				</div>
				<div class="btns-wrap">
					<div class="wrap">
						<label for="rem" class="custom-check-wrap fw-normal font-lato">
							<input type="checkbox" id="rem" class="customFormReset">
							<span class="fake-label element-block">Remember me</span>
						</label>
						<button type="submit" class="btn btn-theme btn-warning fw-bold font-lato text-uppercase">Login</button>
					</div>
					<div class="wrap text-right">
						<p>
							<a href="#" class="forget-link">Lost your Password?</a>
						</p>
					</div>
				</div>
			</form>
		</div>
		<div id="popup2" class="lightbox-demo">
			<form action="#" class="user-log-form">
				<h2>Register Form</h2>
				<div class="form-group">
					<input type="email" class="form-control element-block" placeholder="Email address *">
				</div>
				<div class="form-group">
					<input type="password" class="form-control element-block" placeholder="Password *">
				</div>
				<div class="btns-wrap">
					<div class="wrap">
						<button type="submit" class="btn btn-theme btn-warning fw-bold font-lato text-uppercase">Register</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<?= $this->endSection('content') ?>