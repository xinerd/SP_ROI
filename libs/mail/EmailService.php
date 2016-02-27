<?php

/**
 * This Email Service require : class.phpmailer.php
 * Initialize EmailService object, setReceiver(User), sendEmail()
 * Created by IntelliJ IDEA.
 * User: xinerd
 * Date: 10/5/15
 * Time: 11:43 AM
 */
class EmailService {

    function __construct() {
        $this->init();
        //        $this->receiver = $receiver;
    }

    public function init() {
        $this->iEmailService = new PHPMailer();
        $this->iEmailService->IsSMTP(); // Set mailer to use SMTP
        /******************************************************
         * EMail Configuration
         */
        $this->iEmailService->Host = EMAIL_SERVER_HOST; // Specify main and backup SMTP servers
        $this->iEmailService->SMTPAuth = EMAIL_SERVER_SMT_AUTH; // Enable SMTP authentication
        $this->iEmailService->Port = EMAIL_SERVER_PORT;
        $this->iEmailService->SMTPSecure = EMAIL_SERVER_SMTP_SECURE;
        //$this->iEmailService->SMTPDebug = EMAIL_SERVER_SMTP_DDEBUG; //debug
        $this->iEmailService->CharSet = EMAIL_SERVER_CHARSET; // char set
        $this->iEmailService->Encoding = EMAIL_SERVER_ENCODING; // encoding

        /******************************************************
         * Sender Email Account Configuration
         */
        $this->iEmailService->Username = EMAIL_SENDER_USERNAME; // SMTP username
        $this->iEmailService->Password = EMAIL_SENDER_PASSWORD; // SMTP password

        $this->iEmailService->From = EMAIL_SENDER_FROM; //SMTP username
        $this->iEmailService->FromName = EMAIL_SENDER_FROM_NAME; //SMTP password
    }

    /**
     * Send Email to receiver
     * If send email to multi-receivers, iteration
     * @return string
     * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
     */
    public function sendEmail() {
        if (!isset($this->receiver)) {
            return EMAIL_INVALID;
        }

        $this->iEmailService->AddAddress
        ($this->receiver->getEmail(), $this->receiver->getUserName()); // Add a recipient

        /******************************************************
         * Email Content
         */
        $this->iEmailService->IsHTML(EMAIL_CONTENT_IS_HTML); // Set email format to HTML
        $this->iEmailService->Subject = EMAIL_ACTIVATE_TITLE;
        $this->iEmailService->Body = $this->compActivationEmailBody($this->getReceiver());
        //$this->iEmailService->AddAttachment('xx.xls','my attachment.xls'); // Add attachments and name
        //$this->iEmailService->AddEmbeddedImage("logo.jpg", "my-attach", "logo.jpg"); //set image

        if (!$this->iEmailService->send()) {
            $result = EMAIL_SERVER_ERROR;// . $this->iEmailService->ErrorInfo;
        } else {
            $result = EMAIL_SEND_SUCCESS;
        }
        return $result;
    }

    /**
     * Compose Activation Email Body
     * @param User $user
     * @return string
     * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
     */
    public function compActivationEmailBody(User $user) {
        return 'Dear <b>' . $user->getUserName() . '</b>!'
        . EMAIL_ACTIVATE_BODY_START .
        '<a href="' . URL_ACTIVATE . $user->getToken() . '" target="_blank">'
        . URL_ACTIVATE . $user->getToken() .
        '</a>'
        . EMAIL_ACTIVATE_BODY_END;
    }

    //private $iEmailService;
    //    private $receiver;
    //    private $receivers;

    public function getReceiver() {
        return $this->receiver;
    }

    /**
     * TODO: should check if receiver is legal.
     * @param User $user
     */
    public function setReceiver(User $user) {
        $this->receiver = $user;
    }

    //multi-receiver
    public function setReceivers(User $users) {
        $this->receivers = $users;
    }
}