<?php

/**
 *
 * Here is the request_infromation part of the user
 *
 *
 */
// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will check whether the user is logged in or
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

require_once("classes/Request.php");

$request = new Request();


// show the request view (with the request form, and messages/errors)
include("views/request_information.php");
