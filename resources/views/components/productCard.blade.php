@props(['product'])
@php
    $class = $product['amount'] == 0 ? 'null' : '';
@endphp
<li class='card_item {{ $class }}'>
    <h2 class='card-title'>{{ $product['name'] }}</h2>
    <p class='card-price'>Цена: {{ $product['cost']}} руб.</p>
    @if ($product['amount'] == 0)
        <p class='card-amount'>Нет в наличии</p>
    @endif
</li>
