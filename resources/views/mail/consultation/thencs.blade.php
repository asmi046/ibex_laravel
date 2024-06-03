@extends('layouts.all')

@php
    $title = "Благодарим за обращении";
    $description = "Благодарим за обращении, ждите обратной связи от наших специалистов";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
<section class="main_banner_section">
    <div class="container">
        <h1>Благодарим за обращение</h1>
        <p>Наши специалисты свяжутся с Вами в ближайшее время</p>
        <a href="{{ route('products') }}" class="button button-white">Продукция</a>
    </div>
</section>

<x-services.services-section></x-services.services-section>
@endsection
