<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{route('home')}}" />
    <meta property="og:site_name" content="Мир туризма 46" />
    <meta property="og:image" content="{{asset('img/og_img.jpg')}}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />

    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon256.png')}}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon128.png')}}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon64.png')}}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon16.png')}}" sizes="16x16">
    <link rel="icon" type="image/svg" href="{{asset('/img/favicons/fav.svg')}}" sizes="any">

    <meta name="_token" content="{{ csrf_token() }}">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'public/scss/main.scss'
    ])
</head>
<body>
    @include("allicon")
    <main class="sidebar_schem" id="main">

        <div class="mobile_menu_btn">
            <i class="fa-solid fa-bars open"></i>
            <i class="fa-solid fa-xmark close"></i>
        </div>

        <div class="sidebar">
            <header>
                <a href="{{ route('home') }}">
                    <img class="logo_img" src="{{asset('img/logo.svg')}}" alt="Ибекс">
                </a>
            </header>

            <div class="sb_body">
                <x-navigation></x-navigation>

                <div class="sb_contact">
                    <hr>
                        <a class="phone_lnk" href="tel:+7{{ phone_format($options['phone']) }}">{{ $options["phone"] }}</a>
                        <a class="email_lnk" href="mailto:{{ phone_format($options['email']) }}">{{ $options["email"] }}</a>
                    <hr>
                </div>

                <div class="sb_social">
                    <a href="#">
                        <svg class="sprite_icon">
                            <use xlink:href="#tg_icon"></use>
                        </svg>
                    </a>

                    <a href="#">
                        <svg class="sprite_icon">
                            <use xlink:href="#ws_icon"></use>
                        </svg>
                    </a>
                </div>
            </div>

            <footer>

            </footer>
        </div>

        <div class="main_page">
            @yield('main')
        </div>
    </main>
</body>
</html>
