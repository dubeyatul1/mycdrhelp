<?php 
@ob_start();
@session_start();
//error_reporting(0);
require_once "admin/baseurl.php";
require_once "admin/controller/Connection.php";
require_once 'dao/AdminDao.php';
$Connection = new Connection ();
$db = $Connection->getConnection ();
$adminDao = new AdminDao($db);
?>