@extends('layouts.all')

@php
    $title = (empty($page->seo_title))?$page->title:$page->seo_title;
    $description = (empty($page->seo_description))?$page->title:$page->seo_description;;
@endphp

@section('title', $title)
@section('description', $description)

@section('main')


    <x-inner-page-header
        :title="$title"
        subtitle="Политика конфиденциальности<br> и обработки персональных данных."
        :banner="asset('img/top_img/trg.webp')"
    ></x-inner-page-header>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="policy_section max_height">
        <div class="container">
            {!! $page->description !!}
        </div>
    </section>
@endsection

