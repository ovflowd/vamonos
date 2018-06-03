angular.module("App").controller('AppController', ["$scope", "$rootScope", "$localStorage", "$http", "$window", "sessionAuth", function ($scope, $rootScope, $localStorage, $http, $window, sessionAuth) {
    $scope.storage = $localStorage;

    $scope.storage.$default({
        eventName: '',
        eventFriends: [],
        searchData: [],
        sessionToken: null,
        userData: null
    });

    $scope.controller = this;

    $scope.getUserData = function (userToken) {
        $http.get('/api/users/' + userToken).then(function (response) {
            $scope.storage.userData = response.data;
        });
    };

    $scope.loginFacebook = function () {
        return '/users/facebook';
    };

    if (sessionAuth !== null && sessionAuth !== undefined) {
        $scope.storage.sessionToken = sessionAuth;
    }

    if ($scope.storage.sessionToken !== null) {
        $scope.getUserData($scope.storage.sessionToken);
    }
}]);