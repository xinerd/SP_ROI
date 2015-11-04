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

    public static function doCreate($vo) {
        $po = R::dispense('user');

        $po->username = $vo->getUserName();
        $po->password = $vo->getPassword();
        $po->email = $vo->getEmail();
        $po->token = $vo->getToken();
        $po->token_exptime = $vo->getTokenExptime();
        $po->regtime = $vo->getRegTime();

        try {
            $id = R::store($po);
        } catch (Exception $e) {
            //            echo $e;
            // LOG SQL_EXCEPTION_DUPLICATE_ENTRY;
        }
        return isset($id) ? true : false;
    }

    public static function doUpdate($vo) {
        $user = R::dispense('user');
        $user->id = $vo->getId();
        $user->uid = $vo->getUid();
        $user->age = $vo->getAge();
        $user->password = $vo->getPassword();
        return $id = R::store($user);
    }

    public static function doDeleteById($id) {
        $user = R::dispense('user');
        $user->id = $id;
        R::trash($user); //for one bean
    }

    /**
     * Use findAll if you don't want to add any conditions (but you want to order or limit... )
     * @param $pageNum : which page , from 1
     * @param $pageSize : how many records per page
     * @return array
     */
    public static function find($pageNum, $pageSize) {
        $start = ($pageNum - 1) * $pageSize;
        $criteria = ' LIMIT ' . $start . ',' . $pageSize;
        return R::findAll('user', $criteria);
    }

    public static function findById($id) {
        return $user = R::load('user', $id);
    }

    public static function findByKeyword($col, $keyword) {
        $keyword = '%' . $keyword . '%';
        $criteria = $col . ' LIKE ?';
        return $users = R::find('user', $criteria, [$keyword]);
    }

    public static function batchFindByIds($ids) {
        return $users = R::loadAll('user', $ids);
    }

    public static function getAllCount() {
        return R::count('user');
    }

    public static function exeSQL($sql) {
        return R::exec($sql);
    }

    public static function doLogin($uid, $password) {
        $user = R::findOne('user', ' email = ? and password = ? ', [$uid, $password]);
        return $user;
    }

    // reload
    //$bean = $bean->fresh();

}