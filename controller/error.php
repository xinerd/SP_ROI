<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/1/15 11:08 AM
 */
class Error extends Controller {

    function __construct() {
        parent::__construct();
        echo "Something went wrong, please try it again.<br/>";
        $this->view->msg = "this view does not exists.";
        $this->view->render('error/index');

    }
}
