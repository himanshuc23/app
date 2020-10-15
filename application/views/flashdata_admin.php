<?php if ($this->session->flashdata('success') != '') { ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cust_pagination.css" />
<div class="" align="center">
        <div id="message-success" class="note note-success" >
            <div class="image" style="margin-left:5px; margin-right:5px;">
                <span style="color:#000000; font-size:14px; width:auto; text-align:left;">   <?php #echo image_asset('success.png', '', array('border' => '0', 'height' => '28', 'alt' => 'Success')); ?> 
                <b><?php echo $this->session->flashdata('success'); ?></b></span>
            </div>
                <div class="dismiss">
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
					<script type="text/javascript">$('#message-success').fadeOut(6000);</script><!--<a href="#message-success"></a> --> 
                </div>
        </div>
</div>
<?php } 
if ($this->session->flashdata('error') != '') { ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cust_pagination.css" />
<div class="" align="center">
        <div id="message-error" class="note note-danger" >
            <div class="image" style="margin-left:5px; margin-right:5px;">
                <span style="color:#000000; font-size:14px; width:auto; text-align:left;">   <?php #echo image_asset('error.png', '', array('border' => '0', 'height' => '28', 'alt' => 'Error')); ?> 
                <b><?php echo $this->session->flashdata('error');?></b></span>
            </div>
                <div class="dismiss">
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
					<script type="text/javascript">$('#message-error').fadeOut(6000);</script>
                </div>
        </div>
</div>
<?php } ?>
