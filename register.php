<?php
require_once 'controller.php';?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="ighub.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
</head>


<body style="background: #CCC;">
    <h1>Innvation Growth Hub</h1><br>
    <h4>Sign Up</h4>
    <h4>Please fill this form to create an account.</h4>

    <div id="frm" class="jumbotron" style="width: 500px;">

        <form action="register.php" method="POST">
            <?php
            if (count($errors) > 0) : ?>
            <p class="alert alert-danger">
                <?php
                    foreach ($errors as $error) : ?>
                <li> <?php echo $error; ?>
                    <?php endforeach; ?>

            </p>
            <?php endif; ?>

            <p>
                <!--<label>Username:</label>-->

                <input type="text" id="username" method="POST" name="username" class="form-control"
                    placeholder="Username" value="<?php echo $username; ?>" required />
            </p>

            <p>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>" placeholder="Email"
                    class="form-control" required />
            </p>

            <p>
                <!--<label>Password:</label>-->

                <input type="password" id="password" name="password" placeholder="Password" class="form-control"
                    required />
            </p>

            <p>
                <!--<label>Password:</label>-->

                <input type="password" id="password" name="passwordConf" placeholder="Confirm Password"
                    class="form-control" required />
            </p>

            <p>

                <!--<input type="submit" id="btn" value="login" />-->
                <button type="submit" class="btn btn-success mt-3" name="Register">Register</button>
            </p>

            <p>
                Aready a member?<a href="form.php">Sign in</a>
            </p>
        </form>
    </div>


</body>



</html>