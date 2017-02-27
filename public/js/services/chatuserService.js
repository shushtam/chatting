angular.module('chatuserService', [])
.factory('chatuser', function($http) {
    return {
        get : function() {
            return $http.get('users');
        },
        save : function(ChatuserData) {
            return $http({
                method: 'POST',
                url: 'users/store',
                headers: { 'Content-Type' :'application/x-www-form-urlencoded' }, //'multipart/form-data'},//,
                data: $.param(ChatuserData)
            });
        },
     
       /* destroy : function(id) {
            return $http.delete('/chatrooms/destroy/' + id);
        }*/
    }

});