<link rel="stylesheet" href="http://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />
<div class="gridParent">
    <div class="row">
        <div class="col-md-12 col-sm-12 reset-components">
            <!-- USER LISTING START -->
            <div class="box-generic padding-none overflow-hidden">
                <div class="heading-buttons innerLR">
                    <div class="clearfix"></div>
                    <?php $this->load->view('flashdata_admin'); ?>
                    <div>
                        <div style="float: left">
                            <h4 class="margin-none innerTB" align="center">Lets destory covid</h4>
                        </div>
                        <div style="float: right" id="countdown">
                            
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="container" style="float: left">
					<div id="game">
						<canvas id="canvas"></canvas>
						<div id="health-bars">
							<div class="health-label">
							<strong>Player 1</strong><br><span id="p1-kills">0</span> KO(s)
							</div>
							<div class="health">
								<span class="fill" id="p1-health"></span>
							</div>
							<div class="health">
								<span class="fill" id="p2-health"></span>
							</div>
							<div class="health-label">
							<strong>Player 2</strong><br><span id="p2-kills">0</span> KO(s)
							</div>
						</div>
					</div>
					<div id="controls">
						<div id="p1-ctrls">
						<div class="move" id="p1-left"><span class="arrow-left"></span></div>
						<div class="move" id="p1-right"><span class="arrow-right"></span></div>
						<div class="a-btn" id="p1-up">A</div>
						<div class="b-btn" id="p1-atk">B</div>
						</div>
						<div id="p2-ctrls">
						<div class="move" id="p2-left"><span class="arrow-left"></span></div>
						<div class="move" id="p2-right"><span class="arrow-right"></span></div>
						<div class="a-btn" id="p2-up">A</div>
						<div class="b-btn" id="p2-atk">B</div>
						</div>
					</div>
					<div id="keys">
						<div id="p1-keys">
						<kbd>A</kbd>
						<kbd>D</kbd>
						<kbd>W</kbd>
						<kbd>Shift</kbd>
						</div>
						<div id="p2-keys">
						<kbd>&#8592;</kbd>
						<kbd>&#8594;</kbd>
						<kbd>&#8593;</kbd>
						<kbd>;</kbd>
						</div>
					</div>
					</div>
					<div style="float: right;float:right;height: 250px;width:250px; padding:3px;background:#f00;">
						<fieldset>
    						<legend>Commentry:</legend>
							<div id="commentry" style="overflow: auto;height:224px;display:block;background:#fff;"></div>
						<fieldset>	
                    </div>
                        <div class="clearfix"></div>
                </div>
            </div>
            <!-- // USER LISTING -->
        </div>
    </div>
</div>
<div class="modal fade" id="editPromo" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content" id="update_user_info">

        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/data-table-jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/user.js"></script>
<script>
    $('#sys-User_listing').DataTable();
</script>
