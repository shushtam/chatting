<?php include 'layout.php';?>
<div class="container" ng-app="chatmsg" ng-controller="messageController">
	<div class="row" >
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<form ng-init="messageData.room_name='<?php echo $s=$_GET["selroom"];?>';messageData.nickname='<?php echo $_GET["nickname"];?>'" ng-submit="submitMessage()">
			<h2 class="messages_title">You are in room <?php echo $_GET["selroom"];?></h2>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
				<textarea name="body" class="form-control messages_body" ng-model="messageData.body" placeholder="Chat message"></textarea>
				<input type="hidden" name="room_name" ng-model="messageData.room_name" value="<?php echo $_GET["selroom"];?>">
				<input type="hidden"  name="nickname" ng-model="messageData.nickname"   value="<?php echo $_GET["nickname"];?>"  >
		</div>
		<div class="col-md-6"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<p class="messages_author">author is <?php echo $_GET["nickname"];?></p>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
				<input type="submit" name="submit" class="btn btn-success messages_post" value="Post!!">
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">		
					<div ng-repeat="msg in messages">
						<div ng-if="msg.room_name=='<?php echo $_GET["selroom"];?>'">
							<h3 class="messages_id">Message # {{ msg.message_id }}</h3>
							<p>message is <span class="messages_bd"> {{ msg.body }} </span></p>
							<!--p>room is {{ msg.room_name }}</p-->
							<p>author is <span class="messages_nickname"> {{ msg.nickname }} </span></p>
							<p><a href="#" ng-click="deleteMessage(msg.message_id)" class="text-muted">Delete</a></p>
						</div>
					</div>
			</div>
			</form>
			<div class="col-md-4"></div>
	</div>
</div>
              
       
