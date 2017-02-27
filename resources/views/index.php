<?php include 'layout.php';?>
<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>
			    <div class="carousel-inner" role="listbox">
			      <div class="item active main_item">
			        <img src="../public/images/chatbots_yourstory2.jpg" alt="Image">
			        <div class="carousel-caption">
			          <h3 class="main_head">Chat here</h3>
			        </div>
			      </div>
				  <div class="item main_item">
	               <img src="../public/images/chat.jpg" alt="Image">
	               <div class="carousel-caption">
	                 <h3 class="main_head">Let's talk</h3>
	                </div>
	              </div>
	              <div class="item main_item">
	               <img src="../public/images/93.jpg" alt="Image">
	               <div class="carousel-caption">
	                 <h3 class="main_head">Say something</h3>
	               </div>
	             </div>
	    		</div>
			    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" >
			      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>

<div class="container main_body">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<img src="../public/images/send_user.png" class="main_img" />
		</div>
		<div class="col-md-4">
			<a href="login"><button class="btn btn-success main_button">Login / Sign in</button></a>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<img src="../public/images/users2.png" class="main_img" />
		</div>
		<div class="col-md-4">
			<a href="allusers"><button class="btn btn-danger main_button">Users</button></a>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<img src="../public/images/door-clip-art-ClipArtOpenDoor.jpg" class="main_img" />
		</div>
		<div class="col-md-4">
			<a href="allrooms"><button class="btn btn-warning main_button">Rooms</button></a>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<img src="../public/images/colored-message-bubbles-clip-art.png" class="main_img" />
		</div>
		<div class="col-md-4">
			<a href="allmessages"><button class="btn btn-info main_button">Messages</button></a>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
<footer class="container-fluid text-center">
	<a href="../public" class="main_footer">Home</a>
	<a href="about" class="main_footer">About us</a>
	<a href="FAQ" class="main_footer">FAQ</a>
</footer>