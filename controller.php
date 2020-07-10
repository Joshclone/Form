<?php
session_start();
require_once "connection.php";

$errors = [];
$status = "";

//handle registration and error checking
if (isset($_POST['sign_up'])) {

    //extract the variables from the post array
    extract($_POST);

    //validate each variable
    if (!empty($user_name)) {
        $username = strip_tags(stripslashes($user_name));
    } else {
        $errors['user_name_empty'] = "Username field is required";
    }

    if (!empty($user_email)) {
        if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            $email = strip_tags(stripslashes($user_email));
        } else {
            $errors['user_email_format'] = "Email format is not valid";
        }
    } else {
        $errors['user_email_empty'] = "Email is required";
    }

    if (!empty($user_password)) {
        $userpassword = stripslashes($user_password);
    } else {
        $errors['user_password_empty']  = "Password is required";
    }

    if (!empty($user_password_confirmation)) {
        $userpasswordconfirmation = stripslashes($user_password_confirmation);
    } else {
        $errors['user_password_confirmation_empty'] = "Please confirm your password";
    }

    if (!empty($user_password) && !empty($user_password_confirmation)) {
        if ($userpasswordconfirmation === $userpassword) {
            $password = $userpassword;
        } else {
            $errors['password_match_error'] = "Passwords do not match";
        }
    }

    //hash pashword
    $password = password_hash($password, PASSWORD_DEFAULT);

    //write data to database
    if (count($errors) === 0) {
        $query = 'INSERT INTO users1 (username, email, password) VALUES (?, ?, ?)';
        $stmt = $connection->prepare($query);
        $stmt->execute(array($username, $email, $password));
    }

    $_SESSION['username'] = $username;

    header('location: home.php');
}

//handle login
if (isset($_POST['sign_in'])) {
    //extract post data
    extract($_POST);

    //validate input
    if (!empty($email)) {
        $user_email = stripslashes(strip_tags($email));
        $query = 'SELECT * FROM users1 WHERE email = ?';
        $stmt = $connection->prepare($query);
        $stmt->execute(array($user_email));
        $user = $stmt->fetch();
        if (empty($user)) {
            $errors['user_invalid'] = "User credentials do not match our records";
        }
    } else {
        $errors['user_email_empty'] = "Email is required";
    }

    //verfiy password and log user in 
    if (!empty($password)) {
        if (password_verify($password, $user["password"])) {
            $_SESSION['username'] = $user["username"];
            header('location: home.php');
        } else {
            $errors['password_invalid'] = "Password is invalid";
        }
    } else {
        $errors['user_password_empty']  = "Password is required";
    }
}

//handle logout
if (isset($_POST['sign_out'])) {
    unset($_SESSION['username']);
    session_destroy();
    header('location: login.php');
}
?>