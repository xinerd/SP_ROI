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
        $user = R::dispense('t_user');
        $user->uid = $vo->getUid();
        $user->password = $vo->getPassword();
        return $id = R::store($user);
    }

    public static function doUpdate($vo) {
        $user = R::dispense('t_user');
        $user->id = $vo->getId();
        $user->uid = $vo->getUid();
        $user->age = $vo->getAge();
        $user->password = $vo->getPassword();
        return $id = R::store($user);
    }

    public static function doDeleteById($id) {
        $user = R::dispense('t_user');
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
        return R::findAll('t_user', $criteria);
    }

    public static function findById($id) {
        return $user = R::load('t_user', $id);
    }

    public static function findByKeyword($col, $keyword) {
        $keyword = '%' . $keyword . '%';
        $criteria = $col . ' LIKE ?';
        return $users = R::find('t_user', $criteria, [$keyword]);
    }

    public static function batchFindByIds($ids) {
        return $users = R::loadAll('t_user', $ids);
    }

    public static function getAllCount() {
        return R::count('t_user');
    }

    public static function exeSQL($sql) {
        return R::exec($sql);
    }

    public static function testFindOne($uid, $password) {
        $user = R::findOne('t_user', ' email = ? and password = ? ', [$uid, $password]);
        return $user;
    }

    // reload
    //$bean = $bean->fresh();

    //If you want a single bean instead of an array, use:
    //$book  = R::findOne( 'book', ' title = ? ', [ 'SQL Dreams' ] );


}