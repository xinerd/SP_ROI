<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/1/15 10:58 AM
 */
class Bootstrap {


    function __construct() {
        $url = rtrim($_GET['url'], '/');
        $url = explode('/', $url);

        $file = 'controller/' . $url[0] . '.php';
        // Get controller
        if (file_exists($file)) {
            require $file;
        } else {
            require 'controller/error.php';
            $controller = new Error();
            return false;
            //            echo 'The file: ' . $file . ' does not exists.';
            //            die;
        }

        $controller = new $url[0];

        // execute a method with param if url[2] exist
        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else {
            // execute the method if url[1] exist
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }
    }
}