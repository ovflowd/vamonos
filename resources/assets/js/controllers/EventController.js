angular.module("page.event").controller('EventController', ["$scope", "$localStorage", "$http", "$window", function ($scope, $localStorage, $http, $window) {
    $scope.storage = $localStorage;

    $scope.storage.$default({
        eventName: '',
        eventFriends: [],
        searchData: []
    });

    $scope.createEvent = function () {
        $window.location.href = '/event/invite';
    };

    $scope.selectFriend = function (friendId) {
        jQuery('.friends li:nth-of-type(' + friendId + ')').toggleClass('is-active');
    };

    $scope.redirectUser = function () {
        $window.location.href = '/event/start';
    };

    $scope.startSearch = function () {

    };
}]);