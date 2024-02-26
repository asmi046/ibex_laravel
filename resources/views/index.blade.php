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

    <section class="services_section">
        <div class="container">
            <div class="services__box">
                <div class="services_section__title-box">
                    <h2 class="section-title">Услуги</h2>
                </div>
                <div class="service">
                    <span class="service__number">1</span>
                    <span class="service__caption">Гибка металла</span>
                    <span class="service__description">
                        Формируем сталь по вашему образцу. Гибкость и точность – наши ключевые черты для создания качественных металлических изделий.
                    </span>
                </div>
                <div class="service">
                    <span class="service__number">2</span>
                    <span class="service__caption">Порошковая покраска</span>
                    <span class="service__description">
                        Наносим защитное покрытие высокого качества. Яркие оттенки и стойкость к воздействию – ваше долговечное решение.
                    </span>
                </div>
                <div class="service">
                    <span class="service__number">3</span>
                    <span class="service__caption">Холодная штамповка </span>
                    <span class="service__description">
                        Преобразовываем металл в точные формы. Точность, надежность и высокая производительность – наши стандарты.
                    </span>
                </div>
                <div class="service">
                    <span class="service__number">4</span>
                    <span class="service__caption">Обработка рулонной стали</span>
                    <span class="service__description">
                        Точная обработка для максимальной прочности. Наши технологии – ваш путь к идеальным металлическим конструкциям.
                    </span>
                </div>
                <div class="service">
                    <span class="service__number">5</span>
                    <span class="service__caption">Гальваническое цинкование</span>
                    <span class="service__description">
                        Надежная защита от коррозии. Наносим тонкий слой цинка для долговечности вашего металла.
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="utp_section">
        <div class="container">
            <h2 class="section-title">Инновационное производство фасадов</h2>
            <p>
                Навесные фасадные системы (НФС) с вентиляционным зазором “ИБЭКС” - это современный способ обезопасить внешние стены здания от негативного влияния окружающей среды
            </p>
            <a href="#" class="button button-white">Перейти в раздел</a>
        </div>
    </section>

@endsection

