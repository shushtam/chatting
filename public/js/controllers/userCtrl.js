angular.module('userCtrl', [])
.controller('userController', function($scope, $http, chatuser) {
    $scope.ChatuserData = {};
    chatuser.get()
        .success(function(data) {
            $scope.chatusers = data;
        });
    $scope.submitUser = function() {
        chatuser.save($scope.ChatuserData)
            .success(function(data) {
               chatuser.get()
                    .success(function(getData) {
                        $scope.chatusers= getData;
                    });

            })
            .error(function(data) {
                console.log(data);
            });
    };
    /*$scope.deleteUser = function(id) {
        chatuser.destroy(id)
            .success(function(data) {
                chatuser.get()
                    .success(function(getData) {
                        $scope.chatusers = getData;
                    });
            });
    };*/
});
