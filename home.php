<?php require_once "controller.php";

if(empty($_SESSION['username'])){
    header('location: login.php');
}
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
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            <div class="jumbotron-fluid mx-auto my-5">
            <div class="card-header">
                <div class="card-title">Welcome! <?php echo $_SESSION['username']; ?></div>
            </div>
            <div class="card-body">
                <p>We're pleased you're able join us here!</p>
                <p>Wonders await you...</p>
                <form action="home.php" method="post">
                <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
                <button type="submit" name="sign_out" class="btn btn-primary">Log out</button>
                </form>
            </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>