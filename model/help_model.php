<?php

class Help_Model extends Model {

    function __construct() {
        parent::__construct();
        //        echo 'Help model<br/>';
    }

    function helpInfo($arg) {
        return "<br/>help info:" . $arg;
    }

}