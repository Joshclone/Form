<?php
require_once "controller.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Innovation Growth Hub</title>
</head>
<body>
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <h2 class="text-center">Login to start you session</h2>

                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control <?php if(isset($errors['user_email_empty']) OR isset($errors['user_invalid'])){ ?> is-invalid <?php } ?>">

                        <?php if(isset($errors['user_email_empty'])){ ?>
                            <small class="text-danger">
                                <?php echo $errors['user_email_empty']; ?> 
                            </small>
                        <?php }else if(isset($errors['user_invalid'])){ ?>
                            <small class="text-danger">
                                <?php echo $errors['user_invalid']; ?> 
                            </small>
                        <?php } ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control <?php if(isset($errors['user_password_empty']) OR isset($errors['password_invalid'])){ ?> is-invalid <?php } ?>">

                        <?php if(isset($errors['user_password_empty'])){ ?>
                            <small class="text-danger">
                                <?php echo $errors['user_password_empty']; ?> 
                            </small>
                        <?php }else if(isset($errors['password_invalid'])){ ?>
                            <small class="text-danger">
                                <?php echo $errors['password_invalid']; ?> 
                            </small>
                        <?php } ?>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="sign_in">Sign in</button>

                        <p class="my-4">Don't have an account? <a href="register.php">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>