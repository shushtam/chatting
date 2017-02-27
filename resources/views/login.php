<?php include 'layout.php';?>
<div class="container" ng-app="chatlg" ng-controller="logController" >
	<div class="row login_title">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<h3 class="login_header">Login</h3>
			<hr>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<form ng-submit="loginUser()">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<label for="nickname" class="login_label">Enter your nickname</label>
				<input type="text" class="form-control login" name="nickname" ng-model="loginData.nickname" placeholder="Your nickname">
			</div>
			<div class="col-md-4"></div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<label for="password" class="login_label">Enter your password</label>
				<input type="password" class="form-control login" name="password" ng-model="loginData.password" placeholder="Your password">
			</div>
			<div class="col-md-4"></div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<input type="submit" name="submit" class="btn btn-success" value="Log in!">
			</div>
			<div class="col-md-4"></div>
	</div>
		</form>
	<div ng-if="check==1">
		<form action="room">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<input type="hidden" name="nickname"   value="{{nickname}}" >
					<input type="submit" name="submit" class="btn btn-info login_btn" value="Go to chat!">
				</div>
				<div class="col-md-2"></div>
			</div>
		</form>
	</div>
	<div ng-if="check==1">
		<form action="show">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<input type="text" class="login_inputs" name="nickname"   value="{{nickname}}" >
					<input type="text" class="login_inputs" name="email" ng-model="loginData.email" placeholder="Your email">
					<input type="text" class="login_inputs" name="password" ng-model="loginData.password" placeholder="Your password">
					<input type="submit" name="submit" class="btn btn-info login_btn" value="Go to profile!">
				</div>
				<div class="col-md-2"></div>
			</div>
		</form>
	</div>
	<div ng-if="check==2">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h4 class="login_warning">Wrong email or password, please sign in again</h4>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<div class="well login_well"><h3>If you have not account yet, please sign up</h3></div>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<a href="sign"><button class="btn btn-info">Sign up!</button></a>
			<a href="../public" class="margin_left"><button class="btn btn-primary">Go Back</button></a>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
