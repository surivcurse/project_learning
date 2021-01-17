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
                        <h3 class="list-heading"><a href="event-sigle.html">WordPress Theme Development with
                                Bootstrap</a></h3>
                        <address><time datetime="2011-01-12">8:00 am - 5:00 pm</time> | Great Russell Street, WC1B 3DG
                            UK</address>
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
                        <address><time datetime="2011-01-12">12:00 pm - 5:00 pm</time> | No1 Warehouse London, UK
                        </address>
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
                        <h3 class="list-heading"><a href="event-sigle.html">Free Yoga &amp; Excercise Class at Every
                                Morning</a></h3>
                        <address><time datetime="2011-01-12">4:00 pm - 8:00 pm</time> | 21 New Globe Walk London, UK
                        </address>
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
                        <address><time datetime="2011-01-12">8:00 am - 5:00 pm</time> | Great Russell Street, WC1B 3DG
                            UK</address>
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
                        <h3 class="list-heading"><a href="event-sigle.html">Learn Network Webinar for Music Teachers</a>
                        </h3>
                        <address><time datetime="2011-01-12">12:00 pm - 5:00 pm</time> | No1 Warehouse London, UK
                        </address>
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
                        <h3 class="list-heading"><a href="event-sigle.html">Digital Marketing Briefing: Viyalosla
                                2017</a></h3>
                        <address><time datetime="2011-01-12">4:00 pm - 8:00 pm</time> | 21 New Globe Walk London, UK
                        </address>
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
                        <address><time datetime="2011-01-12">12:00 pm - 5:00 pm</time> | No1 Warehouse London, UK
                        </address>
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
</div>
<?= $this->endSection("content") ?>