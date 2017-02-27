@include('layout');
<script src="validate.js"></script>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<h3 class="login_header">Sign up!</h3>
			<hr>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>
<div class="container" ng-app="chatusr" ng-controller="userController">
	<div class="row">
		{!! Form::open(array('url' => 'store','method'=>'POST','files'=>true)) !!}
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				{!! Form::label('nickname', 'Nickname', array('class' => 'login_label')) !!}
        		{!! Form::text('nickname', null, array('class' => 'form-control login','id'=>'nickname')) !!}
			</div>
			<div class="col-md-4"></div>
	</div>	
    @if (Session::has('message'))
   		<div class="row">
	   		<div class="col-md-2"></div>
	   		<div class="col-md-6">
	   			<div class="alert alert-danger">{{ Session::get('message') }}</div>
	   		</div>
	   		<div class="col-md-4"></div>
    	</div>
	@endif
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				{!! Form::label('email', 'Email', array('class' => 'login_label')) !!}
        		{!! Form::text('email', null, array('class' => 'form-control login','id'=>'email')) !!}
			</div>
			<div class="col-md-4"></div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				{!! Form::label('password', 'Password', array('class' => 'login_label')) !!}
        		{!! Form::password('password', array('class' => 'form-control login','id'=>'password')) !!}
			</div>
			<div class="col-md-4"></div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				{!! Form::label('image', 'Image', array('class' => 'login_label')) !!}
      			{!! Form::file('file', null, array('class' => 'form-control login')) !!}
			</div>
			<div class="col-md-4"></div>
	</div>
	@if (Session::has('error'))
   		<div class="row sign_errors">
	   		<div class="col-md-2"></div>
	   		<div class="col-md-6">
	   			<div class="alert alert-danger">{{ Session::get('error') }}</div>
	   		</div>
	   		<div class="col-md-4"></div>
    	</div>
	@endif
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				{!! Form::submit('Sign up!', array('class' => 'btn btn-success sign_submit', 'onclick'=>'check()')) !!}
				<a href="{!! URL::to('login') !!}"> {!! Form::button('Go Back', array('class' => 'btn btn-primary sign_submit sign_back')) !!}</a>
				{!! Form::close() !!}
			</div>
			<div class="col-md-4"></div>
		<!--/form-->
	</div>
	<!--div class="row">
		<div class="col-md-6">
			<div ng-repeat="ch in chatusers">
				<h3 class="text-danger">Chatuser # @{{ ch.chatusers_id }}</h3>
				<p>name is @{{ ch.nickname }}</p>
				<p>email is @{{ ch.email}}</p>
			</div>
		</div>
	</div-->

</div>