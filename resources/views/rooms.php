<?php include 'layout.php';?>
<div class="container" ng-app="chatApp" ng-controller="chatController">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<form action="message">
				<h2 class="rooms_title">Choose room</h2>
				<p class="rooms_p">Select in which room you want to chat</p>
				<select class="form-control" name="selroom">
				<!--<?/*php foreach($rooms as $r){ */?> <option value="<?php/* echo $r->rooms_id; */?>"> <?/*php echo $r->name; }*/?></option>-->
				<option class="rooms_option" ng-repeat="chr in rooms  track by $index" value="{{ chr.room_name }}">{{ chr.room_name }}</option>
				</select>
		</div>
		<div class="col-md-6"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
				<input type="hidden" name="nickname" value="<?php echo $_GET["nickname"];?>">
				<input type="submit" name="submit" class="btn btn-info rooms_chatbtn" value="Chat in this room">
			</form>
		</div>
		<div class="col-md-6"></div>		
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<div class="well rooms_well"></dir><h2 class="rooms_title2">You can create room</h2></div>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<form  ng-init="roomData.nickname='<?php echo $s=$_GET["nickname"];?>'" ng-submit="submitroom()"><!--action="rooms/getmessages"-->
				<label for="roomname" class="rooms_label ">Enter room name, it must be different from others</label>
				<input type="text"  name="rooms" id="rooms" class="form-control" ng-model="roomData.room_name" placeholder="Room name">
				<input type="hidden" name="nickname"  ng-model="roomData.nickname" value="<?php echo $_GET["nickname"];?>">
		</div>
		<div class="col-md-6"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
				<input type="submit" name="submit" class="btn btn-info rooms_chatbtn" value="Create room" onclick="check()">
			</form>
		</div>
		<div class="col-md-6"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<h3 class="rooms_author">by <?php echo $_GET["nickname"];?></h3>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<div ng-if="insert==2">
				<h4 class="rooms_unique">Room with this name already exists, choose another name</h4>
			</div>
			<div ng-if="insert==1">
				<h4 class="rooms_created">Now your new created room is in list, you can chat there!</h4>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>




