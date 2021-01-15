		<!-- header of the page -->
		<header id="page-header" class="page-header-stick">
			<!-- top bar -->
			<div class="top-bar bg-dark text-gray">
				<div class="container">
					<div class="row top-bar-holder">
						<div class="col-xs-9 col">
							<!-- bar links -->
							<ul class="font-lato list-unstyled bar-links">
								<li>
									<a href="tel:+611234567890">
										<strong class="dt element-block text-capitalize hd-phone">Call :</strong>
										<strong class="dd element-block hd-phone">+(61) 123 456 7890</strong>
										<i class="fas fa-phone-square hd-up-phone hidden-sm hidden-md hidden-lg"><span class="sr-only">phone</span></i>
									</a>
								</li>
								<li>
									<a href="mailto:&#069;&#120;&#097;&#109;&#112;&#108;&#101;&#064;&#100;&#111;&#109;&#097;&#105;&#110;&#046;&#099;&#111;&#109;">
										<strong class="dt element-block text-capitalize hd-phone">Email :</strong>
										<strong class="dd element-block hd-phone">&#069;&#120;&#097;&#109;&#112;&#108;&#101;&#064;&#100;&#111;&#109;&#097;&#105;&#110;&#046;&#099;&#111;&#109;</strong>
										<i class="fas fa-envelope-square hd-up-phone hidden-sm hidden-md hidden-lg"><span class="sr-only">email</span></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-3 col justify-end">
							<!-- user links -->
							<ul class="list-unstyled user-links fw-bold font-lato">
								<li><a href="#popup1" class="lightbox">Login</a> <span class="sep">|</span> <a href="#popup2" class="lightbox">Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- header holder -->
			<div class="header-holder">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-3">
							<!-- logo -->
							<div class="logo">
								<a href="<?= base_url() ?>">
									<img class="hidden-xs" src="images/logo.png" alt="studylms">
									<img class="hidden-sm hidden-md hidden-lg" src="images/logo-dark.png" alt="studylms">
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-9 static-block">
							<!-- nav -->
							<nav id="nav" class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- navbar collapse -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<!-- main navigation -->
									<ul class="nav navbar-nav navbar-right main-navigation text-uppercase font-lato">
										<?php echo view_cell('App\Libraries\Nav::mainMenu') ?>
									</ul>
								</div>
								<!-- navbar form -->
								<form action="#" class="navbar-form navbar-search-form navbar-right">
									<a class="fas fa-search search-opener" role="button" data-toggle="collapse" href="#searchCollapse" aria-expanded="false" aria-controls="searchCollapse"><span class="sr-only">search opener</span></a>
									<!-- search collapse -->
									<div class="collapse search-collapse" id="searchCollapse">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search &hellip;">
											<button type="button" class="fas fa-search btn"><span class="sr-only">search</span></button>
										</div>
									</div>
								</form>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>