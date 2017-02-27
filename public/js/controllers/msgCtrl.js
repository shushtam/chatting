angular.module('msgCtrl', [])
.controller('messageController', function($scope, $http, message) {
    $scope.messageData = {};
    message.get()
        .success(function(data) {
            $scope.messages = data;
        });

    $scope.submitMessage = function() {
        message.save($scope.messageData)
            .success(function(data) {
               message.get()
                    .success(function(getData) {
                        $scope.messages= getData;
                    });
            })
            .error(function(data) {
                console.log(data);
            });
    };
    $scope.deleteMessage = function(id) {
        message.destroy(id)
            .success(function(data) {
                message.get()
                    .success(function(getData) {
                        $scope.messages = getData;
                    });
            });
    };
});