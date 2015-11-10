<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/2/15 4:33 PM
 */
class InfoDAOImpl {

    function __construct() {
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

    public static function findPanelHistory() {
        return R::findAll('phistory', ' ORDER BY id DESC LIMIT 5 ');
    }

}