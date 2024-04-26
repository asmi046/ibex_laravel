@extends('layouts.all')

@php
    $title = "Техническая документация на продукцию компании «ИБЕКС»";
    $description = "Техническая документация на продукцию компании «ИБЕКС», вся необходимая информация для проектировщиков и закупщиков";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-inner-page-header
    title="Техническая документация"
    subtitle="Техническая документация на<br> продукцию компании «ИБЕКС»"
    :banner="asset('img/top_img/pl_gold.webp')"
    ></x-inner-page-header>

    <section class="breadcrumbs_section max_height">
        <div class="container">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>

            <h2>Страница в разработке</h2>
        </div>
    </section>
@endsection

