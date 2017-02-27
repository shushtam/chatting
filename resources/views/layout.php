<meta name="csrf-token" content="{{ csrf_token() }}" />
<script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<link rel="stylesheet" href="style.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="node_modules/angular/angular.js"></script>
<script src="node_modules/angular-route/angular-route.js"></script>
<script src="js/controllers/chatCtrl.js"></script>
<script src="js/services/chatroomService.js"></script>
<script src="js/controllers/msgCtrl.js"></script>
<script src="js/services/chatmessageService.js"></script>
<script src="js/controllers/userCtrl.js"></script>
<script src="js/services/chatuserService.js"></script>
<script src="js/controllers/lgCtrl.js"></script>
<script src="js/services/chatlgService.js"></script>
<script src="js/app.js"></script>


<div class="container">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Chatting!</a>
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        	  	<span class="icon-bar"></span>
       			<span class="icon-bar"></span>
       			<span class="icon-bar"></span>
      		  </button>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav">
			      <li><a href="../public">Home</a></li>
			      <li><a href="login">Login</a></li>
			      <li><a href="allusers">Users</a></li> 
			      <li><a href="allrooms">Rooms</a></li>
			      <li><a href="allmessages">Messages</a></li>  
			    </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>