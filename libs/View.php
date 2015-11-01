<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/1/15 1:04 PM
 */
class View {


    function __construct() {
        echo "this is the view.<br/>";
    }

    public function render($name) {
        require 'view/' . $name . '.php';
    }
}