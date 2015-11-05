<!DOCTYPE html>
<?php
/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/1/15 1:07 PM
 */
?>

<head>

    <title>91513 XIN MING</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <!--    <script type="text/javascript" src="-->
    <?php //echo URL; ?><!--public/js/jquery.js"></script>-->
    <!--    <script type="text/javascript" src="-->
    <?php //echo URL; ?><!--public/js/custom.js"></script>-->

    <link rel="stylesheet" href="<?php echo URL; ?>view/roi/css/circular-slider.css"/>
    <script src="<?php echo URL; ?>view/roi/js/circular-slider.js"></script>
    <script src="<?php echo URL; ?>view/roi/js/roi.js"></script>
</head>
<body>

<?php Session::init(); ?>



<!-- nav -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo URL; ?>index">Investor</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo URL; ?>index">Home</a></li>

                <li><a href="<?php echo URL; ?>roi">Free Report</a></li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">other sub 1</a></li>
                        <li><a href="#">other sub 2</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo URL; ?>help">Help</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <?php if (Session::get('loggedIn') == true): ?>
                    <li>
                        <a href="<?php echo URL; ?>dashboard">
                            <span class="glyphicon glyphicon-user"></span> <?php
                            echo Session::get('user')->getUserName(); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>dashboard/logout">
                            <span class="glyphicon glyphicon-off"></span> Logout
                        </a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="<?php echo URL; ?>login">
                            <span class="glyphicon glyphicon-log-in"></span> Login
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>signup">
                            <span class="glyphicon glyphicon-gift"></span>
                            Sign Up
                        </a>
                    </li>
                <?php endif; ?>


            </ul>
        </div>

    </div>

</nav>
<!-- end of nav -->


<hr/>

<!--<div id="content">-->

