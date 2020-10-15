<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 paceSimple footer-sticky navbar-sticky"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 paceSimple footer-sticky navbar-sticky"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 paceSimple footer-sticky navbar-sticky"> <![endif]-->
<!--[if gt IE 8]> <html class="ie paceSimple footer-sticky navbar-sticky"> <![endif]-->
<!--[if !IE]><!--><html class="paceSimple footer-sticky navbar-sticky"><!-- <![endif]-->

<head>
<title>Condo App</title>

<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

<!--
**********************************************************
In development, use the LESS files and the less.js compiler
instead of the minified CSS loaded by default.
**********************************************************
<link rel="stylesheet/less" href="../assets/less/admin/module.admin.stylesheet-complete.layout_fixed.true.less" />
-->

<!--[if lt IE 9]><link rel="stylesheet" href="../assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin/module.admin.stylesheet-complete.layout_fixed.true.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/battleground.css" />
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/images/avatar-36x36.jpg"/>
</head>
<body class="scripts-async menu-right-hidden">
	<!-- BEGIN HEADER -->
	<?php $this->load->view('admin/templates/header'); ?>
	<!-- BEGIN CONTENT -->
	<div class="col-md-10 col-sm-8">
		<?php $this->load->view($middle); ?>
	</div>	
	<!-- END CONTENT -->
	<?php $this->load->view('admin/templates/footer'); ?>
