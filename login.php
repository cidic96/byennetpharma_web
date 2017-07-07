<?php

// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
if ($login->isLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, I simply show the "you are logged in" view with the role of the user.
    include("views/index.php");

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("views/not_logged_in.php");
}

/*
*
* for admin use the admin@gmail.com and admin as mail id and password
* for seller use the seller@gmail.com and seller as mail id and password
* for employee use the employee@gmail.com and employee as mail id and password
* 
*/