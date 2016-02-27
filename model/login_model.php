<?php

class Login_Model extends Model {
    private $userDAOImpl;

    public function __construct() {
        parent::__construct();
        $this->userDAOImpl = new UserDAOImpl();
    }

    public function run() {
        $uid = $_POST['login'];
        $password = MD5($_POST['password']);

        $po = $this->userDAOImpl->doLogin($uid, $password); // get from DB
        /**
         * 1. no record found
         * 2. user email and password matched and status is activated
         * 3. user email and password matched and status is non-activated
         * 4. exception
         */
        if (null == $po) {
            $msg = NO_RECORD_PROMPT . BACK_TO_LOGIN_LINK;
        } elseif ($po->getStatus() == STATUS_ACTIVATED) {
            Session::init();
            Session::set('loggedIn', true);
            Session::set('user', $po);
            $msg = STATUS_LOGIN_SUCCESS;
        } elseif ($po->getStatus() == STATUS_NON_ACTIVATED) {
            $msg = STATUS_NON_ACTIVATED_PROMPT . BACK_TO_LOGIN_LINK;
        } else {
            $msg = "Unknown Exception happened when login.";
        }
        return $msg;
    }

}