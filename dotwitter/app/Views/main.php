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
<div class="grid-container container-fluid">
    <div class="row main-page-row">
        <!--BIRD SIDE-->
        <div class="col-lg-6 main-page-columns">
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
        </div>
        <!--LOGIN SIDE-->
        <div class="col-lg-6 main-page-columns">
            <section class="loginSide">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="https://cdn.iconscout.com/icon/free/png-256/free-twitter-241-721979.png"
                                 height="34.2"
                                 width="42.6" class="img-fluid" alt="...">
                            <h1 class="loginSide-h1">Happening now</h1>
                            <h2 class="loginSide-h2">Join dotwitter today</h2>
                            <div class="loginSide-functionality">
                                <input type="text" id="username" minlength="8" maxlength="50" placeholder="Username"
                                       onfocus="" onblur="this.placeholder">
                                <input type="password" id="password" minlength="8" maxlength="50" placeholder="Password"
                                       onfocus="" onblur="this.placeholder">
                                <button class="logIn-btn">Log In</button>
                                <div class="or">
                                    <hr>
                                    <span class="or-span">or</span>
                                    <hr>
                                    <br>
                                </div>
                                <div class="container-fluid">
                                    <div class="SignUp-btn-box row">
                                        <div class="col-lg-6">
                                            <span class="SignUp-question">Don't have an account?</span>
                                            <button class="SignUp-btn modal-btn" data-bs-target="#modal-step1"
                                                    data-bs-toggle="modal">Create account
                                            </button>
                                            <div class="SignUp-agreement">
                                                <span> By signing up, you are signing an <a
                                                            style="cursor: pointer; color: rgb(29, 155, 240); text-decoration: none;"
                                                            href="#">Agreement</a>, that you are not stuffy or nitpicker person</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="SignUp-question">Explore without registration?</span>
                                            <a href="http://45.9.41.41/explore">
                                                <button class="SignUp-btn">Explore</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <footer>
                                <div>
                                    <a class="Footer-spans"
                                       href="https://coda.io/d/dotwitter_dCS56yYS_aJ/General-Description_suy5I#_luqY_">About</a>
                                    <span class="Footer-spans">Agreement</span>
                                    <a class="Footer-spans" href="https://dotwrk.com/">© 2023 .wrk</a>
                                </div>
                            </footer>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>
<!--SignUp Modal Window-->
<!--Step-1-->
<div class="modal fade" id="modal-step1" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-step1">
        <div class="modal-content modal-step1_content">
            <div class="modal-header modal-step1_header">
                <svg class="modal-closer" width="24" height="24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41L17.59 5Z"
                          fill="black"/>
                </svg>
                <h2 class="modal-h2">Step 1 of 2</h2>
            </div>
            <div class="modal-body modal-step1-body">
                <h1 class="modal-h1">Create your account</h1>
                <div class="modal-name_box">
                    <div class="modal-name_box2">
                            <input type="text" class="name-input" minlength="6" maxlength="50" placeholder="Name">
                    </div>
                </div>
                <div class="modal-email_box">
                    <div class="modal-email_box2">
                            <input type="email" class="email-input" minlength="6" maxlength="70" placeholder="Email">
                    </div>
                </div>
                <span class="DOBPhrase">Date of birth</span>
                <span class="modal-warning">This will not be shown publicly. Confirm your own age, even if this account is for a business, a pet, or something else.</span>
                <div class="modal_date-pickers">
                    <div class="month-picker">
                        <label for="">Month</label>
                        <select name="" id=""></select>
                    </div>
                    <div class="day-picker">
                        <label for="">Day</label>
                        <select name="" id=""></select>
                    </div>
                    <div class="year-picker">
                        <label for="">Year</label>
                        <select name="" id=""></select>
                    </div>
                </div>
            </div>
            <div class="modal-footer modal-step1_footer">
                <button class="modal-next-btn" data-bs-target="#modal-step2" data-bs-toggle="modal">Next</button>
            </div>
        </div>
    </div>
</div>
<!--Step-2-->
<div class="modal fade" id="modal-step2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-step2_content">
            <div class="modal-header modal-step2_header">
                <svg class="modal-returner"></svg>
                <h2 class="modal-h2">Step 2 of 2</h2>
            </div>
            <div class="modal-body modal-step2-body">
                <h1 class="modal-h1">You'll need a password</h1>
                <span class="modal-warning">Make sure it's 8 characters or more</span>
                <input type="password" id="password-creator" minlength="8" maxlength="50" placeholder="Password"
                       onfocus="" onblur="this.placeholder">
            </div>
            <div class="modal-footer modal-step2_footer">
                <button class="modal-next-btn" data-bs-target="#modal-final" data-bs-toggle="modal">Next</button>
            </div>
        </div>
    </div>
</div>
<!--Final-step-->
<div class="modal fade" id="modal-final" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-final_content">
            <div class="modal-header modal-final_header">
                <svg class="modal-closer"></svg>
            </div>
            <div class="modal-body modal-final_body">
                <h1 class="modal-h1">Account successfully created!</h1>
            </div>
            <div class="modal-footer modal-final_footer">
                <button class="modal-final-btn">To the profile page!</button>
            </div>
        </div>
    </div>
</div>

</body>

</html>