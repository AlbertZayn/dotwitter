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
<div class="container explore-container">
    <div class="row explore-row">

        <!-- LEFT SIDEBAR -->
        <div class="left-sidebar col col-lg-3">
            <a href="#" class="left-sidebar-anchor">
                <img class="sidebar-icon img-fluid"
                     src="https://cdn.iconscout.com/icon/free/png-256/free-twitter-241-721979.png"
                     width="28.4" height="23.1"
                     alt="...">
            </a>
            <a href="#" class="left-sidebar-anchor">
                <div>
                    <img class="sidebar-icon img-fluid" src="/images/explore-icon.png" alt="..." width="29.25"
                         height="29.25">
                    <span>Explore</span>
                </div>
            </a>
            <a href="#" class="left-sidebar-anchor">
                <div>
                    <img class="sidebar-icon img-fluid" src="/images/settings-icon.png" alt="..." width="25"
                         height="25">
                    <span>Settings</span>
                </div>
            </a>
        </div>

        <!--TWEET FEED -->
        <div class="col col-lg-5 tweet-feed-column">
            <div class="tweet-feed-header">
                <span>Explore</span>
                <a href="#" class="sidebar-icon-anchor">
                    <img class="sidebar-icon" src="/images/settings-icon.png" alt="..." width="16" height="16">
                </a>
            </div>
        </div>

        <!--RIGHT SIDEBAR -->
        <div class="col col-lg-4 right-sidebar">
            <div class="right-sidebar-functionality">
                <span class="right-sidebar-question">New to dotwitter?</span>
                <span class="SignUp-agreement">Sign up now to get your own personalized timeline</span>
                <button class="SignUp-btn right-sidebar-SignUp-btn">Create account</button>
                <div class="SignUp-agreement ">
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
                    <input type="text" class="right-sidebar-logIn-functionality" minlength="6" maxlength="50" placeholder="Username"
                           onfocus="" onblur="this.placeholder">
                    <input type="password" class="right-sidebar-logIn-functionality"  minlength="6" maxlength="50" placeholder="Password"
                           onfocus="" onblur="this.placeholder">
                    <button class="logIn-btn">Log In</button>
            </div>
        </div>

    </div>
</div>
</body>
</html>
