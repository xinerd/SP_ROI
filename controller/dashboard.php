<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
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
        /**
         * <!-- jQuery -->
         * <!-- Bootstrap Core JavaScript -->
         * <!-- Metis Menu Plugin JavaScript -->
         *
         * <!-- Morris Charts JavaScript 3 -->
         * <!-- Custom Theme JavaScript -->
         */
        $this->view->js = array(
            'dashboard/bower_components/metisMenu/dist/metisMenu.min.js',
            'dashboard/bower_components/raphael/raphael-min.js',
            'dashboard/bower_components/morrisjs/morris.min.js',
            'dashboard/js/morris-data.js',
            'dashboard/dist/js/sb-admin-2.js',
            'dashboard/js/map.js'
        );
        $this->view->main = 'main';
        $this->view->render('dashboard/index');
    }

    function comments() {
        $this->view->js = array(
            'dashboard/bower_components/metisMenu/dist/metisMenu.min.js',
            'dashboard/dist/js/sb-admin-2.js'
        );
        $this->view->main = 'comments';
        $this->view->render('dashboard/index');
    }

    function deals() {
        $this->view->js = array(
            'dashboard/bower_components/metisMenu/dist/metisMenu.min.js',
            //'dashboard/bower_components/datatables/jquery.dataTables.min.js',
            'dashboard/dist/js/sb-admin-2.js'
        );

        //        $this->view->css = array(
        //            'dashboard/bower_components/datatables/dataTables.bootstrap.css',
        //            'dashboard/bower_components/datatables/dataTables.responsive.css'
        //        );

        $this->view->main = 'deals';
        $this->view->render('dashboard/index');
    }

    function orders() {
        $this->view->js = array(
            'dashboard/bower_components/metisMenu/dist/metisMenu.min.js',
            'dashboard/dist/js/sb-admin-2.js'
        );
        $this->view->main = 'orders';
        $this->view->render('dashboard/index');
    }

    function monitor() {
        $this->view->js = array(
            'dashboard/bower_components/metisMenu/dist/metisMenu.min.js',
            'dashboard/dist/js/sb-admin-2.js',
            'dashboard/js/map.js'
        );
        $this->view->main = 'monitor';
        $this->view->render('dashboard/index');
    }


    function logout() {
        Session::destroy();
        header('location: ../login');
        exit;
    }


}