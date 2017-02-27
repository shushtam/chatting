<?php include 'layout.php';?>
<div class="container" >
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<h2 class="edit_header">Change your details</h2>
			</div>
			<div class="col-md-6"></div>
	</div>
	<div class="row">
		<form action="update">
			<input type="hidden" name="chatusers_id"  value="<?php echo $user->chatusers_id; ?>">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<label for="nickname" class="edit_label">Your nickname</label>
				<input type="text" class="form-control" name="nickname"  value="<?php echo $user->nickname; ?>">
			</div>
			<div class="col-md-6"></div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<label for="email" class="edit_label">Your email</label>
				<input type="text" class="form-control" name="email" value="<?php echo $user->email; ?>">
			</div>
			<div class="col-md-6"></div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<label for="password" class="edit_label">Your password</label>
				<input type="text" class="form-control" name="password"  value="<?php echo $user->password;?>">
			</div>
			<div class="col-md-6"></div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<input type="submit" name="submit" class="btn btn-success edit_save" value="Save">
			</div>
			<div class="col-md-6"></div>
		</form>
	</div>
</div>