app.controller('customersCtrl', function ($scope, $http) {
    $http.get("<?php echo URL_SERVICE; ?>weather")
        .success(function (response) {
            $scope.names = response.records;
        });
});