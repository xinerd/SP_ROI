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

    function active($token = false) {
        $this->view->msg = $this->model->activateAccount($token);
        if ($this->view->msg == SIGN_UP_ACTIVATE_SUCCESS) {
            //            $this->view->render('dashboard/index');
            $this->view->render('prompt/index');
        } else {
            $this->view->render('prompt/index');
        }
    }

}