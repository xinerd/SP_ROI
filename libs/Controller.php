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

    //    public function __call($name, $arguments) {
    //        // Note: value of $name is case sensitive.
    //        echo "Calling object method '$name' "
    //            . implode(', ', $arguments) . "\n";
    //    }
    //
    //    /**  As of PHP 5.3.0  */
    //    public static function __callStatic($name, $arguments) {
    //        // Note: value of $name is case sensitive.
    //        echo "Calling static method '$name' "
    //            . implode(', ', $arguments) . "\n";
    //    }


}