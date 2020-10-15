<!-- Content -->
<?php
$this->ci = & get_instance();
$arr_session = $this->ci->session->all_userdata();
$strFirstName = $this->ci->encrypt->decode($arr_session['first_name']);
$strLastName = $this->ci->encrypt->decode($arr_session['last_name']);
$intLevel = (int)$this->ci->encrypt->decode($arr_session['level']);
$arrRoles = array(1 => 'Super Admin', 2=> 'Admin', 3 => 'Secretory', 4 => 'Member - Owner', 5 => 'Member - Tenant');
$strLevel = $arrRoles[$intLevel]?>
<div id="content">
  <div class="navbar hidden-print main navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a id="logo" href="index.html" class="pull-left">
        <h4>My<span>App</span></h4>
        </a> </div>
      <div class="hideME">
        <div class="user-action pull-right menu-right-hidden-xs menu-left-hidden-xs">
          <div class="dropdown username hidden-xs pull-left"> <a class="dropdown-toggle " data-toggle="dropdown" href="#"> <span class="media margin-none"> <span class="pull-left"><img src="<?php echo base_url(); ?>assets/images/people/35/16.jpg" alt="user" class="img-circle"></span> <span class="media-body">Welcome Admin !<span class="caret"></span> </span> </span> </a>
            <ul class="dropdown-menu pull-right">
                <li ><a href="#" ><i></i> Profile</a></li>
                <li ><a href="#">Logout</a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!-- // END navbar -->
  
  <div class=" collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav container">
      <li <?php if($tag == 'dashboard') {?>class="active"<?php }?>> <a  href="<?php echo base_url();?>user/dashboard"><i class="fa fa-fw fa-dashboard"></i> Battle Ground </a> </li>
    </ul>
  </div>
  <div class="layout-app animated fadeInDown" style="width:100%">
    <div class="container" style="width:110% !important;margin-left: 5%;margin-right: 5%">
      <!-- row -->
      <div class="row row-app margin-none"> 
        
        <!-- col -->
        <div class="" style="width:125% !important;">
          
          <!-- col-separator.box -->
          <div class="col-separator box col-separator-first reset-components">
            <ul class="list-group list-group-1 margin-none collapse" id="collapse-1">
              <!-- Added accordion mode 27.07.2014 -->

              <?php foreach($arrAllCondos as $condo) {?>
                  <li class="list-group-item"><a href="<?php echo base_url();?>unit/listCondoUnit/<?php echo base64_encode($condo['id']) ?>"><i class="fa fa-home"></i> <?php echo $condo['name']; ?></a> </li>
              <?php } ?>
            </ul>
            <div class="col-separator-h box"></div>
            </div>
          </div>
          <!-- // END col-separator.box --> 
          
        </div>
        <!-- // END col -->
