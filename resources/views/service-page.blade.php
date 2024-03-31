@extends('layouts.all')

@php
    $title = "Услуги";
    $description = "Услуги компании «ИБАКС», обработка метала на современном оборудовании.";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-inner-page-header
        title="Услуги"
        subtitle="Услуги по обработке металла,<br>на современном оборудовании"
        :banner="asset('img/top_img/pan_white.webp')"
    ></x-inner-page-header>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
        </div>
    </section>
@endsection

