<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/1/15 10:58 AM
 */
class Bootstrap {


    function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        // print_r($url);

        // check if no url entered
        if (empty($url[0])) {
            require 'controller/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }

        $file = 'controller/' . $url[0] . '.php';
        // Get controller
        if (file_exists($file)) {
            require $file;
        } else {
            $this->error();
            //    echo "???";
        }

        $controller = new $url[0];

        // execute a method with param if url[2] exist
        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            } else {
                $this->error();
            }
        } else {
            // execute the method if url[1] exist
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    $this->error();
                }
            } else {
                $controller->index();
            }
        }
    }

    function error() {
        require 'controller/error.php';
        $controller = new Error();
        $controller->index();
        die;
        //        return false;
    }
}