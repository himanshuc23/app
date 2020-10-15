<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 paceSimple footer-sticky"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 paceSimple footer-sticky"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 paceSimple footer-sticky"> <![endif]-->
<!--[if gt IE 8]> <html class="ie paceSimple footer-sticky"> <![endif]-->
<!--[if !IE]><!--><html class="paceSimple footer-sticky"><!-- <![endif]-->

<head>
<title>Clinic</title>

<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

<!--
**********************************************************
In development, use the LESS files and the less.js compiler
instead of the minified CSS loaded by default.
**********************************************************
<link rel="stylesheet/less" href="<?php echo base_url(); ?>assets/less/admin/module.admin.stylesheet-complete.layout_fixed.true.less" />
-->

<!--[if lt IE 9]><link rel="stylesheet" href="<?php echo base_url(); ?>assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin/module.admin.stylesheet-complete.layout_fixed.true.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/validationEngine.jquery.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/cust_paginition.css" type="text/css" />
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/images/avatar-36x36.jpg"/>
</head>
<body class=" loginWrapper menu-right-hidden" >

<!-- Main Container Fluid -->
<div class="container-fluid menu-hidden animated fadeInDown" > 
  
  <!-- Content -->
  <div id="content" >
    <div class="layout-app">
      <div class="container"><!-- row-app -->
        <div class="row row-app"> 
          <!-- col --> 
          <!-- col-separator.box -->
          <div class="col-separator col-unscrollable box"> 
            
            <!-- col-table -->
            <div class="col-table">
              <h4 class="innerAll margin-none border-bottom text-center"><i class="fa fa-lock"></i> Login to your Account</h4>
              
              <!-- col-table-row -->
              <div class="col-table-row"> 
                
                <!-- col-app -->
                <div class="col-app col-unscrollable"> 
                  
                  <!-- col-app -->
                  <div class="col-app">
                    <div class="login">
                      <div class="placeholder text-center"><i class="fa fa-lock"></i></div>
                      <div class="panel panel-default col-sm-6 col-sm-offset-3">
                        <div class="panel-body">
                          <?php $this->load->view('flashdata_admin'); ?>
                            <form role="form" action="" method="post" id="frmLogin">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control validate[required,custom[email]] text-input" name="username" id="email_address" placeholder="Enter email" value ="<?php if (isset($_COOKIE['username']) && $_COOKIE['username'] != ""){ echo $_COOKIE['username']; }?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control validate[required] text-input" id="password" name="password" placeholder="Password" value ="<?php if (isset($_COOKIE['password']) && $_COOKIE['password'] != ""){ echo $_COOKIE['password']; }?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" <?php if (isset($_COOKIE['username']) && $_COOKIE['username'] != ""){ ?> checked <?php } ?> >
                                        Remember my details </label>
                                </div>
                            </form>
                        </div>
                      </div>
                      <div class="col-sm-4 col-sm-offset-4 text-center">
                        <div class="innerAll"> <a href="<?php echo base_url(); ?>user/signUp" class="btn btn-info">Create a new account? <i class="fa fa-pencil"></i> </a>
                          <div class="separator"></div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <!-- // END col-app --> 
                  
                </div>
                <!-- // END col-app.col-unscrollable --> 
                
              </div>
              <!-- // END col-table-row --> 
              
            </div>
            <!-- // END col-table --> 
            
          </div>
          <!-- // END col-separator.box --> 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- // END row-app --> 

<!-- Global --> 
<script data-id="App.Config">
	var App = {};        var basePath = '',
		commonPath = '<?php echo base_url(); ?>assets/',
		rootPath = '<?php echo base_url(); ?>',
		DEV = false,
		componentsPath = '<?php echo base_url(); ?>assets/components/';

	var primaryColor = '#eb6a5a',
		dangerColor = '#b55151',
		successColor = '#609450',
		infoColor = '#4a8bc2',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';

	var themerPrimaryColor = primaryColor;

</script>
<script >
    /*$(document).ready(function(){
        //$("#frmLogin").validationEngine();
    });*/
</script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]--> 

<script src="<?php echo base_url(); ?>assets/library/jquery/jquery.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<!--<script src="<?php echo base_url(); ?>assets/js/user.js"></script> -->
<script src="<?php echo base_url();?>assets/js/jquery.validationEngine-en.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validationEngine.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/library/jquery/jquery-migrate.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script> 
<script src="<?php echo base_url(); ?>assets/library/modernizr/modernizr.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/core_less-js/less.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/charts_flot/excanvas.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/core_browser/ie/ie.prototype.polyfill.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script> <script>if (/*@cc_on!@*/false && document.documentMode === 10) { document.documentElement.className+=' ie ie10'; }</script> 
<script src="<?php echo base_url(); ?>assets/library/bootstrap/js/bootstrap.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/core_nicescroll/jquery.nicescroll.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/core_breakpoints/breakpoints.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/core_preload/pace.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script> 
<script src="<?php echo base_url(); ?>assets/components/core_preload/preload.pace.init.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script> 
<script src="<?php echo base_url(); ?>assets/components/core/core.init.js?v=v2.0.0-rc1"></script>
</body>
</html>