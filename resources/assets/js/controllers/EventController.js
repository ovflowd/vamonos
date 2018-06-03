angular.module("page.event").controller('EventController', ["$scope", "$localStorage", "$http", "$window", function ($scope, $localStorage, $http, $window) {
    $scope.storage = $localStorage;

    $scope.createEvent = function () {
        $http.post('/events', {
            data: {
                name: $scope.storage.eventName,
                user_id: $scope.storage.userData.id
            }
        });

        $window.location.href = '/event/invite';
    };

    $scope.selectFriend = function (friendId) {
        jQuery('.friends li:nth-of-type(' + friendId + ')').toggleClass('is-active');
    };

    $scope.startSearch = function () {

    };
}]);