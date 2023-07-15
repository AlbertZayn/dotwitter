<?php

$title = 'Main / dotwitter';
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<div class="grid-container">
    <section class="birdSide">
        <div class="birdSide-container">
            <img src="/images/birdSide.png" class="img-fluid birdSide-bg-img" alt="#">
            <svg class="img-fluid birdSide-fr-img" xmlns="http://www.w3.org/2000/svg" width="359" height="292"
                 viewBox="0 0 512 512">
                <style>svg {
                        fill: #ffffff
                    }</style>
                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
            </svg>
        </div>
    </section>
    <section class="loginSide">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-twitter-241-721979.png" height="34.2"
                         width="42.6" class="img-fluid" alt="...">
                    <h1>Happening now</h1>
                    <h2>Join dotwitter today</h2>
                    <div class="loginSide-functionality">
                        <input type="text" id="username" maxlength="50" placeholder="  Username" onfocus="" onblur="this.placeholder">
                        <input type="password" id="password" ondragstart="" placeholder="  Password" onfocus="" onblur="this.placeholder">
                        <button class="logIn-btn">Log In</button>
                        <div class="or">
                            <hr>
                            <span class="or-span">or</span>
                            <hr>
                            <br>
                        </div>
                        <div class="SignUp-question">
                            <span>Don't have an account?</span>
                            <span>Want to explore without registration?</span>
                        </div>
                        <div class="SignUp-btn-box">
                            <button class="SignUp-btn">Create account</button>
                            <button class="SignUp-btn">Explore</button>
                        </div>
                    </div>
                    <footer>
                        <div>

                        </div>
                    </footer>
                </div>
            </div>
    </section>
</div>
</body>

</html>