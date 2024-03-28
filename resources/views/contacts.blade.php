@extends('layouts.all')

@php
    $title = "Контакты компании «ИБАКС»";
    $description = "Контактная информация нашей компании. Свяжитесь с нами любым удобным способом.";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-inner-page-header
        title="Контакты"
        subtitle="Контактная  информация нашей компании<br>свяжитесь с нами любым удобным способом"
        :banner="asset('img/top_img/contacts.webp')"
    ></x-inner-page-header>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="contacts_page_section">
        <div class="container">
            <x-page-contacts></x-page-contacts>
            <x-map-in-page></x-map-in-page>
        </div>
    </section>

@endsection

