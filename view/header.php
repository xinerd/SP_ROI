<!doctype html>
<?php
/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/1/15 1:07 PM
 */
?>
<html>
<head>
    <title>Test</title>

    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
</head>
<body>

<?php Session::init(); ?>

<div id="header">
    Header
    <br/>
    <a href="<?php echo URL; ?>index">Index</a>
    <a href="<?php echo URL; ?>help">Help</a>
    <?php if (Session::get('loggedIn') == true): ?>
        <a href="<?php echo URL; ?>dashboard/logout">Logout</a>
    <?php else: ?>
        <a href="<?php echo URL; ?>login">Login</a>
    <?php endif; ?>
</div>

<hr/>

<div id="content">

