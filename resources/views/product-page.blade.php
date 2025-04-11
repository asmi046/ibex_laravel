@extends('layouts.all')

@php
    extract(get_page_meta(
        "Продукт компании ИБЕКС",
        isset($product)? $product : null
    ));
@endphp

@section('title', $title)
@section('description', $description)
@section('banner', $page_banner)
@section('page_title', $page_title)


@section('main')

    <x-inner-page-header
        :title="$product->title"
        subtitle=""
        :banner="asset('img/top_img/home.webp')"
    ></x-inner-page-header>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :product="$title"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="product_page_section">
        <div class="container">
            <div class="inner_top_line">
                <div class="img_wrapper">
                    <img src="{{ Storage::url($product->img) }}" alt="{{ $product->title }}">
                </div>

                {{-- <div class="short_description text_styles">
                    {!! $product->short_description !!}
                </div> --}}
            </div>

            <div class="inner_description text_styles">
                {!! $product->description !!}
            </div>
        </div>
    </section>

@endsection

