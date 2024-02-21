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
        <div class="container">
            <h2>Продукция</h2>
        </div>
    </section>

    <section class="advantages_section">
        <div class="container">
            <h2 class="hidet">Преимущества</h2>
        </div>
    </section>

    <section class="services_section">
        <div class="container">
            <h2 class="hidet">Услуги</h2>
        </div>
    </section>

    <section class="utp_section">
        <div class="container">
            <h2 class="hidet">Инновационное производство фасадов</h2>
        </div>
    </section>

@endsection

