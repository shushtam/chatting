<?php include 'layout.php';?>
<div class="container" >
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="well allusers_well"><h3>Here are all existing rooms!</h3></div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php foreach($room as $r){?>
			<div class="allrooms_room">
				<p class="allrooms_name"><?php echo $r->room_name;?></p>
				<p>created by</p>
				<span class="allusers_names"> <?php echo $r->nickname;?></span>
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