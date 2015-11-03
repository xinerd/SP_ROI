<?php

class Login_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function run() {
        //        echo "inside model/run";
        $uid = $_POST['login'];
        $password = MD5($_POST['password']);

        $po = UserDAOImpl::testFindOne($uid, $password); // get from DB
        /**
         * 1. no record found
         * 2. user email and password matched and status is activated
         * 3. user email and password matched and status is non-activated
         * 4. exception
         */
        if (null == $po) {
            echo NO_RECORD_PROMPT;
            echo BACK_TO_LOGIN_LINK;
            //  header('location: ../login');
        } elseif ($po->status == STATUS_ACTIVATED) {
            $user = new User(); // vo : used to convey user info
            $user->setId($po->id);
            $user->setUserName($po->username);
            $user->setPassword($po->password);
            $user->setEmail($po->email);
            $user->setStatus($po->status);
            $user->setToken($po->token);
            $user->setTokenExptime($po->token_exptime);
            $user->setRegTime($po->regtime);
            Session::init();
            Session::set('loggedIn', true);
            Session::set('user', $user);
            header('location: ../dashboard');
        } elseif ($po->status == STATUS_NON_ACTIVATED) {
            echo STATUS_NON_ACTIVATED_PROMPT;
            echo BACK_TO_LOGIN_LINK;
        } else {
            header('location: ../login?status=exception');
        }
    }

}