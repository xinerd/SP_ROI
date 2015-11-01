<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/1/15 9:40 AM
 */
class help extends Controller {

    function __construct() {
        parent::__construct();
        echo "This is controller help.";
    }

    public function other($arg = false) {
        echo 'we are inside other<br />';
        echo 'Optional: ' . $arg . '<br />';

        require 'model/help_model.php';
        $model = new Help_Model();
    }
}