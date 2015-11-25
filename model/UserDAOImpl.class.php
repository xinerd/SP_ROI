<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/2/15 4:33 PM
 */
class UserDAOImpl {

    function __construct() {
    }

    /**
     * Create User
     * @param User $vo
     * @return bool
     * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
     * Author: XIN MING
     */
    public static function doCreate(User $vo) {
        $db = new Database();
        $conn = $db->getConn();

        $userName = $vo->getUserName();
        $password = $vo->getPassword();
        $email = $vo->getEmail();
        $token = $vo->getToken();
        $token_exptime = $vo->getTokenExptime();
        $regtime = $vo->getRegTime();

        $sql = "INSERT INTO user (username,password,email,token,token_exptime,regtime)
                VALUES ('$userName', '$password', '$email', '$token', '$token_exptime','$regtime' ); ";
        if ($conn->multi_query($sql) === TRUE) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }

    public static function doUpdate(User $vo) {

    }

    public static function doDeleteById($id) {

    }

    /**
     * Use findAll if you don't want to add any conditions (but you want to order or limit... )
     * @param $pageNum : which page , from 1
     * @param $pageSize : how many records per page
     * @return array
     */
    public static function find($pageNum, $pageSize) {

    }

    public static function findById($id) {

    }

    public static function findByKeyword($col, $keyword) {

    }

    public static function batchFindByIds($ids) {

    }

    public static function getAllCount() {

    }

    public static function exeSQL($sql) {

    }

    /**
     * Login
     * @param $email
     * @param $password
     * @return null|user
     * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
     * Author: XIN MING
     */
    public function doLogin($email, $password) {
        $db = new Database();
        $conn = $db->getConn();

        $sql = "select u.id,u.username,u.email,u.token,u.token_exptime,u.status,u.regtime
                from user u where u.email='$email' and u.password='$password'";
        $result = $conn->query($sql);
        $po = null;
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Set po
            $po = new user();
            $po->setId($row['id']);
            $po->setUserName($row['username']);
            $po->setEmail($row['email']);
            $po->setToken($row['token']);
            $po->setTokenExptime($row['token_exptime']);
            $po->setStatus($row['status']);
            $po->setRegTime($row['regtime']);
        }
        $db->getConn()->close();
        return $po;
    }

    /**
     * Find by email address, this should be check before sign up
     * @param $email
     * @return bool
     * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
     * Author: XIN MING
     */
    public static function findByEmail($email) {
        $db = new Database();
        $conn = $db->getConn();

        $sql = "select u.id,u.username,u.email,u.token,u.token_exptime,u.status,u.regtime
                from user u where u.email='$email' ";
        $result = $conn->query($sql);
        $po = null;
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Set po
            $po = new user();
            $po->setId($row['id']);
            $po->setUserName($row['username']);
            $po->setEmail($row['email']);
            $po->setToken($row['token']);
            $po->setTokenExptime($row['token_exptime']);
            $po->setStatus($row['status']);
            $po->setRegTime($row['regtime']);
        }
        $db->getConn()->close();

        return $po != null ? true : false;
    }

    public static function activateAccount($token, $nowtime) {
        $db = new Database();
        $conn = $db->getConn();
        $sql = "UPDATE user SET status=1
                       WHERE token = '$token' AND token_exptime > '$nowtime' ";
        return $conn->query($sql) === TRUE ? true : false;
    }

}