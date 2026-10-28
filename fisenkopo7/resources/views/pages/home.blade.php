@extends('layouts.app', ['title' => 'Химик — кофейня в Абакане'])

@section('content')
  <!-- СЕКЦИЯ HERO (без изменений) -->
  <section class="hero" id="home">
    <div class="wrap hero-inner">
      <div>
        <div class="eyebrow">Кофейня с характером</div>
        <h1>КОФЕ.<br><span>ХИМИЯ.</span><br>ХИМИК.</h1>
        <p>Смешиваем любимые вкусы, экспериментируем с рецептами и создаём твои маленькие поводы для радости.</p>
        <div class="hero-actions">
          <a class="btn" href="{{ route('menu') }}">Смотреть всё меню</a>
          <a class="btn ghost" href="{{ route('home', ['#addresses']) }}">Найти кофейню</a>
        </div>
      </div>
      <div class="hero-art">
        <div class="orb">
          <img class="hero-logo" src="{{ asset('images/khimik-logo.png') }}" alt="Логотип кофейни Химик">
          <i class="orbit"></i><i class="orbit two"></i>
        </div>
        <div class="hero-note"><strong>ТВОЯ ФОРМУЛА УТРА</strong><br>кофе · завтраки · хорошее настроение</div>
      </div>
    </div>
  </section>

  <div class="ticker">
    <span>☼ СВАРЕНО С ЛЮБОВЬЮ</span>☼ <span>КОФЕЙНЯ ХИМИК</span>☼ <span>АБАКАН</span>☼ <span>ТВОЯ ФОРМУЛА ВКУСА</span>☼ <span>КОФЕЙНЯ ХИМИК</span>
  </div>

  <!-- СЕКЦИЯ МЕНЮ НА ГЛАВНОЙ (ОБНОВЛЕНА) -->
  <section class="section" id="menu">
    <div class="wrap">
      <div class="section-head">
        <div>
          <div class="eyebrow">Лаборатория вкуса</div>
          <h2>Главные<br>хиты</h2>
        </div>
        <p>Любимые напитки и завтраки, с которых приятно начать знакомство с «Химиком».</p>
      </div>
      
      <div class="menu-grid">
        {{-- Цикл для вывода 6 первых записей из базы данных --}}
        @foreach($hits as $item)
          <article class="dish home-dish" data-category="{{ $item->category }}">
            <div class="dish-top">
              <span class="dish-code">{{ $item->code }}</span>
              <span class="price">{{ $item->price }}</span>
            </div>
            <h3>{{ $item->name }}</h3>
            <p>{{ $item->description }}</p>
            <span class="tag">{{ $item->tag }}</span>
          </article>
        @endforeach
      </div>
      
      <div class="hero-actions" style="justify-content:center; margin-top:28px">
        <a class="btn" href="{{ route('menu') }}">Перейти ко всему меню </a>
      </div>
    </div>
  </section>

  <!-- СЕКЦИЯ АКЦИИ (без изменений) -->
  <section class="section" id="promo">
    <div class="wrap">
      <div class="promo">
        <div>
          <div class="eyebrow">Время для сладкого</div>
          <h2>СЛАДКОЕ<br>ВЫГОДНЕЕ.</h2>
          <p><strong>−20% на десерты после 18:00</strong></p>
          <p>Заглядывай за любимым десертом к вечернему кофе. Акция была указана в материалах кофейни — уточни актуальность и участвующие адреса перед визитом.</p>
          <a class="btn" href="/#addresses">Выбрать кофейню</a>
        </div>
        <div class="promo-figure">- 20%</div>
      </div>
    </div>
  </section>

  <!-- СЕКЦИЯ АДРЕСА (без изменений, только обновлены ссылки) -->
  <section class="section" id="addresses">
    <div class="wrap">
      <div class="section-head">
        <div>
          <div class="eyebrow">Мы рядом</div>
          <h2>Найди свой<br>«Химик»</h2>
        </div>
        <p>Выбирай удобный адрес, звони нам или открывай маршрут в картах.</p>
      </div>
      <div class="address-grid">
        <!-- Адреса остаются без изменений, как в вашем исходном HTML -->
        <article class="address">
          <div class="address-head"><h3>Пушкина, 58</h3><span class="pin">⌖</span></div>
          <p class="phone"><a href="tel:+79135413429">8 913 541-34-29</a></p>
          <p class="hours">Пн–Пт: 7:30–21:00<br>Сб–Вс: 8:00–21:00</p>
          <div class="address-actions">
            <a class="btn small-btn" href="tel:+79135413429">Позвонить</a>
            <a class="btn ghost small-btn" target="_blank" rel="noopener" href="https://yandex.ru/maps/?text=Абакан%20Пушкина%2058">Маршрут</a>
          </div>
        </article>
        <article class="address"><div class="address-head"><h3>Пушкина, 184</h3><span class="pin">⌖</span></div><p class="phone"><a href="tel:+79135413497">8 913 541-34-97</a></p><p class="hours">Ежедневно: 7:30–21:00</p><div class="address-actions"><a class="btn small-btn" href="tel:+79135413497">Позвонить</a><a class="btn ghost small-btn" target="_blank" rel="noopener" href="https://yandex.ru/maps/?text=Абакан%20Пушкина%20184">Маршрут</a></div></article>
<article class="address"><div class="address-head"><h3>Ленина, 71</h3><span class="pin">⌖</span></div><p class="phone"><a href="tel:+79134463429">8 913 446-34-29</a></p><p class="hours">Пн–Пт: 7:30–21:00<br>Сб–Вс: 8:00–21:00</p><div class="address-actions"><a class="btn small-btn" href="tel:+79134463429">Позвонить</a><a class="btn ghost small-btn" target="_blank" rel="noopener" href="https://yandex.ru/maps/?text=Абакан%20Ленина%2071">Маршрут</a></div></article>
<article class="address"><div class="address-head"><h3>Хакасская, 71</h3><span class="pin">⌖</span></div><p class="phone"><a href="tel:+79134443429">8 913 444-34-29</a></p><p class="hours">Пн–Пт: 7:30–21:00<br>Сб–Вс: 8:00–21:00</p><div class="address-actions"><a class="btn small-btn" href="tel:+79134443429">Позвонить</a><a class="btn ghost small-btn" target="_blank" rel="noopener" href="https://yandex.ru/maps/?text=Абакан%20Хакасская%2071">Маршрут</a></div></article>
</div>
    </div>
  </section>

  <!-- СЕКЦИЯ О НАС (без изменений) -->
  <section class="section" id="about">
    <div class="wrap about-grid">
      <div class="about-card">
        <div class="big">H₂O<br>+ Кофе</div>
        <p>Немного науки. Много вкуса. И всегда — хороший повод остановиться на минуту.</p>
      </div>
      <div class="about-copy">
        <div class="eyebrow">Не просто кофе</div>
        <h2>У каждого дня<br>своя формула</h2>
        <p>«Химик» — кофейня для тех, кто любит открывать новое и возвращаться к любимому. Забегай на быстрый кофе, встречайся с друзьями или начинай день с завтрака.</p>
        <div class="features">
          <div class="feature"><b>Кофе</b><span>Классика и авторские рецепты</span></div>
          <div class="feature"><b>Завтраки</b><span>Каждый день с утра</span></div>
          <div class="feature"><b>Эксперименты</b><span>Необычные вкусовые сочетания</span></div>
          <div class="feature"><b>4 адреса</b><span>Выбирай удобную локацию</span></div>
        </div>
      </div>
    </div>
  </section>
@endsection