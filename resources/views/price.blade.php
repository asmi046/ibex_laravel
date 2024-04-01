@extends('layouts.all')

@php
    $title = "Прайс на продукцию компании «ИБЕКС»";
    $description = "Прайс на услуги и продукцию компании «ИБЕКС»";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-inner-page-header
        title="Прайс лист"
        subtitle="Прайс на услуги и продукцию<br> компании «ИБЕКС»"
        :banner="asset('img/top_img/services.webp')"
    ></x-inner-page-header>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
        </div>
    </section>
@endsection

