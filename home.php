<?php
require_once 'controller.php';

//if user is not logged in, they cannot access this page 
if (!isset($_SESSION['id'])) {

    header('location: Form.php');
    exit();
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>User registration system using PHP and MySQL</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="ighub.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
</head>


<body style="background: #CCC;">
    <div class="jumbotron">
        <div class="alert  <?php echo $_SESSION['alert-class']; ?>">
            <?php echo $_SESSION['message'];
            unset($_SESSION['message']);
            unset($_SESSION['alert-class']);



            ?>
        </div>

        <h3>Welcome, <?php echo $_SESSION['username']; ?> </h3>
        <a href="" class="logout">logout</a>






        <div>


        </div>














    </div>
</body>

</html>