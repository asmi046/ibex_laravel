@extends('layouts.all')

@php
    $title = "Продукция нашей компании";
    $description = "Продукция компании «ИБАКС». Мы гарантируем качество и соответствие отечественным и зарубежным стандартам";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <x-inner-page-header
        title="Продукция нашей компании"
        subtitle="Навесные объемные фасады,<br>фурнитура и комплектующие"
        :banner="asset('img/top_img/home.webp')"
    ></x-inner-page-header>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="product_section">
        <div class="container">
            @foreach ($products as $item)
                <x-product.page-card :item="$item"></x-product.page-card>
            @endforeach
        </div>
    </section>

@endsection

