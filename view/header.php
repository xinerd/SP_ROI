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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="--><?php //echo URL; ?><!--public/css/bootstrap.min.css">-->


    <?php
    if (isset($this->css)) {
        foreach ($this->css as $css) {
            echo '<link rel="stylesheet" href="' . URL . 'view/' . $css . '"></script>';
        }
    }
    ?>

    <!--    <script type="text/javascript" src="-->
    <?php //echo URL; ?><!--public/js/custom.js"></script>-->

    <!--    recommended that you load the AngularJS library either in the <head> or at the start of the <body>-->
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<!--    <script type="text/javascript" src="--><?php //echo URL; ?><!--public/js/angular.min.js"></script>-->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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


<!--<hr/>-->

<!--<div id="content">-->

