<?php

//disable the errors and warning
define("DEBUG", false);
error_reporting();
ini_set('display_errors', DEBUG);

//use namespaces
use Ahmed\Vcard\core\Database\mysqli\db;
use Ahmed\Vcard\core\registry;
use Ahmed\Vcard\core\saas\saas;
use Ahmed\Vcard\core\session;
use Ahmed\Vcard\core\validation;
use Ahmed\Vcard\core\bootstrap;

//get the autoloader
require_once realpath(dirname(__DIR__)."/vendor/autoload.php");

//start session
session::start();

//make object from main db
registry::set("main", new db("vcard"));

//make object from users db
registry::set("allUsers", new db("vcard_all_users"));

//make object from validation class
registry::set("validation", new validation);

//run saas class for make the user db connection
(new saas)->run($_SERVER['HTTP_HOST']);

//bootstrap the project
$bootstrap = new bootstrap;