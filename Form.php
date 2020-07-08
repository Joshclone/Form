<?php
include "code.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="ighub.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
</head>


<body style="background: #CCC;">
    <h1>Innvation Growth Hub</h1><br>
    <h4>Login Form </h4>

    <div id="frm" class="jumbotron" style="width: 500px;">
        <form action="code.php" method="POST">
            <p>
                <!--<label>Username:</label>-->

                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required />
            </p>

            <p>
                <!--<label>Password:</label>-->

                <input type="password" id="password" name="password" placeholder="Password" class="form-control"
                    required />
            </p>

            <p class="text-center" style="color:red;">
                <?php echo  $message; ?>
            </p>

            <p>

                <!--<input type="submit" id="btn" value="login" />-->
                <button type="submit" class="btn btn-success mt-3" name="Login">login</button>
            </p>

        </form>
    </div>


</body>



</html>