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
						<li><a href="contact.html">Quiz</a></li>
						<li class="active">Swift Programming for Beginners <?php echo $course ?></li>
					</ol>
				</div>
			</nav>
			<!-- two columns -->

			<div id="two-columns" class="container">
				<div class="row">
				<div id="quiz">
				<!-- # day hours min sec # 2 * 24 * 60 * 60 * 1000 -->
					<countdown :time=" 5 * 60 * 1000">
						<template slot-scope="props"><h1 class="text-danger">เวลาในการตอบคำถาม ：{{ props.days }} วัน, {{ props.hours }} ชั่วโมง, {{ props.minutes }} นาที, {{ props.seconds }} วินาที.</h1	></template>
					</countdown>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 ><strong class="text-primary">#<?php echo $quiz ?></strong> Github command to deploy comits?</h4>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input id="customCheck01" type="checkbox" class="custom-control-input">
								<label for="customCheck01" class="custom-control-label">git push</label>
							</div>
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input id="customCheck02" type="checkbox" class="custom-control-input">
								<label for="customCheck02" class="custom-control-label">git commit -m "message"</label>
							</div>
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input id="customCheck03" type="checkbox" class="custom-control-input">
								<label for="customCheck03" class="custom-control-label">git pull</label>
							</div>
						</div>
					</div>
					<div class="panel-footer">

						<a href="#" class="btn btn-success float-right">Submit <i class="material-icons glyphicon glyphicon-arrow-right"></i></a>
					</div>
					
				</div>
				</div>
			</div>
			
		</main>
		<?= $this->include('templates/footer') ?>
		</div>
		<!-- back top of the page -->
		<span id="back-top" class="text-center fa fa-caret-up"></span>

	</div>
	
<?= $this->endSection('content') ?>