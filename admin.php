<?php
session_start();


if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 'Admin') {
        header('Location: user.php');
    }
} else {
    header('Location: form.php');
}

?>
<!DOCTYPE html>
<html>




<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="ighub.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
</head>


<body style="background: #CCC;">
    <div class="jumbotron" style="width: 500px;">
        <h1>Welcome to Innvation Growth Hub</h1><br>
        <h4>Admin Page </h4>
        <?php
        echo $_SESSION['User'];


        ?>
    </div>


</html>