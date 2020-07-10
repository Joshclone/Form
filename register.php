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
    <div class="container-fluid m-4">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <h1>Innovation Growth Hub</h1>
                <p>Sign up to join us!</p>

                    <?php
                        if($status !== "") { ?>
                        <div class="alert alert-primary my-3">
                           <?php echo $status; ?>
                        </div>    
                    <?php }
                    ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="register.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="user_name" id="username" class="form-control <?php if(isset($errors['user_name_empty'])){ ?> is-invalid <?php } ?>" value="<?php if(isset($username)){echo $username;} ?>">

                        <?php
                        if(isset($errors['user_name_empty'])){ ?>
                            <small class="text-danger">
                                <?php echo $errors['user_name_empty']; ?>
                            </small>
                        <?php }
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="user_email" id="email" class="form-control <?php if(isset($errors['user_email_empty'])){ ?> is-invalid <?php } ?>" value="<?php if(isset($email)){echo $email;} ?>">
                        
                        <?php
                        if(isset($errors['user_email_format'])){ ?>
                            <small class="text-danger">
                            <?php echo $errors['user_email_format']; ?>
                            </small>
                         <?php }else if(isset($errors['user_email_empty'])){ ?>
                            <small class="text-danger">
                            <?php echo $errors['user_email_empty']; ?>
                            </small>
                         <?php }?>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" id="password" class="form-control <?php if(isset($errors['user_password_empty']) OR isset($errors['password_match_error'])){ ?> is-invalid <?php } ?>">

                        <?php 
                        if(isset($errors['user_password_empty'])){?>
                        <small class="text-danger">
                        <?php echo $errors['user_password_empty']; ?>
                        </small>
                        <?php }else if(isset($errors['password_match_error'])){?>
                            <small class="text-danger">
                            <?php echo $errors['password_match_error']; ?>
                            </small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="user_password_confirmation" id="password_confirmation" class="form-control <?php if(isset($errors['user_password_confirmation_empty']) OR isset($errors['password_match_error'])){ ?> is-invalid <?php } ?>">

                        <?php 
                        if(isset($errors['user_password_confirmation_empty'])){?>
                        <small class="text-danger">
                        <?php echo $errors['user_password_confirmation_empty']; ?>
                        </small>
                        <?php }else if(isset($errors['password_match_error'])){?>
                            <small class="text-danger">
                            <?php echo $errors['password_match_error']; ?>
                            </small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="sign_up" class="btn btn-primary btn-block">Sign Up</button>

                        <p class="my-3">Do you have an account already? <a href="login.php">Sign in!</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>