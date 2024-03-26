<?php
# dashboard.php - 
# Created by: Michael Monteith
# Creaded: 3/24/24

/* 

Protected Page (dashboard.php):
◦ Create a protected page that requires authentication.
◦ Check if the user is logged in; if not, redirect to the login page.

*/

//    session_start();
//    if (!isset($_SESSION['user_id']))
//   {
//        header("Location: login.php");
//        exit;
//    }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Login Page</title>

    </head>

    <body>

        <!-- Your dashboard content here -->
        <h1>Welcome to the Dashboard!</h1>
        <a href="logout.php">Log Out</a>

    </body>
</html>