<!DOCTYPE html>
<html lang="en">

<head>
    <title>Поликлинника</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</head>

<body>
    <header>
        <div class="header-info">
            <div class="burger">
                <div class="burger-line"></div>
                <div class="burger-line"></div>
                <div class="burger-line"></div>
                <div class="burger-line"></div>
            </div>
            <div class="blockOne">
                <img src="/img/logo1.png" class="logo" alt="logo1">
                <span><img src="/img/icon4.png" alt="icon4"> Ростов-на-Дону<br> ул.Ленина, 2Б</span>
            </div>
            <div class="blockTwo">
                <span><img src="/img/icon2.png" class="hedaer-icon" alt="icon2">+7(863) 000 00 00</span>
                <p class="Button">Записаться на прием</p>
            </div>
        </div>
        <nav class="nav">
            <a href="#">О клинике</a>
            <a href="#">Услуги</a>
            <a href="#">Специалисты</a>
            <a href="#">Цены</a>
            <a href="#">Контакты</a>
            <p class="Button">Записаться на прием</p>
        </nav>
    </header>
    <main>
        <section class="main-banner">
            <div class="text-block">
                <h1>Многопрофильная <br>клиника для детей <br>и взрослых</h1>
                <p>Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua</p>
            </div>
            <img src="/img/img2.png" alt="">
        </section>
        <section class="slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    include("viev.php");
                    getCheckUp($connect); ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <div class="popup">
            <form action="" method="post" class="popup-form">
                <p class="close">&#10005</p>
                <p>Ваше имя</p>
                <input type="text" name="name" placeholder="Александр" required>
                <p>Ваш номер телефона</p>
                <input type="tel" id="phone" name="phone" placeholder="+7 (___) ___-__-__" maxlength="18"  required>
                <input type="submit" name="submit" class = 'ButtonTwo' value="Записаться">
            </form>
        </div>
    </main>
    <footer>
        <img src="/img/logo2.png" alt="icon2" class="logo">
        <nav>
            <a href="">О клинике</a>
            <a href="">Услуги</a>
            <a href="">Специалисты</a>
            <a href="">Цены</a>
            <a href="">Контакты</a>
        </nav>
        <div class="icon-block">
            <img src="/img/icon1.png" alt="" class="icon">
            <img src="/img/icon2.png" alt="" class="icon">
            <img src="/img/icon3.png" alt="" class="icon">
        </div>
    </footer>
</body>
<script src="script.js"></script>
</html>
<?php
if (isset($_POST['submit'])) {
    $message = "Имя: $_POST[name], Телефон: $_POST[phone]";
    $to = "rbru-metrika@yandex.ru";
    $subj = "Новая заявка";
    $headers = "From: example@example.com";
    mail( $to, $subj, $message, $headers);
}
?>