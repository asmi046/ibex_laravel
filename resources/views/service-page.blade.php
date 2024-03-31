@extends('layouts.all')

@php
    extract(get_page_meta(
        "Услуга компании ИБАКС",
        isset($service)? $service : null
    ));
@endphp

@section('title', $title)
@section('description', $description)
@section('banner', $page_banner)
@section('page_title', $page_title)

@section('main')
    <x-inner-page-header
        :title="$title"
        subtitle=""
        :banner="asset('img/top_img/pan_white.webp')"
    ></x-inner-page-header>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :service="$title"></x-breadcrumbs.main>
        </div>
    </section>


    <section class="service_page_section">
        <div class="container">
            <div class="inner_top_line">
                <div class="img_wrapper">
                    <img src="{{ Storage::url('services/'.$service->img) }}" alt="{{ $service->title }}">
                </div>

                <div class="short_description text_styles">
                    {!! $service->short_description !!}
                </div>
            </div>

            <div class="inner_description text_styles">
                {!! $service->description !!}
            </div>
        </div>
    </section>
@endsection

