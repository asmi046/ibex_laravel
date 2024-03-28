<section class="page_section" style="background-image: url({{ isset($banner)?$banner:"" }})">
    <div class="container">
        <h1>{{ $title }}</h1>
        @isset($subtitle)
            <p class="subtitle">{!! $subtitle !!}</p>
        @endisset
    </div>
</section>
