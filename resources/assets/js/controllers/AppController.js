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

    // Get User Data
    $scope.getUserData = function (userToken) {
        $http.get('/api/users/' + userToken).then(function (response) {
            $scope.storage.userData = response.data;
        });
    };

    // Get Facebook Login URI
    $scope.loginFacebook = function () {
        return '/users/facebook';
    };

    // Load Friends
    $scope.loadFriends = function () {
        $http.get('/api/friends').then(function (response) {
            $scope.storage.userFriends = response.data;
        });
    };

    // Go Back
    $scope.goBack = function () {
        $window.history.back();
    };

    if (sessionAuth !== null && sessionAuth !== undefined) {
        $scope.storage = {
            eventName: '',
            userFriends: [],
            searchData: [],
            userData: null
        };

        $scope.storage.sessionToken = sessionAuth;
    }

    if ($scope.storage.sessionToken !== null) {
        $scope.getUserData($scope.storage.sessionToken);

        $scope.loadFriends();
    }
}]);