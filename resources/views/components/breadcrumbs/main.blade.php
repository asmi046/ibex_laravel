<div class="uni_breadcrumbs">
    <div class="_container">

        <div itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs">
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{route('home')}}" >
                    <span itemprop="name">Главная</span>
                    <meta itemprop="position" content="0">
                </a>
            </span>



            @if (Request::route()->named('product_page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Все продукты" itemprop="item" href="{{route('products')}}">
                        <span itemprop="name">Все продукты</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $product }}" itemprop="item">
                        <span itemprop="name">{{ $product }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (Request::route()->named('service_page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Все услуги" itemprop="item" href="{{route('products')}}">
                        <span itemprop="name">Все услуги</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $service }}" itemprop="item">
                        <span itemprop="name">{{ $service }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (isset($title))
                <span class="sep"> / </span>
                    <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                        <span title="{{ $title }}" itemprop="item">
                            <span itemprop="name">{{ $title }}</span>
                            <meta itemprop="position" content="1">
                        </span>
                    </span>
            @endif

         </div>
    </div>
</div>
