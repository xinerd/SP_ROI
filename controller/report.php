<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/3/15 5:43 PM
 */
class report extends Controller {

    function __construct() {
        parent::__construct();
    }

    function general() {
        $info = '';
        $info->email = trim($_POST['email']);
        $info->userName = trim($_POST['firstName']) . trim($_POST['lastName']);

        $this->view->msg = $this->model->sendGeneralReport($info);
        if ($this->view->msg == SIGN_UP_ACTIVATE_SUCCESS) {
            //            $this->view->render('dashboard/index');
            $this->view->render('prompt/index');
        } else {
            $this->view->render('prompt/index');
        }
    }

}