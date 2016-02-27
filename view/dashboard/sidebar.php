<!-- Navigation -->
<!--        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">-->


<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php echo URL; ?>dashboard"><i class="fa fa-dashboard fa-fw"></i>
                    Dashboard</a>
            </li>

            <li>
                <a href="<?php echo URL; ?>dashboard/monitor"><i class="fa fa-tasks fa-fw"></i>
                    Monitor</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo URL; ?>dashboard/invest">Invest</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>dashboard/income">Income</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> Settings<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo URL; ?>dashboard/profile">Profile</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>dashboard/setUI">UI Settings</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Smart Applicance
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo URL; ?>dashboard/blank">connector</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->

<!--        </nav>-->