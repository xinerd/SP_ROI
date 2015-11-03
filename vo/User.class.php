<?php

/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/2/15 6:42 PM
 */
class User {
    private $id;
    private $userName;
    private $password;
    private $email;
    private $token;
    private $tokenExptime;
    private $status;
    private $regTime;

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
    public function getUserName() {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName) {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password) {
        $this->password = $password;
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
    public function getToken() {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token) {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getTokenExptime() {
        return $this->tokenExptime;
    }

    /**
     * @param mixed $tokenExptime
     */
    public function setTokenExptime($tokenExptime) {
        $this->tokenExptime = $tokenExptime;
    }

    /**
     * @return mixed
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status) {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getRegTime() {
        return $this->regTime;
    }

    /**
     * @param mixed $regTime
     */
    public function setRegTime($regTime) {
        $this->regTime = $regTime;
    }

    function __toString() {
        return $this->id
        . '\t' . $this->userName
        . '\t' . $this->password
        . '\t' . $this->email
        . '\t' . $this->token
        . '\t' . $this->tokenExptime
        . '\t' . $this->status
        . '\t' . $this->regTime
        . '\n';
    }


}