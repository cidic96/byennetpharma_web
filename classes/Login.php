<?php

/**
 * Class login
 * handles the user's login and logout process
 */
class Login
{
    private $db_connection = null;
    /**
     * @var array Collection of error messages
     */
    public $errors = array();
    /**
     * @var array Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$login = new Login();"
     */
    public function __construct()
    {   
        // stop all the warnig and errors to see the warning and errors make it as comment
        error_reporting(0);
        session_start();

        // check the possible login actions:
        // if user tried to log out (happen when user clicks logout button)
        if (isset($_GET["logout"])) {
            $this->doLogout();
        }
        // login via post data (if user just submitted a login form)
        elseif (isset($_POST["login"])) {
            $this->doLogin();
        }
    }

    /**
     * log in with post data
     */
    private function doLogin()
    {   // check login form contents
        if (empty($_POST['user_email'])) {
            $this->errors[] = "User Email field was empty.";
        } elseif (empty($_POST['user_password'])) {
            $this->errors[] = "Password field was empty.";
        } elseif (!empty($_POST['user_email']) && !empty($_POST['user_password'])) {

            

            // create a database connection, using the constants from config/db.php (which we loaded in index.php)
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                $user_email =  htmlspecialchars($_POST['user_email']);
                $user_password = md5($_POST['user_password']);

                // database query, getting all the info of the selected user (allows login via email address in the
                // username field)
                $sql = "SELECT *
                        FROM user_detail
                        WHERE userEmail = '" . $user_email . "' AND userPassword = '" . $user_password . "';";
                $result_of_login_check = $this->db_connection->query($sql);

                // if this user exists
                if ($result_of_login_check->num_rows == 1) {

                    // get result row (as an object)
                    $result_row = $result_of_login_check->fetch_assoc();

                    // verifying the data base value with the login form data
                    if ($user_email == $result_row['userEmail'] && $user_password==$result_row['userPassword'] ) {

                        // write user data into PHP SESSION (a file on your server)
                        $_SESSION['user_email'] = $result_row['userEmail'];
                        $_SESSION['user_password'] = $result_row['userPassword'];
                        $_SESSION['user_login_status'] = 1;
                        $_SESSION['type'] = $result_row['type'];
                        $_SESSION['firstName'] = $result_row['firstName'];
                        $_SESSION['lastName'] = $result_row['lastName'];

                    } else {
                        $this->errors[] = "Wrong password. Try again.";
                    }
                } else {
                    $this->errors[] = "This user does not exist.";
                }
            } else {
                $this->errors[] = "Database connection problem.";
            }
        }
        
    }

    /**
     * perform the logout
     */
    public function doLogout()
    {
        // delete the session of the user
        $_SESSION = array();
        session_destroy();
        // return a little feeedback message
        $this->messages[] = "You have been logged out.";

    }

    /**
     * simply return the current state of the user's login
     * @return boolean user's login status
     */
    public function isLoggedIn()
    {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
        // default return
        return false;
    }
}
