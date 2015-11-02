<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/1/15 9:18 AM
 */
class index extends Controller {


    function __construct() {
        parent::__construct();
    }

    function index() {
        //        echo 'INSIDE INDEX/INDEX';
        $this->view->render('index/index');
    }

    function details() {
        $this->view->render('index/index');
    }

}
