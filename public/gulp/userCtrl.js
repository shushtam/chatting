angular.module("userCtrl",[]).controller("userController",function(s,e,t){s.ChatuserData={},t.get().success(function(e){s.chatusers=e}),s.submitUser=function(){t.save(s.ChatuserData).success(function(e){t.get().success(function(e){s.chatusers=e})}).error(function(s){console.log(s)})}});