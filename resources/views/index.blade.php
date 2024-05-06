@extends('layouts.all')

@php
    $title = "Ибекс - Навесные объемные фасады";
    $description = "Компания Ибекс - производство навесных объемных фасадов и фурнитуры для фасадных систем. Вся продукция сертифицирована";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <section class="main_banner_section">
        <div class="container">
            <h1>{!! $options["main_header"] !!}</h1>
            <p>{!! $options["main_sub_header"] !!}</p>
            <a href="{{ route('products') }}" class="button button-white">Перейти в раздел</a>
        </div>
    </section>

    <x-product.product-main-section></x-product.product-main-section>

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

