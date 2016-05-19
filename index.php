<?php
session_start();
error_reporting(0);
require_once "autoload.php";
require_once "config.php";
try{
    $object = Route_Controller::instance();
    $object->route();
}
catch(Exception $e){

}
?>