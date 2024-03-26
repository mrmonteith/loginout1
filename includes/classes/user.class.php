<?php
 # user.class.php - database class 
# Created by: Michael Monteith
# Creaded: 3/24/24

/* 
    User Authentication (user.class.php):
    ◦ Create a class to handle user authentication.

*/

class User
    {
        private $db;
        public function __construct($db)
        {
            $this->db = $db;
        }

        public function login($username, $password)
        {

            // Validate user credentials and set session variables
            // Redirect to the appropriate page after successful login
            header("Location: dashboard.php");
        }

        public function logout()
        {
            // Destroy session and redirect to login page
        }
    }
?>