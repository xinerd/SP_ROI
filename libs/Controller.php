<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/1/15 12:59 PM
 */
class Controller {
    protected $model;


    function __construct() {
        //        echo "Main Controller <br/>";
        $this->view = new View();
    }

    public function loadModel($name) {

        $path = 'model/' . $name . '_model.php';

        if (file_exists($path)) {
            require 'model/' . $name . '_model.php';

            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }


}