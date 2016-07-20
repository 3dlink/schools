<style type="text/css">
label{
	color: black;
}
</style>

<article class="card shadow-1">
  <fieldset>
      <legend><b>Application</b><?php echo ': '; if (!empty($application)) { echo '<small>'.$application['Application']['school_name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Name</label>
              <?php echo h($application['Application']['name'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Last</label>
              <?php echo h($application['Application']['last'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Email</label>
              <?php echo h($application['Application']['email'])?>
						</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>

      	<div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Phone</label>
              <?php echo h($application['Application']['phone'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Position</label>
              <?php echo h($application['Application']['position'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Treasurer Name</label>
              <?php echo h($application['Application']['treasurer_name'])?>
						</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>

      	<div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Treasurer Email</label>
              <?php echo h($application['Application']['treasurer_email'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Treasurer Phone</label>
              <?php echo h($application['Application']['treasurer_phone'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>School Name</label>
              <?php echo h($application['Application']['school_name'])?>
						</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>

      	<div>
      		<!-- <div class="col-md-4">
      			<div class="form-group">
							<label>Sport</label>
              <?php echo h($application['Application']['sport'])?>
						</div>
      		</div> -->
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Number of members</label>
              <?php echo h($application['Application']['size'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Website</label>
              <?php echo h($application['Application']['website'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Facebook page</label>
              <?php echo h($application['Application']['facebook'])?>
						</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>

      	<div>
      		
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Free</label>
              <?php if($application['Application']['free']){echo 'Yes';}else{echo 'No';}?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Logo</label>
              <img style="width:100%;" src="<?php echo $this->webroot; ?>files/<?php echo $application['Application']['logo']; ?>">
						</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      		<div class="margenesVerticales" style="text-align:right;">
	          	<input type="button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'applications';" value="Go Back" style="width: 80px;"> 
      			<?php if(!$application['Application']['active']){ ?>
	          	<input type="button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'applications/addlogo/<?php echo $application['Application']['id']; ?>';" value="Accept" style="width: 80px;"> 	  
	          <?php }else{ ?>
	          	<input type="button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'applications/removelogo/<?php echo $application['Application']['id']; ?>';" value="Remove" style="width: 80px;"> 	  
	          <?php } ?>
					</div>
      	</div>    
</div>          
    </fieldset>  
</article>

