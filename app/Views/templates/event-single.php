<?= $this->extend("templates/default") ?>
<?= $this->section("content") ?>
<!-- main container of all the page elements -->
<div id="wrapper">
    <?= $this->include("templates/another-header") ?>

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
                    <li><a href="home.html">Home</a></li>
                    <li><a href="event-sigle.html">Events</a></li>
                    <li class="active">WordPress Theme Development with Boostrap</li>
                </ol>
            </div>
        </nav>
        <!-- two columns -->
        <div id="two-columns" class="container">
            <div class="row">
                <!-- content -->
                <article id="content" class="col-xs-12 col-md-9">
                    <!-- visualImageHolder -->
                    <div class="aligncenter visualImageHolder">
                        <img src="http://placehold.it/828x430" alt="image description">
                        <!-- captionAddress -->
                        <address class="captionAddress bg-theme">
                            <div class="addressColumn">
                                <i class="far fa-clock icn text-white"></i>
                                <strong class="title text-uppercase fw-semi element-block">start time :</strong>
                                <strong class="fw-normal element-block"><time datetime="2011-01-12">March 01, 2017 AT
                                        8.00 am</time></strong>
                            </div>
                            <div class="addressColumn">
                                <i class="far fa-flag icn text-white"></i>
                                <strong class="title text-uppercase fw-semi element-block">Finish time :</strong>
                                <strong class="fw-normal element-block"><time datetime="2011-01-12">March 01, 2017 AT
                                        8.00 am</time></strong>
                            </div>
                            <div class="addressColumn">
                                <i class="fas fa-map-marker-alt icn text-white"></i>
                                <strong class="title text-uppercase fw-semi element-block">Address:</strong>
                                <strong class="fw-normal element-block">Peppard Hill, UK</strong>
                            </div>
                        </address>
                    </div>
                    <h1>WordPress Theme Development with Boostrap</h1>
                    <h3 class="content-h3">Event Description</h3>
                    <p>Numbers say it all. Globally, progress in the wind sector continues to be strong with increasing
                        annual installed capacity and growing investment in the sector. In 2015 alone, 63,013 megawatts
                        of wind power capacity was installed globally an annual market growth of 22 percent. It is
                        continuing its progress towards becoming a mainstream, competitive and reliable power source in
                        both developing and mature markets. In fact, wind is becoming cheap enough in many places in the
                        U.S. and around the world to compete effectively with fossil fuels.</p>
                    <!-- ticketsInfoAside -->
                    <aside class="ticketsInfoAside bg-dark">
                        <!-- ticketsInfoList -->
                        <div id="defaultCountdown" class="comming-timer"></div>
                        <a href="#" class="btn btn-default btn-white text-uppercase fw-bold font-lato">buy tickets</a>
                    </aside>
                    <h3 class="content-h3">Event Content</h3>
                    <!-- eventContentTabsWrap -->
                    <div class="eventContentTabsWrap">
                        <ul class="nav nav-tabs no-shrink font-lato" role="tablist">
                            <li role="presentation" class="active"><a href="#DiscussAbout" aria-controls="DiscussAbout"
                                    role="tab" data-toggle="tab">Discuss About</a></li>
                            <li role="presentation"><a href="#Participants" aria-controls="Participants" role="tab"
                                    data-toggle="tab">Participants</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="DiscussAbout">
                                <ul class="list-unstyled listDefault">
                                    <li>Thomas Edison may have been behind the invention.</li>
                                    <li>Edison worked alongside partners, both financial and commercial, to get his best
                                        inventions off the ground,</li>
                                    <li>Battling challenging cost targets and the need to build.</li>
                                    <li>Partnership with a supplier or original equipment manufacturer.</li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Participants">
                                <ul class="list-unstyled listDefault">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
                                    <li>tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Partnership with a supplier or original equipment manufacturer.</li>
                                    <li>tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>Thomas Edison may have been behind the invention of the electric light bulb, but he did not work
                        Edison work along side partners, both financial and commercial, to get his inventions.</p>
                    <!-- mapHolder -->
                    <div class="mapHolder">
                        <span class="mapMarker"><img src="<?= base_url(
           "images/map-marker.png"
       ) ?>" alt="marker"></span>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13607.729903367896!2d74.30893281977539!3d31.498539800000007!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1530737870558"
                            style="border:0" allowfullscreen="" width="100%" height="300" frameborder="0"></iframe>
                    </div>
                    <div class="bookmarkFoot">
                        <div class="bookmarkCol">
                            <p><strong class="title font-lato">Tags:</strong> <a href="#">Online</a>, <a href="#">App
                                    Developement</a></p>
                        </div>
                        <div class="bookmarkCol text-right">
                            <div class="shareWrap">
                                <strong class="title font-lato">Share:</strong>
                                <ul class="socail-networks list-unstyled">
                                    <li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#" class="google"><span class="fab fa-google-plus-g"></span></a></li>
                                    <li><a href="#"><span class="fas fa-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- sidebar -->
                <aside class="col-xs-12 col-md-3" id="sidebar">
                    <!-- widget search -->
                    <section class="widget widget_search">
                        <!-- search form -->
                        <form action="#" class="search-form">
                            <fieldset>
                                <input placeholder=" Search&hellip;" class="form-control" name="s" type="search">
                                <button type="button" class="fas fa-search"><span class="sr-only">search</span></button>
                            </fieldset>
                        </form>
                    </section>
                    <!-- widget categories -->
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
                    <!-- widget intro -->
                    <section class="widget widget_intro">
                        <h3>Course Intro</h3>
                        <div class="aligncenter overlay">
                            <a href="https://www.youtube.com/embed/5WN9vk36WV8"
                                class="btn-play far fa-play-circle lightbox fancybox.iframe"></a>
                            <img src="http://placehold.it/262x220" alt="image description">
                        </div>
                    </section>
                    <!-- widget popular posts -->
                    <section class="widget widget_popular_posts">
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
                                        <strong
                                            class="price text-primary element-block font-lato text-uppercase">$99.00</strong>
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
                                        <strong
                                            class="price text-success element-block font-lato text-uppercase">Free</strong>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="course-single.html">
                                    <div class="alignleft">
                                        <img src="http://placehold.it/80x70" alt="image description">
                                    </div>
                                    <div class="description-wrap">
                                        <h4>Swift Programming For Beginners</h4>
                                        <strong
                                            class="price text-primary element-block font-lato text-uppercase">$75.00</strong>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <!-- widget archives -->
                    <section class="widget widget_archives">
                        <h3>Archives</h3>
                        <select data-placeholder="Select Month" class="chosen-select-no-single">
                            <option value="0">Select Month</option>
                            <option value="0">Select Month</option>
                            <option value="0">Select Month</option>
                        </select>
                    </section>
                </aside>
            </div>
        </div>
    </main>

</div>
<?= $this->endSection("content") ?>