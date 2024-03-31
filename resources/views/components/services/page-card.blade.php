<div class="page_service_card">

    <div class="img_wrapper">
        <div class="img_wrapper">
            <a href="{{ route('service_page', $item['slug']) }}">
                <img src="{{ Storage::url('services/'.$item['img'])}}" alt="{{ $item['title'] }}">
            </a>
        </div>
    </div>

    <div class="service">
        <span class="service__number">{{ $item->order }}</span>
        <span class="service__caption">{{ $item->title }}</span>
        <span class="service__description">
            {!! $item->short_description !!}
        </span>
    </div>
</div>
