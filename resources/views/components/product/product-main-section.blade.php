<section class="product_slider_section">
    <div class="ibex-sl-box">
        <div class="container">
            <div class="ibex-sl-box__top">
                <h2>Продукция</h2>
                <div class="ibex-sl-box__sl-controls">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
        <div class="ibex-sl-box__main">
            <div class="container">
                <div class="swiper ibex-sl">
                    <div class="swiper-wrapper">
                        @foreach ($all_product as $item)
                            <div class="swiper-slide">
                                <x-product.main-card :item="$item"></x-product.main-card>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
