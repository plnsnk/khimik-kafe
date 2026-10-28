<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#171717" />
     <link rel="icon" type="image/webp" href="{{ asset('images/khimik-logo.png') }}">
  <title>{{ $title ?? 'Химик — кофейня в Абакане' }}</title>
  
  <!-- Подключение вашего CSS файла из папки public -->
  <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
  
  <!-- Стили для красивой пагинации Laravel (в темной теме) -->
  <style>
    .pagination-wrap nav { display: flex; justify-content: center; margin: 30px 0; }
    .pagination-wrap ul { display: flex; gap: 8px; list-style: none; padding: 0; margin: 0; }
    .pagination-wrap ul li a, 
    .pagination-wrap ul li span { 
      display: inline-block; padding: 8px 14px; border: 1px solid #333; border-radius: 6px; 
      color: #fff; text-decoration: none; background: #171717; transition: 0.2s; font-size: 14px;
    }
    .pagination-wrap ul li.active span { background: #fff; color: #171717; border-color: #fff; font-weight: bold; }
    .pagination-wrap ul li.disabled span { opacity: 0.4; cursor: not-allowed; border-color: #222; }
    .pagination-wrap ul li a:hover { background: #333; border-color: #555; }
  </style>

  @stack('styles')
</head>

<body>
  <header class="topbar">
    <div class="wrap nav">
      <a class="brand" href="{{ route('home') }}" aria-label="Химик — главная">
        <span class="brand-mark">
          <img class="brand-logo" src="{{ asset('images/khimik-logo.png') }}" alt="Логотип Химик">
        </span>
        <span>ХИМИК<small>КОФЕЙНЯ · АБАКАН</small></span>
      </a>
      
      <nav class="links">
        <a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Главная</a>
        <a href="{{ route('menu') }}" class="{{ Route::currentRouteName() == 'menu' ? 'active' : '' }}">Меню</a>
        <a href="{{ route('home') }}#promo">Акции</a>
        <a href="{{ route('home') }}#addresses">Адреса</a>
        <a href="{{ route('home') }}#about">О нас</a>
      </nav>

      {{-- ДИНАМИЧЕСКАЯ КНОПКА: меняется в зависимости от страницы --}}
      @if(Route::currentRouteName() == 'home')
        <a class="nav-cta" href="{{ route('menu') }}">Полное меню</a>
      @else
        <a class="nav-cta" href="{{ route('home') }}">На главную</a>
      @endif

      <button class="menu-toggle" id="menuToggle" aria-label="Открыть меню">☰</button>
    </div>
    
    <div class="wrap mobile-links" id="mobileLinks">
      <a href="{{ route('home') }}">Главная</a>
      <a href="{{ route('menu') }}">Меню</a>
      <a href="{{ route('home') }}#promo">Акции</a>
      <a href="{{ route('home') }}#addresses">Адреса</a>
      <a href="{{ route('home') }}#about">О нас</a>
    </div>
  </header>

  <main>
    {{-- Сюда будет подставляться контент из страниц home.blade.php и menu.blade.php --}}
    @yield('content')
  </main>

  <footer class="footer" id="site-footer">
    <div class="wrap footer-layout">
      <!-- Колонка 1: Бренд и Соцсети -->
      <div class="footer-brand-col">
        <a class="brand" href="{{ route('home') }}" aria-label="Химик — на главную">
          <span class="brand-mark">
            <img class="brand-logo" src="{{ asset('images/khimik-logo.png') }}" alt="Логотип Химик">
          </span>
          <span>ХИМИК<small>КОФЕЙНЯ · АБАКАН</small></span>
        </a>
        <p class="footer-slogan">Немного науки. Много вкуса.<br>Твоя формула идеального утра.</p>
        <div class="footer-socials">
          <a href="https://m.vk.ru/himik_19" target="_blank" rel="noopener noreferrer" class="social-btn vk">
            <span>VK</span>
            <small>Мы ВКонтакте</small>
          </a>
        </div>
      </div>

      <!-- Колонка 2: Навигация -->
      <div class="footer-column">
        <h3>Навигация</h3>
        <nav class="footer-nav">
          <a href="{{ route('home') }}">Главная</a>
          <a href="{{ route('menu') }}">Полное меню</a>
          <a href="{{ route('home') }}#promo">Акции и скидки</a>
          <a href="{{ route('home') }}#about">О кофейне</a>
          <a href="{{ route('home') }}#addresses">Все адреса</a>
        </nav>
      </div>

      <!-- Колонка 3: Контакты и Время работы -->
      <div class="footer-column">
        <h3>Контакты</h3>
        <div class="contact-block">
          <a href="tel:+79135413429" class="footer-phone">+7 (913) 541-34-29</a>
          <p class="footer-hours">Ежедневно: 7:30 – 21:00</p>
          <a href="https://yandex.ru/maps/?text=Абакан%20Пушкина%2058" target="_blank" rel="noopener" class="map-link">
            <span>Открыть на карте ↗</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Нижняя полоса -->
    <div class="wrap footer-bottom">
      <span>© {{ date('Y') }} Кофейня «Химик». Все права защищены.</span>
      <div class="footer-legal">
        <a href="#">Политика конфиденциальности</a>
        <span class="divider">·</span>
        <span>С любовью к кофе и экспериментам ☕</span>
      </div>
    </div>
  </footer>

  <script>
    // Скрипт для мобильного меню
    const toggle = document.getElementById('menuToggle');
    const mobile = document.getElementById('mobileLinks');
    
    if (toggle && mobile) {
      toggle.addEventListener('click', () => {
        mobile.classList.toggle('open');
        toggle.textContent = mobile.classList.contains('open') ? '✕' : '☰';
      });
      
      mobile.querySelectorAll('a').forEach(a => {
        a.addEventListener('click', () => {
          mobile.classList.remove('open');
          toggle.textContent = '☰';
        });
      });
    }
  </script>
  
  @stack('scripts')
</body>
</html>