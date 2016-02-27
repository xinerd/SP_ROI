<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/10/15 5:37 PM
 */
class PHistory {
    public $id;
    public $date;
    public $email;
    public $generated_power;
    public $consumed_power;
    public $price;
    public $income;

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date) {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getGeneratedPower() {
        return $this->generated_power;
    }

    /**
     * @param mixed $generated_power
     */
    public function setGeneratedPower($generated_power) {
        $this->generated_power = $generated_power;
    }

    /**
     * @return mixed
     */
    public function getConsumedPower() {
        return $this->consumed_power;
    }

    /**
     * @param mixed $consumed_power
     */
    public function setConsumedPower($consumed_power) {
        $this->consumed_power = $consumed_power;
    }

    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price) {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getIncome() {
        return $this->income;
    }

    /**
     * @param mixed $income
     */
    public function setIncome($income) {
        $this->income = $income;
    }
}