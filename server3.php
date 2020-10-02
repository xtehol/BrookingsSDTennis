<?php
    session_start();

    $username = "";
    $email = "";
    $errors = array();
    // Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'registration');

    // if the register button is clicked
    if (isset($_POST['register'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $admin = 0;
        // ensure that form fields are filled properly
        if (empty($username)) {
            array_push($errors, "Username is required"); 
        }
        if (empty($email)) {
            array_push($errors, "Email is required"); 
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        // check duplicate username
        $query = "SELECT * FROM users WHERE username = '$username' ";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
            //log user in
            array_push($errors, "Choose a different username");
        } 

        // if there are no errorsm save user to database
        if (count($errors) == 0) {
            $password = md5($password_1); // encrypt password before stroing in database (security)
            $sql = "INSERT INTO users (username, email, password, admin) 
                    VALUES ('$username', '$email', '$password', '$admin')";
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('Location: index2.php'); // redirect to home page
        }
    }

    // log user in from login page
    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        // ensure that form fields are filled properly
        if (empty($username)) {
            array_push($errors, "Username is required"); 
        }
        if (empty($password)) {
            array_push($errors, "Password is required"); 
        }

        if (count($errors) == 0) {
            $password = md5($password); // encrypt password before comparing with that from database
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) == 1) {
                // log user in
                $_SESSION['username'] = $username;

                // check privileges
                
                $admin = 1;
                $query = "SELECT * FROM users WHERE username = '$username' AND admin = '$admin'";
                $result = mysqli_query($db, $query);
                if (mysqli_num_rows($result) == 1) {
                    //log user in
                    $_SESSION['admin'] = $admin;
                } 
                
                //$_SESSION['loggedin'] = true;
                $_SESSION['success'] = "You are now logged in";
                header('Location: index2.php'); // redirect to home page
            } else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }

    // logout
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        //unset($_SESSION['loggedin']);
        header('Location: login.php');
    }


    // login authentication
    //if (!isset($_SESSION['loggedin']) || !isset($_SESSION['username'])) {
/*
    if (!isset($_SESSION['loggedin'])) {
        header('Location: login.php');
    }
*/
?>