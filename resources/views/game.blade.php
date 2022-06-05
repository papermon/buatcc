@extends('layout/main')

@section('title', 'Game')


@section('container')
    <section class="confer-blog-details-area section-padding-100-0">
        <div class="container">
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="pr-lg-4 mb-100">
                    <!-- Post Content -->
                    <div class="post-details-content">

                        <!-- Post Thumbnail -->
                        <div class="post-blog-thumbnail mb-30">
                            <img class="centered" src={{ $data->image_url }} alt="">
                        </div>

                        <!-- Post Title -->
                        <h4 class="post-title"><a href="{{ $data->url }}">{{ $data->name }}</a></h4>

                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a class="post-author" href="#"><i class="zmdi zmdi-accounts"></i> {{ $data->min_players }} -
                                {{ $data->max_players }} players</a>
                            <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> {{ $data->min_playtime }}
                                - {{ $data->max_playtime }} min</a>
                            <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> age :
                                {{ $data->min_age }}+</a>

                            @isset($data->primary_publisher->name)
                                <a class="post-author" href="{{ $data->primary_publisher->url }}"><i
                                        class="zmdi zmdi-brush"></i>
                                    {{ $data->primary_publisher->name }}</a>
                            @endisset

                            @isset($data->primary_designer->name)
                                <a class="post-author" href="{{ $data->primary_designer->url }}"><i
                                        class="zmdi zmdi-edit"></i>
                                    {{ $data->primary_designer->name }}</a>
                            @endisset
                        </div>

                        <p>{{ $data->description_preview }}</p>

                        <!-- Pager Area -->
                        <div class="pager-area d-flex align-items-center flex-wrap mb-80">
                            <!-- Prev Post -->
                            <div class="pager-single-post d-flex align-items-center">
                                <div class="post-thumb w100 h100">
                                    <a href="/random"><img src="/confer/img/bg-img/paper.jpg" alt=""></a>
                                </div>
                                <div class="post-meta">
                                    <a href="/random" class="post-title">Random Game</a>
                                    <span>click for surprise</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
