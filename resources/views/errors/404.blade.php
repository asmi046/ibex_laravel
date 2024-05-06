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
            <h1>404</h1>
            <p>К сожалению страница не найдена</p>
            <a href="{{ route('products') }}" class="button button-white">Продукция</a>
        </div>
    </section>

    <x-services.services-section></x-services.services-section>

@endsection

