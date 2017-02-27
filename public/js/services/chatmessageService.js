angular.module('chatmessageService', [])
.factory('message', function($http) {
    return {
        get : function() {
            return $http.get('messages');
        },
        save : function(messageData) {
            return $http({
                method: 'POST',
                url: 'messages/store',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(messageData)
            });
        },
        destroy : function(id) {
            return $http.delete('messages/destroy/' + id);
        }
    }

});