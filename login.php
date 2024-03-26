<?php

# login.php - 
# Created by: Michael Monteith
# Creaded: 3/24/24

#    Login Page (login.php):
#    ◦ Create a login form that collects username and password.
#    ◦ Instantiate the User class and call the login method.

    require_once 'includes/db.config.php';
    require_once 'includes/classes/database.class.php';
    require_once 'includes/classes/user.class.php';

    
    $db = new Database();
    $user = new User($db);
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user->login($username, $password);
    }
    
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Login Page</title>

    </head>

    <body>
        <!-- HTML form for login -->
        <form method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Log In</button>
        </form>


    </body>
</html>