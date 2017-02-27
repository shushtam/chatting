<?php include 'layout.php';?>
<div class="container" >
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="well allusers_well"><h3>Here are all our users!</h3></div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php foreach($user as $u){?>
			<div class="allusers_avatar">
				<img src="<?php echo "uploads/".$u->image;?>" width="180" height="180" />
				<br>
				<span class="allusers_names"> <?php echo $u->nickname;?></span>
				<hr>
			</div>
			<?php } ?>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<a href="../public"><button class="btn btn-primary">Go Back</button></a>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>