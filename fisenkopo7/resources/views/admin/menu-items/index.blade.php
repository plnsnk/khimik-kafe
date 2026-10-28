@extends('layouts.app', ['title' => 'Админ-панель: Меню'])

@section('content')
<section class="section">
    <div class="wrap">
        <div class="section-head">
            <div>
                <div class="eyebrow">Управление</div>
                <h2>Меню «Химика»</h2>
            </div>
            <a href="{{ route('admin.menu-items.create') }}" class="btn">+ Добавить напиток</a>
        </div>

        @if(session('success'))
            <div style="background: rgba(244, 210, 31, 0.1); border: 1px solid var(--yellow); color: var(--yellow); padding: 15px; border-radius: 12px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        <div style="background: var(--panel); border-radius: var(--radius); padding: 20px; overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; color: var(--cream);">
                <thead>
                    <tr style="border-bottom: 1px solid var(--line); text-align: left;">
                        <th style="padding: 12px;">Код</th>
                        <th style="padding: 12px;">Название</th>
                        <th style="padding: 12px;">Категория</th>
                        <th style="padding: 12px;">Цена</th>
                        <th style="padding: 12px;">Статус</th>
                        <th style="padding: 12px; text-align: right;">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <td style="padding: 12px; color: var(--yellow); font-weight: bold;">{{ $item->code }}</td>
                        <td style="padding: 12px;">{{ $item->name }}</td>
                        <td style="padding: 12px;">{{ $item->category }}</td>
                        <td style="padding: 12px;">{{ $item->price }}</td>
                        <td style="padding: 12px;">
                            <span style="color: {{ $item->is_active ? 'var(--yellow)' : '#888' }};">
                                {{ $item->is_active ? 'Активен' : 'Скрыт' }}
                            </span>
                        </td>
                        <td style="padding: 12px; text-align: right;">
                            <a href="{{ route('admin.menu-items.edit', $item) }}" class="btn ghost" style="padding: 6px 12px; font-size: 12px;">Изменить</a>
                            <form action="{{ route('admin.menu-items.destroy', $item) }}" method="POST" style="display: inline;" onsubmit="return confirm('Удалить этот напиток?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn ghost" style="padding: 6px 12px; font-size: 12px; border-color: #ff4444; color: #ff4444;">Удалить</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           <div class="pagination-wrap" style="margin-top: 20px;">
                {{ $items->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
</section>
@endsection