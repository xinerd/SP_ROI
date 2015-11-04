<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/3/15 5:43 PM
 */
class signup extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('signup/index');
    }

    function run() {
        //        echo "inside login/run";
        $this->model->run();
    }

}