<?php
/*
*
*Class Request
*Handles the Request part
*
*/

class Request
{

    /**
   * @var object $db_connection The database connection
   */
  private $db_connection = null;
  /**
   * @var array $errors Collection of error messages
   */
  public $errors = array();
  /**
   * @var array $messages Collection of success / neutral messages
   */
  public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$registration = new Registration();"
     */
    function __construct()
    {
        if (isset($_POST["userRequest"])) {
            $this->registerUserRequest();
        }
        
    }
 /**
   * handles the entire request process. checks all error possibilities
   * and creates a new user in the database if everything is fine
   */

  private function registerUserRequest()
  {
    if ((empty($_POST['userRequestName'])
          && empty($_POST['userRequestSubject'])
          && empty($_POST['userRequestDescription'])
          ) 
    ){
      $this->errors[] = "Fill the Request Form";
    }
    elseif (empty($_POST['userRequestName'])) {
            $this->errors[] = "Enter Your Name";   
    }elseif (empty($_POST['userRequestSubject'])) {
        $this->errors[] = " Enter the Subject";
    }elseif (empty($_POST['userRequestDescription'])) {
            $this->errors[] = "Enter the Request";
    }elseif (!empty($_POST['userRequestName'])
            && !empty($_POST['userRequestSubject'])
            && !empty($_POST['userRequestDescription'])
                
    ) {

            // create a database connection, using the constants from config/db.php (which we loaded in index.php)
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        // change character set to utf8 and check it
        if (!$this->db_connection->set_charset("utf8")) {
            $this->errorss[] = $this->db_connection->errors;
        }
        // if no connection errorss (= working database connection)
        if (!$this->db_connection->connect_errno) {

            $user_request_name = htmlspecialchars($_POST['userRequestName']);
            $user_request_subject = htmlspecialchars($_POST['userRequestSubject']);
            $user_request_description = htmlspecialchars($_POST['userRequestDescription']);

            // write new user's data into database
            $sql = "INSERT INTO user_request_details(userRequestName,userRequestSubject,userRequestDescription)
                    VALUES('" . $user_request_name . "', '" . $user_request_subject . "', '" . $user_request_description . "')";
            $query_new_user_insert = $this->db_connection->query($sql);

            if ($query_new_user_insert) {
                  $this->messages[] = "!!! Your Request Is Submitted";
            }else{
              $this->errors[] = "Sorry, your Request failed. Please go back and try again.";
            }
        }else{
            $this->errors[] = "Database connection problem.";
        }
    }else{
        $this->errors[] = "Please try again";
    }





   }
  

}