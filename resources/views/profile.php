<?php include 'layout.php';?>
<div class="container" >
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<h2 class="profile_title">Profile</h2>
			<p class="profile_det">Your profile details</p>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row profile_image">
		<form action="edit">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<p class="profile_avatar">Avatar</p>
			</div>
			<div class="col-md-4">
				<img  src="<?php echo "uploads/".$user->image; ?>" width="180" height="180" />
			</div>
			<div class="col-md-4"></div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4"></div>
			<div class="col-md-6"></div>
				<input type="hidden" name="nickname"  value="<?php echo $user->nickname; ?>">
				<input type="hidden" name="email" value="<?php echo $user->email; ?>">
				<input type="hidden" name="password"  value="<?php echo $user->password;?>">			
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-3">
				<p class="profile_details">Your nickname is </p>
			</div>
			<div class="col-md-7"><p class="profile_person"><?php echo $user->nickname; ?> </p></div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-3">
				<p class="profile_details">Your email is </p>
			</div>
			<div class="col-md-7"><p class="profile_person"><?php echo $user->email; ?> </p></div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-3">
				<p class="profile_details">Your password is </p>
			</div>
			<div class="col-md-7"> <p class="profile_person"><?php echo $user->password; ?> </p></div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<input type="submit" name="submit"  class="btn btn-info profile_edit"  value="Edit profile">
		</form>
			</div>
			<div class="col-md-6"></div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<form action="delete">
					<input type="hidden" name="nickname"  value="<?php echo $user->nickname; ?>">
					<input type="submit" name="submit"  class="btn btn-danger profile_delete"  value="Delete profile">
				</form>
			</div>
			<div class="col-md-4"></div>
	</div>
</div>
