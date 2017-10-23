<?php echo $header; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo $this->lang->line('dash_welcome'); ?>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                <i class="fa fa-dashboard"></i>
                	<?php echo $this->lang->line('nav_dash'); ?>
                </li>
            </ol>
        </div>
        <?php if($maintenaceActive){ ?>
        <div class="col-md-12">
        	<div class="alert alert-warning">
        		<p><?php echo $this->lang->line('dash_maintenance_message'); ?></p>
        	</div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
        	<div class="panel panel-default">
            	<div class="panel-body">
					<p><?php echo $this->lang->line('dash_message'); ?></p>
                </div>
            </div>
            
        </div>

      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
<?php echo $footer; ?>