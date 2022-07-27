@extends('layout')

@section('content')
    <h3 class="agile_w3_title">Từ khóa phim <span>{{ $keyword }}</span> </h3>
    <!--/genre-movies-->
    {{-- {{dd($searched_movies)}} --}}
    <div class="wthree_agile-genre-movies">
        @foreach ($searched_movies as $item)
            <div class="col-md-2 w3l-movie-gride-agile genre-movies">
                <a href="/movie/{{ $item->slug }}" class="hvr-sweep-to-bottom"><img src="../{{ $item->link_img }}"
                        title="Movies Pro" class="img-responsive" alt=" ">
                    <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                </a>
                <div class="mid-1 agileits_w3layouts_mid_1_home">
                    <div class="w3l-movie-text">
                        <h6><a href="/movie/{{ $item->slug }}">{{ $item->name }}</a></h6>
                    </div>
                    <div class="mid-2 agile_mid_2_home">
                        <p>{{ $item->released }}</p>
                        <div class="block-stars">
                            <ul class="w3l-ratings">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="ribben one">
                    <p>{{ $item->status }}</p>
                </div>
            </div>
        @endforeach
        <div class="clearfix"></div>
    </div>
@endsection
