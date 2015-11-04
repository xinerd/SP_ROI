<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('login/index');
    }

    function run() {
        $this->view->msg = $this->model->run();
        if ($this->view->msg === STATUS_LOGIN_SUCCESS) {
            $this->view->render('dashboard/index');
        } else {
            $this->view->render('prompt/index');
        }
    }


}