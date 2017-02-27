angular.module('chatroomService', [])
.factory('room', function($http) {
   return {  
        get : function() {
            return $http.get('rooms');
        },
        save : function(roomData) {
            return $http({
                method: 'POST',
                url: 'rooms/store',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(roomData)
            });
        },
        /*destroy : function(id) {
            return $http.delete('rooms/destroy/' + id);
        }*/
    }
});