<?php include('server.php'); ?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/Hero-Technology.css">
    <link rel="stylesheet" href="assets/css/Mockup-MacBook-Pro.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
</head>

<body style="background-color:grey;">
    <div class = "header">
        <?php require('navbar.php'); ?>
    </div>

    <div class="login-card">
        <img src="images/sample.png " class="img-circle" alt="Cinque Terre" width="200" height="186">
        <p class="profile-name-card"> </p>
        <form class="form-signin" action="login.php" method="POST">
            <?php include('errors.php') ?>

            <span class="reauth-email"> </span>
            

            <input class="form-control" type="text" required="" placeholder="username" name="username" autofocus="" id="username">
            <input class="form-control" type="password" required="" placeholder="Password" name="password" id="password">
            <div class="checkbox">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me</label>
                </div>
            </div>
            <button style="background-color: #464646; color: grey;  " type="submit" name="login">Login</button>
        </form><a href="#" class="forgot-password">Forgot your password?</a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!--<div class="footer">
        <?php require('footer.php'); ?>
    </div>-->
</body>

</html>