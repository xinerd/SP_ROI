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
                    Basic Table
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Type/Model</th>
                                <th>Cost</th>
                                <th>ROI</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>type1</td>
                                <td>8000</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>type2</td>
                                <td>15000</td>
                                <td>13%</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>type3</td>
                                <td>20000</td>
                                <td>16%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>

        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Ads?
                </div>
                <div class="panel-body">
                    <p>some advertising?</p>
                </div>
                <div class="panel-footer">
                    sponsor
                </div>
            </div>

        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->


</div>
<!-- /#page-wrapper -->

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>