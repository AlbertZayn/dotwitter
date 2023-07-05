<?php
$title = 'Explore / dotwitter';
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- CSS -->
    <link rel="stylesheet" href="/public/styles.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/public/images/favicon32x.png" type="image/png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700;800;900&display=swap" rel="stylesheet">
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Work Sans', sans-serif;
    }

    .grid-container {
        display: grid;
        grid-template-columns: 1.175fr 1fr;
        height: 100vh;
    }

    .birdSide {
        background-color: #1DA1F2;
    }

    .birdSide-bg-img {
        height: 100%;
        width: 100%;
        z-index: -1;
    }

    .loginSide {
        padding: 20px;
    }

    .col {
        width: 100%;
        height: 661px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    h1 {
        font-size: 64px;
        font-weight: 800;
        letter-spacing: 2.2px;
        margin-bottom: 48px;
        margin-top: 48px;
    }

    h2 {
        font-size: 32px;
        font-weight: 700;
        font-stretch: 200%;
        margin-bottom: 32px;
    }

    #username {
        height: 44px;
        width: 300px;
        border-radius: 24px;
        margin-bottom: 20px;
        border-style: solid;
        border-color: rgb(207, 217, 222);
    }

    #password {
        height: 44px;
        width: 300px;
        border-radius: 24px;
        border-style: solid;
        border-color: rgb(207, 217, 222);
    }

    .or {
        display: flex;
        flex-direction: row;
        justify-content: left;
        width: 280px;
        margin: 4px 0 4px;
        padding: 0 0 0 20px;
    }

    hr {
        width: 134px;
        color: rgb(185, 202, 211)
    }



    .signUp {
        width: 300px;
        border-radius: 24px;
        background-color: rgb(29, 155, 240);
        color: #fff;
        letter-spacing: -0.5px;
        margin-bottom: 8px;
        height: 40px;
        border-style: none;
        font-size: 16px;
        font-weight: 700;
     }

    .signUp:hover {
        background-color: rgb(26, 140, 216);
    }

    .logIn-bottom {
        position: relative;
        display: inline-block;
        padding: 40px 0 20px;
        font-weight: 700;
    }

    .logIn-btn {
        width: 300px;
        border-radius: 24px;
        border-style: double;
        border-color: rgb(223, 230, 234);
        background-color: #fff;
        color: rgb(29, 155, 240);
        font-weight: 700;
        letter-spacing: -1px;
        margin-bottom: 8px;
        height: 40px;
        font-size: 17px;
        letter-spacing: -0.5px;
    }

</style>

</head>

<body>
<div class="grid-container">
    <section class="birdSide">
        <img src="/public/images/birdSide.png" class="img-fluid birdSide-bg-img" alt="#">
    </section>
    <section class="loginSide">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="/public/images/favicon96x.png" height="96" width="96" class="img-fluid" alt="...">
                    <h1>Happening now</h1>
                    <h2>Join Twitter today</h2>
                    <input type="text" id="username" placeholder="  Username">
                    <input type="password" id="password" placeholder="  Password">
                    <div class="or">
                        <hr>
                        <span>or</span>
                        <hr>
                        <br>
                    </div>
                    <button class="signUp">Create account</button>
                    <div class="logIn-bottom">
                        <span>Already have an account?</span><br>
                        <button class="logIn-btn">Log in</button>
                    </div>
                </div>
            </div>
    </section>
</div>
</body>

</html>