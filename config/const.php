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
define ('BACK_TO_LOGIN_LINK', " <a href='" . URL . "login'>return to login page</a>");

/**
 * LOGIN
 */
define('STATUS_ACTIVATED', 1);
define('STATUS_NON_ACTIVATED', 0);
define('STATUS_NON_ACTIVATED_PROMPT', "you haven't activate your account,<br/>please check your Email to activate your account before
use it.<br/>");
define('NO_RECORD_PROMPT', "no matched record found.<br/>check your password and try again.<br/>");

/**
 * Prompt - error
 */
define('PAGE_NOT_FOUND', "this page does not exists.");

/**
 * Prompt - signup
 */
define('SIGN_UP_SUCCESS',
    'Email has been sent<br/>After you activate your account from Email,then you can use it.<br/>'
    . BACK_TO_LOGIN_LINK);


/**
 * EXCEPTION
 */
define('SQL_EXCEPTION_DUPLICATE_ENTRY',
    'This Email is already registered, Please try to login in or reset password.' . BACK_TO_LOGIN_LINK);
