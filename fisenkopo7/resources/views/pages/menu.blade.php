@extends('layouts.app', ['title' => 'Полное меню — Химик, Абакан'])

@section('content')
  <section class="section" id="menu">
    <div class="wrap">
      <div class="section-head">
        <div>
          <div class="eyebrow">Полная карта вкусов</div>
          <h2>Всё меню<br>«Химика»</h2>
        </div>
        <p>Кофейная классика, авторские напитки, холодные миксы, смузи, лимонады и завтраки.</p>
      </div>
      
      {{-- Табы-фильтры. Используем route() с параметром category --}}
      <div class="tabs">
        <a href="{{ route('menu', ['category' => 'all']) }}" class="tab {{ $category == 'all' ? 'active' : '' }}">Всё меню</a>
        <a href="{{ route('menu', ['category' => 'coffee']) }}" class="tab {{ $category == 'coffee' ? 'active' : '' }}">Кофе</a>
        <a href="{{ route('menu', ['category' => 'cold']) }}" class="tab {{ $category == 'cold' ? 'active' : '' }}">Холодные напитки</a>
        <a href="{{ route('menu', ['category' => 'smoothie']) }}" class="tab {{ $category == 'smoothie' ? 'active' : '' }}">Смузи и лимонады</a>
        <a href="{{ route('menu', ['category' => 'breakfast']) }}" class="tab {{ $category == 'breakfast' ? 'active' : '' }}">Завтраки</a>
      </div>

      <div class="menu-grid" id="menuGrid">
        @forelse($items as $item)
          <article class="dish" data-category="{{ $item->category }}">
            <div class="dish-top">
              <span aria-hidden="true" class="dish-code">{{ $item->code }}</span>
              <span class="price">{{ $item->price }}</span>
            </div>
            <h3>{{ $item->name }}</h3>
            <p>{{ $item->description }}</p>
            <span class="tag">{{ $item->tag }}</span>
          </article>
        @empty
          <p style="grid-column: 1/-1; text-align: center; color: #888;">В данной категории пока нет позиций.</p>
        @endforelse
      </div>

      {{-- Стандартная пагинация Laravel (работает из коробки) --}}
      @if($items->hasPages())
        <div class="pagination-wrap" style="margin-top: 30px;">
          {{ $items->links() }}
        </div>
      @endif
      
      <div class="hero-actions" style="justify-content:center; margin-top:28px">
        <a class="btn ghost" href="{{ route('home') }}">← На главную</a>
      </div>
    </div>
  </section>
@endsection