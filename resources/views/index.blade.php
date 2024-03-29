@extends('layouts.all')

@php
    $title = "Ибекс";
    $description = "Ибекс";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <section class="main_banner_section">
        <div class="container">
            <h1>{!! $options["main_header"] !!}</h1>
            <p>{!! $options["main_sub_header"] !!}</p>
            <a href="#" class="button button-white">Перейти в раздел</a>
        </div>
    </section>

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
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="products-item">
                                    <img src="{{asset('img/icon_1.jpg')}}" alt="" class="products-item__img">
                                    <span class="products-item__text">
                                        <span class="products-item__caption">Серия ИБЭКС-К</span>
                                        <span class="products-item__description">
                                            Вентилируемые фасады из керамогранита обладают достаточно привлекательным внешним видом. Они прекрасно защищают стены от воздействия на них атмосферных осадков.
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="products-item">
                                    <img src="{{asset('img/icon_2.jpg')}}" alt="" class="products-item__img">
                                    <span class="products-item__text">
                                        <span class="products-item__caption">Серия ИБЭКС-П</span>
                                        <span class="products-item__description">
                                            Фиброцементная плита с окрашенной поверхностью или из натуральной каменной крошки представляет собой отличный материал для фасада.
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="products-item">
                                    <img src="{{asset('img/icon_3.jpg')}}" alt="" class="products-item__img">
                                    <span class="products-item__text">
                                        <span class="products-item__caption">Серия ИБЭКС-М</span>
                                        <span class="products-item__description">
                                            Облицовка фасада металлокассетами решает весь комплекс задач, стоящих перед вентилируемым фасадом. Они обеспечивают защиту от воздействия осадков и других неблагоприятных факторов.
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="swiper-slide"><div class="products-item">
                                <img src="{{asset('img/icon_4.jpg')}}" alt="" class="products-item__img">
                                <span class="products-item__text">
                                    <span class="products-item__caption">Серия ИБЭКС-М</span>
                                    <span class="products-item__description">
                                        Облицовка фасада металлокассетами решает весь комплекс задач, стоящих перед вентилируемым фасадом. Они обеспечивают защиту от воздействия осадков и других неблагоприятных факторов.
                                    </span>
                                </span>
                            </div></div>
                            <div class="swiper-slide"><div class="products-item">
                                <img src="{{asset('img/icon_2.jpg')}}" alt="" class="products-item__img">
                                <span class="products-item__text">
                                    <span class="products-item__caption">Серия ИБЭКС-М</span>
                                    <span class="products-item__description">
                                        Облицовка фасада металлокассетами решает весь комплекс задач, стоящих перед вентилируемым фасадом. Они обеспечивают защиту от воздействия осадков и других неблагоприятных факторов.
                                    </span>
                                </span>
                            </div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advantages_section">
        <div class="container">
            <div class="advantages-box">
                <div class="advantage">
                    <div class="advantage__number">1</div>
                    <span class="advantage__caption">свыше 600 000</span>
                    <span class="advantage__description">
                        крепежных кронштейнов различной конфигурации;
                    </span>
                </div>
                <div class="advantage">
                    <div class="advantage__number">2</div>
                    <span class="advantage__caption">свыше 500 000 п.м.</span>
                    <span class="advantage__description">
                        направляющего профиля различной конфигурации;
                    </span>
                </div>
                <div class="advantage">
                    <div class="advantage__number">3</div>
                    <span class="advantage__caption">свыше 800 000</span>
                    <span class="advantage__description">
                        крепежных кляммеров различной конфигурации;
                    </span>
                </div>
                <div class="advantage">
                    <div class="advantage__number">4</div>
                    <span class="advantage__caption">свыше 200 000 кв.м.</span>
                    <span class="advantage__description">
                        системы навесных вентилируемых фасадов;
                    </span>
                </div>
            </div>
        </div>
    </section>

    <x-services.services-section></x-services.services-section>

    <x-blocks.innovation></x-blocks.innovation>

@endsection

