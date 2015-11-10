<div id="page-wrapper" ng-app="myApp" ng-controller="customersCtrl">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Welcome, <?php echo $user->getUserName(); ?>!</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-sun-o fa-fw"></i> Weather Monitor
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                    ng-click="updateWeather()">
                                Update Weather
                                <i class="fa fa-refresh fa-fw"></i>
                            </button>

                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Low Temp</th>
                                <th>High Temp</th>
                                <th>Avg Temp</th>
                                <th>Sun Light</th>
                                <th>WeatherType</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="x in names">
                                <td>{{ x.Date }}</td>
                                <td>{{ x.LowTemp }}</td>
                                <td>{{ x.HighTemp }}</td>
                                <td>{{ x.AvgTemp }}</td>
                                <td>{{ x.SunLight }}</td>
                                <td>{{ x.WeatherType }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-database fa-fw"></i> Solar Panel Data
                    <div class="pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                ng-click="updatePHistory()">
                            Update Panel History
                            <i class="fa fa-refresh fa-fw"></i>
                        </button>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Generated power</th>
                                <th>Consumed power</th>
                                <th>Price</th>
                                <th>Income</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="x in phistory">
                                <td>{{ x.Date }}</td>
                                <td>{{x.Generated_power}}</td>
                                <td>{{x.Consumed_power}}</td>
                                <td>{{ x.Price }}</td>
                                <td>{{ x.Income }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->

        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-cog fa-fw"></i> System Info
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <?php
                            $gifo = new get_guest_info();
                            ?>
                            <tbody>
                            <tr>
                                <td>Browser：</td>
                                <td><?php echo $gifo->GetBrowser(); ?></td>
                            </tr>
                            <tr>
                                <td>Language：</td>
                                <td><?php echo $gifo->GetLang(); ?></td>
                            </tr>
                            <tr>
                                <td>OS：</td>
                                <td><?php echo $gifo->GetOs(); ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-location-arrow fa-fw"></i> Location
                    <div class="pull-right">
                        <div class="btn-group">

                            <button type="button" class="btn btn-default btn-xs"
                                    onclick="getLocation()">Load Map
                            </button>
                        </div>
                    </div>

                </div>
                <div class="panel-body">
                    <p id="demo_map">Click the button to get your position.</p>

                    <div id="mapholder"></div>
                    <!--                        <a href="#" class="btn btn-default btn-block">View Details</a>-->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->


        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<!--<script type="text/javascript" src="--><?php //echo URL; ?><!--view/dashboard/js/monitorApp.js"></script>-->
<!--<script type="text/javascript" src="--><?php //echo URL; ?><!--view/dashboard/js/monitorCtrl.js"></script>-->
<script>
    var app = angular.module('myApp', []);
    app.controller('customersCtrl', function ($scope, $http) {
        $http.get("<?php echo URL_SERVICE; ?>weather")
            .success(function (response) {
                $scope.names = response.records;
            });

        $scope.updateWeather = function () {
            $http.get("<?php echo URL_SERVICE; ?>weather")
                .success(function (response) {
                    $scope.names = response.records;
                });
        };

        $scope.updatePHistory = function () {
            $http.get("<?php echo URL_SERVICE; ?>phistory")
                .success(function (response) {
                    $scope.phistory = response.records;
                });
        };


    });
</script>