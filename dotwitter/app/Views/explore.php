<?php

$title = 'Explore / dotwitter';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
        echo $title; ?></title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/favicon32x.png" type="image/png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700;800;900&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
<div class="container left-sidebar-container">
    <div class="row explore-row">

        <!--Left sidebar-->
        <div class="left-sidebar col col-lg-3">
            <img src="https://cdn.iconscout.com/icon/free/png-256/free-twitter-241-721979.png"
                 width="28.4" height="23.1"
                 class="img-fluid" alt="...">
            <div>
                <img src="/images/explore-icon.png" alt="..." class="img-fluid" width="28.25" height="28.25">
                <span>Explore</span>
            </div>
            <div>
                <img src="/images/settings-icon.png" alt="..." class="img-fluid" width="28" height="28">
                <span>Settings</span>
            </div>
        </div>

        <!--Tweet feed-->
        <div class="col col-lg-5 tweet-feed-column">
            <div class="tweet-feed-header">
                <span>Explore</span>
                <img src="/images/settings-icon.png" alt="..." width="16" height="16">
            </div>
        </div>

        <!--Right sidebar-->
        <div class="col col-lg-4 right-sidebar">
            <span class="right-sidebar-question">New to dotwitter?</span>
            <button class="SignUp-btn">Create account</button>
            <br>
            <div class="SignUp-agreement">
                <span> By signing up, you are signing an <a
                            style="cursor: pointer; color: rgb(29, 155, 240); text-decoration: none;"
                            href="#">Agreement</a>, that you are not stuffy or nitpicker person</span>
            </div>
            <div class="or">
                <hr>
                <span class="or-span">or</span>
                <hr>
                <br>
            </div>
            <input type="text" id="username" minlength="6" maxlength="50" placeholder="Username"
                   onfocus="" onblur="this.placeholder">
            <input type="password" id="password" minlength="6" maxlength="50" placeholder="Password"
                   onfocus="" onblur="this.placeholder">
            <button class="logIn-btn">Log In</button>
        </div>

    </div>
</div>
</body>
</html>
