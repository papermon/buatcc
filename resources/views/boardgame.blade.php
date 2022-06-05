@extends('layout/main')

@section('title', 'Top 50')


@section('container')
    {{-- <div>
    <ul>
        @foreach ($data as $item)
        <li>
            <img src="{{ $item->thumbnail }}">
            <h5>{{ $item->name }}</h5>
        </li>
        @endforeach
    </ul>
</div> --}}

    <div class="single-tab-content px-5 pt-3">
        <div class="row">
            <div class="col-12">
                @foreach ($data as $item)
                    <!-- Single Schedule Area -->
                    <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp"
                        data-wow-delay="300ms">
                        <!-- Single Schedule Thumb and Info -->
                        <div class="single-schedule-tumb-info d-flex align-items-center">
                            <!-- Single Schedule Thumb -->
                            <div class="single-schedule-tumb">
                                <img class="w-100 h-100" style="object-fit: contain; border-radius:0"
                                    src="{{ $item->thumb_url }}">
                            </div>
                            <!-- Single Schedule Info -->
                            <div class="single-schedule-info">
                                <a href="/game?id={{ $item->id }}">
                                    <h5>{{ $item->name }}</h5>
                                </a>
                                <p>by
                                    @isset($item->primary_designer->url)
                                        <span> <a
                                                href="{{ $item->primary_designer->url }}">{{ $item->primary_designer->name }}</a></span>
                                    @else
                                        <a href="#">(Uncredited)</a>
                                    @endisset
                                </p>
                            </div>
                        </div>
                        <!-- Single Schedule Info -->
                        <div class="schedule-time-place">
                            <p><i class="zmdi zmdi-accounts"></i> {{ $item->min_players }} -
                                {{ $item->max_players }} players</p>
                            <p><i class="zmdi zmdi-alarm-check"></i> {{ $item->min_playtime }}
                                - {{ $item->max_playtime }} min</p>
                        </div>
                        <!-- Schedule Btn -->
                        <a href="/game?id={{ $item->id }}" class="btn confer-btn">More Info <i
                                class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- More Schedule Btn -->
        <div class="col-12">
            <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
            </div>
        </div>
    </div>
@endsection
