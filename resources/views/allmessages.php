<?php include 'layout.php';?>
<div class="container" >
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="well allusers_well"><h3>Here are all messages!</h3></div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php foreach($message as $m){?>
			<div class="allmessages_message">
				<p class="allmessages_body"> <?php echo $m->body;?></p>
				<p >in the room</p>
				<span class="allmessages_room"> <?php echo $m->room_name;?></span>
				<p>author is</p>
				<span class="allusers_names"> <?php echo $m->nickname; ?></span>
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