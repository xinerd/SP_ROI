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
 * load all framework
 */
require 'libs/rb.php';

/**
 * load all classes
 */
require 'vo/User.class.php';
require 'model/UserDAOImpl.class.php';

$app = new Bootstrap();


