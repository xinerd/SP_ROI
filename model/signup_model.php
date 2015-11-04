<?php

class Signup_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function run() {
        //        echo "sign up model";
        $user = $this->propareVO();

        // create user in db
        $result = UserDAOImpl::doCreate($user);
        if ($result) {
            // send mail

            //            header('location: ../login');
            $msg = SIGN_UP_SUCCESS;

        } else {
            $msg = SQL_EXCEPTION_DUPLICATE_ENTRY;// show error prompt
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

}