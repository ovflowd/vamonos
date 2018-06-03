angular.module("page.event").controller('EventController', ["$scope", "$localStorage", "$http", "$window", function ($scope, $localStorage, $http, $window) {
    $scope.prepareEvent = '';

    $scope.createEvent = function () {
        alert ('Estamos processando o seu evento, chamado ' + $scope.prepareEvent + '. Aguarde a Thamires :)');

        $window.location.href = '/event/invite';
    }
}]);