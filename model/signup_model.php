<?php

class Signup_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function run() { // echo "sign up model";
        $user = $this->propareVO();
        // if Email not exists, continue to create
        if (!UserDAOImpl::findByEmail($user->getEmail())) {

            $result = UserDAOImpl::doCreate($user);// create user in db
            if ($result) {
                // send mail
                $iEmailService = new EmailService();
                $iEmailService->setReceiver($user);
                $msg = $iEmailService->sendEmail();
                // header('location: ../login');
            } else {
                $msg = SQL_EXCEPTION_DUPLICATE_ENTRY;// show error prompt
            }
        } else {
            $msg = SIGN_UP_DUPLICATE_REGISTER;
        }

        $controller = new Prompt();
        $controller->index($msg);
    }

    public function propareVO() {
        // Get data from post
        $username = stripslashes(trim($_POST['userid'])); // user id
        $pwd = md5(trim($_POST['pwd']));
        $email = trim($_POST['email']);
        $regtime = R::isoDateTime();
        $token = md5($username . $pwd . $regtime); //create activation token
        $token_exptime = time() + 60 * 60 * 24;//expire time 24 hours
        // create a vo for convey object info
        $user = new User();
        $user->setUserName($username);
        $user->setPassword($pwd);
        $user->setEmail($email);
        $user->setToken($token);
        $user->setTokenExptime($token_exptime);
        $user->setRegTime($regtime);
        return $user;
    }


    public function activateAccount($token) {
        $isActivated = UserDAOImpl::activateAccount(stripslashes(trim($token)), time());
        if ($isActivated) {
            $msg = SIGN_UP_ACTIVATE_SUCCESS;
        } else {
            $msg = SIGN_UP_ACTIVATE_CODE_EXPIRED;
        }
        return $msg;
    }
}