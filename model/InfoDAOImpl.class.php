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
    }

    public static function findPanelHistory() {
        //        return R::findAll('phistory', ' ORDER BY id DESC LIMIT 5 ');
        $db = new Database();
        $conn = $db->getConn();
        $sql = "select * from phistory ORDER BY id DESC LIMIT 5 ";
        $result = $conn->query($sql);
        $rows = $result->num_rows;

        $poArray = null;
        while (--$rows >= 0) {
            $row = $result->fetch_assoc();
            // Set po
            $po = new PHistory();
            $po->setId($row['id']);
            $po->setDate($row['date']);
            $po->setEmail($row['email']);
            $po->setGeneratedPower($row['generated_power']);
            $po->setConsumedPower($row['consumed_power']);
            $po->setPrice($row['price']);
            $po->setIncome($row['income']);
            $poArray[$rows] = $po;
        }
        $conn->close();
        return $poArray;
    }

}