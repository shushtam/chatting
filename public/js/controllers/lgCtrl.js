angular.module('lgCtrl', [])
.controller('logController', function($scope, $http, chatuser) {
    $scope.loginData = {};
    chatuser.get()
        .success(function(data) {
            $scope.chatusers = data;
        });
$scope.dt;
    $scope.loginUser = function() {
        chatuser.lg($scope.loginData)
            .success(function(data) { 
                   $scope.dt=data;
                   $scope.check=0;
              for(var key in $scope.dt) {
                if($scope.dt.hasOwnProperty(key)){
                    $scope.check= 1; 
                    $scope.nickname=$scope.dt.nickname;
                    return;
                  }
              }
            $scope.check=2;
          })
            .error(function(data) {
                console.log(data);
            });    
    };
});