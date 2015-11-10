<?php
/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 10/31/15 10:55 PM
 */
/**
 * load all configs
 */
require 'config/Paths.php';
require 'config/Database.php';
require 'config/const.php';
require 'config/EmailSetting.php';

/**
 * load all libs
 */
require 'libs/Bootstrap.php';
require 'libs/Model.php';
require 'libs/Controller.php';
require 'libs/View.php';
require 'libs/Database.php';
require 'libs/Session.php';

/**
 * load email
 */
require 'libs/mail/class.phpmailer.php';
require 'libs/mail/EmailService.php';


/**
 * load all framework
 */
require 'libs/orm/rb.php';

/**
 * load all classes
 */
require 'vo/User.class.php';
require 'vo/PHistory.class.php';
require 'model/UserDAOImpl.class.php';
require 'model/InfoDAOImpl.class.php';
require 'controller/prompt.php';
require 'libs/utility.php';

$app = new Bootstrap();