<div class="prosuct">
    <div class="img_wrapper">
        <a href="{{ route('product_page', $item['slug']) }}">
            <img src="{{ Storage::url('products/'.$item['img'])}}" alt="{{ $item['title'] }}">
        </a>
    </div>

    <div class="info">
        <h2>{{ $item['title'] }}</h2>
        <p>{!! $item['short_description'] !!}</p>

    </div>

    <a class="more_btn button" href="{{ route('product_page', $item['slug']) }}">Подробнее</a>
    <product-questions
        title="{{ $item['title'] }}"
        img="{{ Storage::url('products/'.$item['img'])}}"
        rout="{{ route('send_consultation') }}"
    ></product-questions>

</div>
