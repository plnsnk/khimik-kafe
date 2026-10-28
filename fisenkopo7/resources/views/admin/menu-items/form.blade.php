@extends('layouts.app', ['title' => $item->exists ? 'Редактировать напиток' : 'Добавить напиток'])

@section('content')
<section class="section">
    <div class="wrap" style="max-width: 600px;">
        <div class="section-head">
            <div>
                <div class="eyebrow">Админ-панель</div>
                <h2>{{ $item->exists ? 'Редактирование' : 'Новый напиток' }}</h2>
            </div>
        </div>

        <form action="{{ $item->exists ? route('admin.menu-items.update', $item) : route('admin.menu-items.store') }}" method="POST" style="background: var(--panel); padding: 30px; border-radius: var(--radius); border: 1px solid var(--line);">
            @csrf
            @if($item->exists)
                @method('PUT')
            @endif

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; color: var(--muted); font-size: 12px; margin-bottom: 6px;">Код (напр. Es, K)</label>
                    <input type="text" name="code" value="{{ old('code', $item->code) }}" required 
                           style="width: 100%; padding: 12px; background: var(--bg); border: 1px solid var(--line); border-radius: 8px; color: var(--cream);">
                </div>
                <div>
                    <label style="display: block; color: var(--muted); font-size: 12px; margin-bottom: 6px;">Цена (напр. 120 ₽)</label>
                    <input type="text" name="price" value="{{ old('price', $item->price) }}" required 
                           style="width: 100%; padding: 12px; background: var(--bg); border: 1px solid var(--line); border-radius: 8px; color: var(--cream);">
                </div>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; color: var(--muted); font-size: 12px; margin-bottom: 6px;">Название</label>
                <input type="text" name="name" value="{{ old('name', $item->name) }}" required 
                       style="width: 100%; padding: 12px; background: var(--bg); border: 1px solid var(--line); border-radius: 8px; color: var(--cream);">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; color: var(--muted); font-size: 12px; margin-bottom: 6px;">Описание</label>
                <textarea name="description" rows="3" 
                          style="width: 100%; padding: 12px; background: var(--bg); border: 1px solid var(--line); border-radius: 8px; color: var(--cream);">{{ old('description', $item->description) }}</textarea>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; color: var(--muted); font-size: 12px; margin-bottom: 6px;">Категория</label>
                    <select name="category" required 
                            style="width: 100%; padding: 12px; background: var(--bg); border: 1px solid var(--line); border-radius: 8px; color: var(--cream);">
                        <option value="coffee" {{ old('category', $item->category) == 'coffee' ? 'selected' : '' }}>Кофе</option>
                        <option value="cold" {{ old('category', $item->category) == 'cold' ? 'selected' : '' }}>Холодные напитки</option>
                        <option value="smoothie" {{ old('category', $item->category) == 'smoothie' ? 'selected' : '' }}>Смузи и лимонады</option>
                        <option value="breakfast" {{ old('category', $item->category) == 'breakfast' ? 'selected' : '' }}>Завтраки</option>
                    </select>
                </div>
                <div>
                    <label style="display: block; color: var(--muted); font-size: 12px; margin-bottom: 6px;">Тег (напр. Классика)</label>
                    <input type="text" name="tag" value="{{ old('tag', $item->tag) }}" 
                           style="width: 100%; padding: 12px; background: var(--bg); border: 1px solid var(--line); border-radius: 8px; color: var(--cream);">
                </div>
            </div>

            <div style="margin-bottom: 30px; display: flex; align-items: center; gap: 10px;">
                <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $item->is_active) ? 'checked' : '' }}
                       style="width: 18px; height: 18px; accent-color: var(--yellow);">
                <label for="is_active" style="color: var(--cream); cursor: pointer;">Показывать на сайте (Активен)</label>
            </div>

            <div style="display: flex; gap: 12px;">
                <button type="submit" class="btn">Сохранить</button>
                <a href="{{ route('admin.menu-items.index') }}" class="btn ghost">Отмена</a>
            </div>
        </form>
    </div>
</section>
@endsection