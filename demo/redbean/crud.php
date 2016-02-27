<?php
/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/2/15 4:34 PM
 */

require 'rb.php';
require 'vo/User.class.php';
require 'UserDAOImpl.class.php';

class DAOTest {

    // batch load
    function __construct() {
        R::setup('mysql:host=localhost;dbname=Test', 'root', 'mysqladmin');
        //R::freeze( TRUE );
        //  R::startLogging(); //start logging
        //turns debugging ON
        R::debug(FALSE);
    }

    public static function testFindById($id) {
        $user = UserDAOImpl::findById($id);
        //print_r($user);
        echo $user->uid . "\t" . $user->password . "\t" . $user->age;
    }

    public static function testBatchFind() {
        $ids = [1, 8, 11];
        $users = UserDAOImpl::batchFindByIds($ids);
        foreach ($users as $user) {
            echo $user->uid . " \t " . $user->password . " \t " . $user->age . "\n";
        }
    }

    public static function testCreate() {
        //        $user = R::dispense('user');
        $user = new User();
        $user->setUid('newjoe');
        $user->setPassword('test');
        $user->setAge(20);
        UserDAOImpl::doCreate($user);
    }

    public static function testUpdate() {
        $user = new User();
        $user->setId(11); // set primary key for update
        $user->setUid('xinerd');
        $user->setPassword('test');
        $user->setAge(26);
        $user = UserDAOImpl::doUpdate($user);
    }

    public static function testDelete($id) {
        UserDAOImpl::doDeleteById($id);
        //        R::trashAll($users); //for multiple beans
    }

    public static function testFind($pageNum, $pageSize) {
        return UserDAOImpl::find($pageNum, $pageSize);
    }

    public static function testGetAllCols() {
        return $fields = R::inspect('user');
    }

    public static function testGetAllCount() {
        return UserDAOImpl::getAllCount();
    }

    public static function testFindByKeyword() {
        return UserDAOImpl::findByKeyword('uid', 'x');
    }

    public static function testFindOne($uid, $password) {
        $user = UserDAOImpl::doLogin($uid, $password);
        if (null == $user) {
            echo "no matched record";
        } else {
            echo $user->uid . " \t " . $user->password . " \t " . $user->age . "\n";
        }
    }


}


$daoTest = new DAOTest();
$daoTest->testFindOne('xinerd', 'test');
//foreach ($users as $user) {

//}
//$logs = R::getLogs(); //obtain logs
//print_r($logs);