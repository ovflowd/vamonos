angular.module("App").controller('AppController', ["$scope", "$rootScope", "$localStorage", "$http", function ($scope, $rootScope, $localStorage, $http) {
    $scope.storage = $localStorage;

    $scope.storage.$default({
        eventName: '',
        eventFriends: [],
        searchData: [],
        sessionToken: null,
        userData: null
    });

    $scope.getUserData = function (userToken) {
        $http.get('/api/user/' + userToken).then(function (response) {
            console.log(response.data);

            $scope.storage.userData = response.data.data;
        });
    }
}]);