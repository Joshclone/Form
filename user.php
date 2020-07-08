<?php
session_start();


?>
<!DOCTYPE html>
<html>

<head>
    <title>User Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="ighub.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
</head>

<div class="jumbotrun">

    <body style="background: #CCC;">
        <h1>Welcome <?php
                    echo $_SESSION['User'];
                    ?>

        </h1><br>
        <h4> to User Page </h4>


</div>