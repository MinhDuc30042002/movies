@extends('layout')

@section('content')
    @isset($category)
        <h3 class="agile_w3_title">{{ $category_by_slug['category'] }} <span>Movies</span> </h3>
    @endisset
    <!--/genre-movies-->
    <div class="wthree_agile-genre-movies">
        @if (count($category_by_slug) == 0)
            <h3 class="agile_w3_title">Không có phim nào thuộc thể loại này <span>Movies</span> </h3>
        @else
            @foreach ($category_by_slug as $item)
                <div class="col-md-3 w3l-movie-gride-agile genre-movies">
                    <a href="/movie/{{ $item->slug }}" class="hvr-sweep-to-bottom"><img src="{{ asset($item->link_img) }}"
                            title="Movies Pro" class="img-responsive" alt=" ">
                        <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <p><a href="/movie/{{ $item->slug }}">{{ $item->name }}</a></p>
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
            {{ $category_by_slug->links() }}
        @endif

    </div>
@endsection
