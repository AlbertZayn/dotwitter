<?php
    $title = 'Explore / dotwitter';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/public/images/dotwitter-favicon.png" type="image/png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <!-- Верхняя панель навигации -->
        <nav>
            <ul>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Блог</a></li>
                <li><a href="#">Карьера</a></li>
                <!-- и другие пункты меню -->
            </ul>
        </nav>
    </header>

    <main>
        <!-- Блок с вводом данных для регистрации -->
        <section id="registration">
            <h1>Присоединяйтесь к Twitter!</h1>
            <form>
                <input type="text" name="name" placeholder="Имя">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Пароль">
                <button type="submit">Зарегистрироваться</button>
            </form>
        </section>

        <!-- Блок с описанием возможностей Twitter -->
        <section id="features">
            <h2>Узнайте, что происходит в мире прямо сейчас</h2>
            <p>Присоединяйтесь к Twitter, чтобы узнать, что происходит в мире и присоединиться к разговору.</p>
            <ul>
                <li>Следите за интересующими вас темами, людьми и организациями</li>
                <li>Получайте мгновенные обновления о важных событиях</li>
                <li>Выражайте свои мысли через твиты, фото и видео</li>
                <!-- и другие особенности Twitter -->
            </ul>
        </section>
    </main>

    <footer>
        <!-- Нижняя часть страницы с дополнительными ссылками и информацией -->
        <div>
            <ul>
                <li><a href="#">Правила и политика</a></li>
                <li><a href="#">Центр справки</a></li>
                <li><a href="#">О проекте</a></li>
                <!-- и другие ссылки -->
            </ul>
        </div>
    </footer>
</body>
</html>
