<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>S & A — Wedding Invitation</title>
    <!-- Мета-теги для красивого отображения в Telegram и VK -->
<meta property="og:title" content="S & A — Wedding Invitation">
<meta property="og:description" content="Приглашаем вас разделить с нами этот особенный день!">
<meta property="og:image" content="https://wedding-as.site/image/hands.webp"> <!-- Укажите полный URL к вашей главной картинке -->
<meta property="og:url" content="https://wedding-as.site">
<meta property="og:type" content="website">
<meta name="theme-color" content="#f8f6f1">

    <!-- Шрифты -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Pinyon+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="shortcut icon" href="/image/icon.webp" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Montserrat:wght@300;400;500&family=Great+Vibes&display=swap" rel="stylesheet">
<link rel="preload" href="{{ asset('css/bootstrap/css/bootstrap.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="stylesheet" href="{{ asset('css/style2.css?v=1.0') }}">
</head>

<body>

<main class="invitation">
    <!-- Opening Animation -->
<div class="opening-screen" id="openingScreen">

    <div class="opening-photo">
    <picture>
        <source
            media="(max-width: 768px)"
            srcset="/image/wedding-opening-mobile.webp"
        >

        <img
            src="/image/wedding-opening-desktop.webp"
            alt="S & A"
        >
    </picture>
</div>

<div class="opening-content">
    <div class="opening-names">
        <span class="opening-letter-a">A</span>
        <span class="opening-ampersand">&</span>
        <span class="opening-letter-s">S</span>
    </div>

    <div class="opening-line"></div>

    <p>Our Wedding Day</p>
</div>
</div>

    <!-- Золотая рамка -->
    <div class="gold-border"></div>

    <!-- Декоративные цветы -->
    <div class="flowers flowers-left">
        <span>✿</span>
        <span>❀</span>
        <span>✽</span>
    </div>

    <div class="flowers flowers-right">
        <span>✿</span>
        <span>❀</span>
        <span>✽</span>
    </div>

    <!-- Фото -->
    <section class="hero">

        <img
            src="/image/hands.webp"
            alt="Wedding"
            class="couple-photo"
        >

        <div class="photo-overlay"></div>

    </section>

    <!-- Основной контент -->
    <section class="content">

       <div class="names">
    <div class="names-wrapper">
        <span class="letter letter-first">A</span>
        <span class="letter ampersand">&</span>
        <span class="letter letter-last">S</span>
    </div>
</div>
        <p class="subtitle">
            Please join us as we celebrate our marriage
        </p>

        <!-- Дата -->
        <div class="date">

            <div class="date-side">
                <span>OCTOBER</span>
            </div>

            <div class="date-center">
                <strong>10</strong>
                <span>2026</span>
            </div>

            <div class="date-side">
                <span>OCTOBER</span>
            </div>

        </div>

        <!-- Место -->
        <div class="details">

            <p>at 6 in the afternoon</p>

            <p>
               Xan Qızı
            </p>

        </div>

        <div class="reception">
            Reception to follow
        </div>

        <!-- Дополнительная кнопка -->
        <a href="#location" class="location-button">
            View location
        </a>

    </section>

    <!-- Нижняя часть -->
    <section class="bottom">

        <div class="ring-decoration ring-left"></div>
        <div class="ring-decoration ring-right"></div>

    </section>

</main>

<!-- Location -->

<section id="location" class="location-section">

    <h2>We can't wait to see you</h2>

    <p class="venue-name">
        Restaurant "Xan Qızı"
    </p>

    <p class="venue-address">
        Baku, Azerbaijan
    </p>

    <a
        href="https://2gis.ru/baku/search/Xan%20qızı"
        target="_blank"
        class="map-button"
    >
        Open in 2GIS
    </a>

</section>

<!-- Dress Code & Important -->
<section class="dresscode-section">

    <div class="section-line"></div>

    <h2>Dress Code</h2>

    <p class="dresscode-main">
        Your style, your choice
    </p>

    <p class="dresscode-text">
        There is no strict dress code - simply choose
        an outfit that makes you feel comfortable and beautiful.


        Our only request is <strong>please avoid wearing white.</strong>
    </p>

    <div class="important-note">

        <span class="important-title">Important</span>

        <p>
            Our celebration begins at 6:00 PM.


            Please arrive by 5:45 PM so you have enough time
            to settle in and enjoy every moment from the very beginning.
        </p>

    </div>

    <p class="closing-text">
        Most importantly, come with a happy heart
    </p>

    <div class="section-line"></div>

</section>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
<script src="{{ asset('js/script.js') }}" defer></script>
</body>
</html>
