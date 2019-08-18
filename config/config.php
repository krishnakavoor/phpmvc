<?php

/**
 * Please define your localhost and project Path in turn project to run smoothly
 */
define('LOCALHOST_PATH', 'http://localhost');
define('PROJECT_PATH', '/kmvc');
define('COMPLETE_PATH', LOCALHOST_PATH . PROJECT_PATH);
define('SITE_VERSION', '20160827');
define('SITE_NAME', 'DETENTION CALCULATOR');

define('DB_HOST', 'localhost');
define('DB_NAME', 'detention');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_CHAR', 'utf8');

/* table level database class could not finish it */
define('OFFENSE_TABLE', 'Offense');
define('STUDENT_TABLE', 'students');
/**
 * We can write the automated script to load the class.I could not do it.
 * There is a mistake in the class name My appoplogy Offence to Offense.
 */
require_once 'database.php';
require_once 'model/Model.php';
require_once 'model/Offense_Model.php';
require_once 'model/OffenceType_Model.php';
require_once 'model/Student_Model.php';
require_once 'model/Teacher_Model.php';
require_once 'model/Detention_Model.php';
require_once 'model/DetentionType_Model.php';
require_once 'model/Parents_Model.php';
require_once 'controller/Student.php';
require_once 'controller/Teacher.php';
require_once 'controller/Offence.php';
require_once 'controller/Detention.php';
require_once 'controller/DetentionType.php';
require_once 'controller/OffenceType.php';
require_once 'controller/Parents.php';
?>