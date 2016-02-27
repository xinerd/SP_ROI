<?php

class Service_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function getPanelHistory() {
        return InfoDAOImpl::findPanelHistory();
    }
}