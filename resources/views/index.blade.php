@extends('layout/main')

@section('title', 'BoardGames')


@section('container')

    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax"
                style="background-image: url(/confer/img/bg-img/board1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Come and <br>Play with us!</h2>
                                <h6 data-animation="fadeInUp" data-delay="500ms">Search Your First Boardgame !</h6>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="#scrollDown" class="btn confer-btn">Search Boardgame <i
                                            class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax"
                style="background-image: url(/confer/img/bg-img/board2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text-two text-center">
                                <h5 data-animation="fadeInUp" data-delay="100ms">you can play boardgame with</h5>
                                <h2 data-animation="fadeInUp" data-delay="300ms">various gameplay</h2>
                                <!-- Event Meta -->
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="/boardgames" class="btn confer-btn m-2">TOP 50 <i
                                            class="zmdi zmdi-long-arrow-right"></i></a>
                                    <a href="/random" class="btn confer-btn m-2">Random <i
                                            class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Icon -->
        <div class="icon-scroll" id="scrollDown"></div>
    </section>
    <section>

        <div class="container" id="search">
            <div class="row justify-content-center">
                <div class="col md-8 pt-4">
                    <h1 class="text-center mb-3">Search BoardGames!</h1>
                    <form action="/search" class="w-100" method="GET">
                        <div class="input-group mb-3">
                            <input name="search" type="text" class="form-control" placeholder="...">
                            <button type="submit" class="btn btn-outline-secondary" type="button"
                                id="search-button">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <div class="our-client-area about-page section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12 pt-3">
                    <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">
                        <h4>
                            TOP 50
                        </h4>
                        <a class="pt-3" href="/boardgames">show more</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Client Slider -->
                    <div class="client-area owl-carousel">
                        <!-- Single Client Slide -->
                        @foreach ($data as $datum)
                            <div class="single-client-content bg-boxshadow wow fadeInUp" data-wow-delay="300ms">
                                <div class="single-client-text about-page">
                                    <div class="client-info">
                                        <div class="d-flex align-items-center">
                                            <div style="flex-grow: 1">
                                                <h4><a href="/game?id={{ $datum->id }}">{{ $datum->name }}</h4></a>
                                            </div>
                                            <div class="single-client-thumb d-flex justify-content-end">
                                                <img style="object-fit: contain; height: 6rem"
                                                    src="{{ $datum->image_url }}" alt="">
                                            </div>
                                        </div>
                                        @isset($datum->primary_designer->name)
                                            <a class="post-author" href="#"><i class="zmdi zmdi-edit"></i>
                                                {{ $datum->primary_designer->name }}</a>
                                        @endisset
                                        <p>{{ $datum->description_preview }}</p>
                                    </div>
                                    <!-- Thumb and info -->
                                </div>
                                <!-- Icon -->
                                <div class="client-icon">
                                    <i class="zmdi zmdi-quote"></i>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
