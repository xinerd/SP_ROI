<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/1/15 9:40 AM
 */
class Help extends Controller {

    function __construct() {
        parent::__construct();
        //        echo "This is controller help.";
    }

    function index() {
        $this->view->render('help/index');
    }

    public function other($arg = false) {
        //require 'model/help_model.php';
        //$model = new Help_Model();
        $this->view->msg = $this->model->helpInfo($arg);
        $this->view->render('help/index');
    }
}