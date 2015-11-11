<?php
/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/3/15 12:27 PM
 */

/**
 * General
 */
define ('BACK_TO_LOGIN_LINK', " <a href='" . URL . "login'>return to login page</a><br/>");
define ('WEB_SUPPORT', 'please Contact web admin XIN_MING@student.uml.edu.');

/**
 * LOGIN
 */
define('STATUS_ACTIVATED', 1);
define('STATUS_NON_ACTIVATED', 0);
define('STATUS_LOGIN_SUCCESS', true);
define('STATUS_NON_ACTIVATED_PROMPT', "you haven't activate your account,<br/>please check your Email to activate your account before
use it.<br/>");
define('NO_RECORD_PROMPT', "no matched record found.<br/>check your password and try again.<br/>");

/**
 * Prompt - error
 */
define('PAGE_NOT_FOUND', "this page does not exists.");

/**
 * Prompt - email
 */
define('EMAIL_INVALID', 'please confirm the Email address is correct.');
define('EMAIL_SERVER_ERROR', 'The Email system is under pressure, please try again later.');
define('EMAIL_SEND_SUCCESS', '<h2>Email has been sent<br/> After you activate your account from Email
<br/>then you can use it.</h2>');

/**
 * Prompt - signup
 */
define('SIGN_UP_SUCCESS', EMAIL_SEND_SUCCESS . BACK_TO_LOGIN_LINK);
define('SIGN_UP_DUPLICATE_REGISTER',
    'This Email is already registered<br/> Please try to login in or reset password.<br/>' . BACK_TO_LOGIN_LINK);
define('SIGN_UP_ACTIVATE_SUCCESS', "Activation Successfully!<br/>" . BACK_TO_LOGIN_LINK);
define('SIGN_UP_ACTIVATE_CODE_EXPIRED', "Activated or Activation code expired<br/>
        Resent the activation email function is under constriction.<br/>
        If the problem remains<br/>"
    . WEB_SUPPORT);

/**
 * EXCEPTION
 */
define('SQL_EXCEPTION_CREATE_USER',
    'This Email is not registered<br/> but the DB currently down, please try again later.<br/>' . BACK_TO_LOGIN_LINK);

/**
 * Email
 */
define('EMAIL_ACTIVATE_TITLE', "#91513f2015 Verify your Smarter Investor ID!");
define('EMAIL_ACTIVATE_BODY_START', "
    <br/><br/>
    You recently signed up Smarter Investor!
    <br/>
    To verify this email address belongs to you, click the link below and then sign in using your
    Smarter Investor ID and password.
    <br/>
");
define('EMAIL_ACTIVATE_BODY_END', "
    <br/>
    Why you received this email.
    #91513f2015 requests verification whenever an email address is selected as an Smarter Investor ID.
    Your Smarter Investor ID cannot be used until you verify it.
    <br/><br/>
    UML Support
    <br/>
");