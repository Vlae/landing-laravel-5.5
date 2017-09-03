<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Tapmedia Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/my.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="{{asset('/favicon.ico')}}">

    </head>
    <body>

    <section class="video">
        <div class="video__textblock">
            <div class="video__fogging"></div>
            <div class="video__container">
                <div class="video__title">Your favorite one page multi purpose template</div>
                <div class="video__description">Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </div>
                <a href="/banner" class="video__button">FIND OUT MORE</a>
            </div>
        </div>
        <video class="video__screen" height="auto" autoplay="autoplay" loop="loop" muted="muted" preload="auto">
            <source src="{{asset('videos/beach.mp4')}}" type="video/mp4"></source>
            <source src="{{asset('videos/beach.webm')}}" type="video/webm"></source>
        </video>

    </section>
    <section class="benefits">
        <div class="benefits__container">
            <ul class="benefits__list">
                @for($i = 0; $i < 6; $i++)
                    <li class="benefits__item">
                        <div class="benefits__image"><i class="fa fa-5x fa-clock-o"></i></div>
                        <div class="benefits__title"> Lorum ipsum</div>
                        <div class="benefits__description">Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </div>
                    </li>
                @endfor
            </ul>
        </div>
    </section>
    <section class="gallery">
        <ul class="gallery__list">
            @for($i = 0; $i < 8; $i++)
                <li class="gallery__item">
                    <img src="{{asset('images/gimage.png')}}" class="gallery__image">
                    <div class="gallery__overlay">
                        <div class="gallery__title">Hello World</div>
                        <div class="gallery__description">Pellentesque eu, pretium quis, sem.</div>
                    </div>
                </li>
            @endfor
        </ul>
    </section>
    <section class="quote">
        <div class="quote__container">
            <div class="quote__image" style="background-image: url('{{asset('images/quotegirl.png')}}')"></div>
        </div>
        <div class="quote__container quote__right">
            <div class="quote__text">
                "Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem."
                <div class="quote__author">
                    Albus Dumbledore, director at Hogwarts
                </div>
            </div>
        </div>
    </section>
    <section class="download">
        <div class="download__container">
            <div class="download__title">Are You Ready to Start? Download now For Free!</div>
            <div class="download__text">Cum sociis natoque penatibus et magnis dis parturient montes</div>
            <a href="#form-popup" class="download__button button">DOWNLOAD FOR FREE</a>
        </div>
    </section>

    @include('popups/download');

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/my.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/notify.min.js')}}"></script>
    <script src="{{asset('js/validation.js')}}"></script>
    </body>
</html>
