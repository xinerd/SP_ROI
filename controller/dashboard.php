<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        /**
         * <!-- jQuery -->
         * <!-- Bootstrap Core JavaScript -->
         * <!-- Metis Menu Plugin JavaScript -->
         *
         * <!-- Morris Charts JavaScript 3 -->
         * <!-- Custom Theme JavaScript -->
         */
        $this->view->js = array(
            //            'admin/bower_components/jquery/dist/jquery.min.js',
            //            'admin/bower_components/bootstrap/dist/js/bootstrap.min.js',
            'dashboard/bower_components/metisMenu/dist/metisMenu.min.js',
            'dashboard/bower_components/raphael/raphael-min.js',
            'dashboard/bower_components/morrisjs/morris.min.js',
            'dashboard/js/morris-data.js',
            'dashboard/dist/js/sb-admin-2.js',
            'dashboard/js/map.js'
        );


        /**
         * <!-- BootstrapCore CSS -->
         * <!-- MetisMenu CSS -->
         * <!--Timeline CSS-->
         * <!--Custom CSS-->
         * <!--Morris Charts CSS-->
         * <!--Custom Fonts-->
         */
        $this->view->css = array(
            'dashboard/bower_components/metisMenu/dist/metisMenu.min.css',
            'dashboard/dist/css/timeline.css',
            'dashboard/dist/css/sb-admin-2.css',
            'dashboard/bower_components/morrisjs/morris.css',
            'dashboard/bower_components/font-awesome/css/font-awesome.min.css'
        );

        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('location: login');
            exit;
        }

    }

    function index() {
        $this->view->render('dashboard/index');
    }

    function logout() {
        Session::destroy();
        header('location: ../login');
        exit;
    }

}