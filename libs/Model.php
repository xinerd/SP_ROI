<?php

class Model {

    function __construct() {
        //        echo "This is base model.<br/>";
        $this->db = new Database();
    }

}