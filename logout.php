
<?php
# logout.php - 
# Created by: Michael Monteith
# Creaded: 3/24/24

/* 

    Logout Page (logout.php):
    ◦ Create a logout page that destroys the session and redirects to the login page.

*/

    session_start();
    session_destroy();
    header("Location: login.php");
    exit;
?>