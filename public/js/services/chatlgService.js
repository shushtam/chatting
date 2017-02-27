angular.module('chatlgService', [])
.factory('chatuser', function($http) {
    return {
         get : function() {
            return $http.get('users');
        },
        lg:function(loginData) {
            return $http({
                method: 'POST',
                url: 'users/login',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(loginData)        
            });
        },
    }
});