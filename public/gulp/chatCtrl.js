angular.module("chatCtrl",[]).controller("chatController",function(o,n,e){o.chatData={},o.unique=1,o.insert=0,e.get().success(function(n){o.rooms=n}),o.submitroom=function(){for(var n in o.rooms){if(o.roomData.room_name==o.rooms[n].room_name){o.unique=!1,o.insert=2;break}o.unique=!0,o.insert=1}1==o.insert&&e.save(o.roomData).success(function(n){e.get().success(function(n){o.rooms=n})}).error(function(o){console.log(o)})},o.deleteroom=function(n){e.destroy(n).success(function(n){e.get().success(function(n){o.rooms=n})})}});