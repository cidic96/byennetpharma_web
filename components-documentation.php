<?php

/**
 *
 * Here is the php version 
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




// show the pages in the you can change in the view (with the index and messages/errors)
include("views/components-documentation.php");
