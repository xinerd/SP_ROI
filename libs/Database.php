<?php

class Database {
    //class Database extends PDO {

    public function __construct() {
        //        parent::__construct(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        //        R::setup('mysql:host=localhost;dbname=orm', 'root', 'mysqladmin');
        R::setup(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        R::freeze(TRUE);
        //R::startLogging(); //start logging
        R::debug(FALSE);//turns debugging ON
    }


}