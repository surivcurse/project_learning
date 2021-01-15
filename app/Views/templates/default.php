<!DOCTYPE html>
<html>
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-9">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=0.0">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the description -->
	<meta name="description" content="STUDYLMS HTML Template">
	<!-- set the Keyword -->
	<meta name="keywords" content="">
	<meta name="author" content="STUDYLMS HTML Template">
	<!-- set the page title -->
	<title>STUDYLMS HTML Template</title>
	<!-- include google roboto font cdn link -->
	<link href="https://fonts.googleapis.com/css?family=Lato:299,300i,400,400i,700,700i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css'); ?>">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url('css/plugins.css'); ?>">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url('css/colors.css'); ?>">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url('style.css'); ?>">
	<!-- include the site responsive stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url('css/responsive.css'); ?>">
</head>
<body>
    <?= $this->renderSection('content') ?>
	<!-- loader of the page -->
	<?= $this->include('templates/loader') ?>
	<!-- include jQuery -->
	<script src="<?= base_url('js/jquery.js') ?>"></script>
	<!-- include jQuery -->
	<script src="<?= base_url('js/plugins.js') ?>"></script>
	<!-- include jQuery -->
	<script src="<?= base_url('js/jquery.main.js') ?>"></script>
	<!-- include jQuery -->
	<script type="text/javascript" src="<?= base_url('js/init.js') ?>"></script>
</body>
</html>