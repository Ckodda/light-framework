<?php
error_reporting(E_ALL);

ini_set('ignore_repeated_errors', TRUE);
ini_set('display_errors', FALSE);
ini_set('log_errors', TRUE);
require_once ('config/config.php');
ini_set('error_log', __dirname_errors_log);
require_once ('libs/routes.php');
?>