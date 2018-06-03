angular.module("page.event").controller('EventController', ["$scope", "$localStorage", "$http", "$window", function ($scope, $localStorage, $http, $window) {
    $scope.storage = $localStorage;

    $scope.storage.$default({
        eventName: '',
        eventFriends: []
    });

    $scope.createEvent = function () {
        alert ('Estamos processando o seu evento, chamado ' + $scope.storage.eventName + '. Aguarde a Thamires :)');

        $window.location.href = '/event/invite';
    }
}]);