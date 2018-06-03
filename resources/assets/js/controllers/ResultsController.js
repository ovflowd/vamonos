angular.module("page.results").controller('ResultsController', ["$scope", "$localStorage", "$http", "$window", function ($scope, $localStorage, $http, $window) {
    $scope.storage = $localStorage;

    $scope.resultsController = this;

    $scope.loadData = function () {
        $http.get('/api/places/' + $scope.storage.eventName).then(function (response) {
            $scope.storage.searchData = response.data;

            // This is only for development, in production will be removed.
            setTimeout(function () {
                $window.location.href = '/event/results';
            }, 2000);
        });
    };

    $scope.loadData();
}]);