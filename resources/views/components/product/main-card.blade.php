<div class="products-item">
    <img src="{{ Storage::url($item['img'])}}" alt="{{ $item['title'] }}" class="products-item__img">
    <span class="products-item__text">
        <span class="products-item__caption">{{ $item['title'] }}</span>
        <span class="products-item__description">
            {!! $item['short_description'] !!}
        </span>
        <a class="products-item__more" href="{{ route('product_page', $item['slug']) }}">Подробнее...</a>
    </span>
</div>
