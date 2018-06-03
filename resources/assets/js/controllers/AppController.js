angular.module("App").controller('AppController', ["$scope", "$rootScope", "$localStorage", "$http", "$window", "sessionAuth", function ($scope, $rootScope, $localStorage, $http, $window, sessionAuth) {
    $scope.storage = $localStorage;

    $scope.storage.$default({
        eventName: '',
        userFriends: [],
        searchData: [],
        sessionToken: null,
        userData: null
    });

    $scope.appController = this;

    $scope.getUserData = function (userToken) {
        $http.get('/api/users/' + userToken).then(function (response) {
            $scope.storage.userData = response.data;
        });
    };

    $scope.loginFacebook = function () {
        return '/users/facebook';
    };

    $scope.loadFriends = function () {
        $http.get('/api/users/friends').then(function (response) {
            $scope.storage.userFriends = response.data;
        });
    };

    if (sessionAuth !== null && sessionAuth !== undefined) {
        $scope.storage.sessionToken = sessionAuth;
    }

    if ($scope.storage.sessionToken !== null) {
        $scope.getUserData($scope.storage.sessionToken);

        $scope.loadFriends();
    }
}]);