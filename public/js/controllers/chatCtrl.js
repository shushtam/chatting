angular.module('chatCtrl', [])
.controller('chatController', function($scope, $http, room) {
    $scope.chatData = {};
    $scope.unique=1;
    $scope.insert=0;
    room.get()
        .success(function(data) {
            $scope.rooms = data;
        });
    $scope.submitroom = function() {
         for(var key in $scope.rooms)
         {
            if($scope.roomData.room_name==$scope.rooms[key].room_name)
            {
                $scope.unique=false;
                $scope.insert=2;
                break;
            }
            else
            {
                $scope.unique=true;
                $scope.insert=1;
            }

        }
            if($scope.insert==1)
            {
                 room.save($scope.roomData)
            .success(function(data) {
                room.get()
                    .success(function(getData) {
                        $scope.rooms= getData;
                    });

            })
            .error(function(data) {
                console.log(data);
            });
            }  
    };
    $scope.deleteroom = function(id) {
        room.destroy(id)
            .success(function(data) {
                room.get()
                    .success(function(getData) {
                        $scope.rooms = getData;
                    });
            });
    };

});