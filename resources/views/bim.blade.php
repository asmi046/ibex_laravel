@extends('layouts.all')

@php
    $title = "BIM библиотека";
    $description = "Библиотека элементов для архитекторов и разработчиков.";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-inner-page-header
        title="BIM библиотека"
        subtitle="Библиотека элементов для<br> архитекторов и разработчиков."
        :banner="asset('img/top_img/trg.webp')"
    ></x-inner-page-header>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
        </div>
    </section>
@endsection

