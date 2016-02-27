<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/1/15 11:08 AM
 */
class Prompt extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index($defaultPrompt = PAGE_NOT_FOUND) {
        //        echo "Something went wrong, please try it again.<br/>";
        $this->view->msg = $defaultPrompt;
        $this->view->render('prompt/index');
    }

}
