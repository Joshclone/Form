<?php
require_once 'controller.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="ighub.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
</head>


<body style="background: #CCC;">
    <h1>Innvation Growth Hub</h1><br>
    <h4>Login</h4>

    <div id="frm" class="jumbotron" style="width: 500px;">
        <form action="Form.php" method="POST">
            <?php
            if (count($errors) > 0) :
            ?>
            <p class="alert alert-danger">
                <?php
                    foreach ($errors as $error) : ?>
                <li> <?php echo $error; ?></li>
                <?php endforeach; ?>

            </p>
            <?php endif; ?>

            <p>
                <!--<label>Username:</label>-->

                <input type="text" id="username" name="username" value="<?php echo $username; ?>" class="form-control"
                    placeholder="Username" required />
            </p>

            <p>
                <!--<label>Password:</label>-->

                <input type="password" id="password" name="password" placeholder="Password" class="form-control"
                    required />
            </p>

            <p>

                <!--<input type="submit" id="btn" value="login" />-->
                <button type="submit" class="btn btn-success mt-3" name="login">Login</button>
            </p>

            <p>
                No yet a member?<a href="register.php">Sign up</a>
            </p>

        </form>
    </div>


</body>



</html>