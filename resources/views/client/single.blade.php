@extends('layout')

@section('content')
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Login</h4>
                    <div class="login-form">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="E-mail" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <div class="tp">
                                <input type="submit" value="LOGIN NOW">
                            </div>
                            <div class="forgot-grid">
                                <div class="log-check">
                                    <label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
                                </div>
                                <div class="forgot">
                                    <a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal1 -->
    <!-- Modal1 -->
    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Register</h4>
                    <div class="login-form">
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Name" required="">
                            <input type="email" name="email" placeholder="E-mail" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <input type="password" name="conform password" placeholder="Confirm Password" required="">
                            <div class="signin-rit">
                                <span class="agree-checkbox">
                                    <label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a
                                            class="w3layouts-t" href="#" target="_blank">Terms of Use</a> and <a
                                            class="w3layouts-t" href="#" target="_blank">Privacy Policy</a></label>
                                </span>
                            </div>
                            <div class="tp">
                                <input type="submit" value="REGISTER NOW">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w3_content_agilleinfo_inner">
        @foreach ($movie as $item)
            <div class="agile_featured_movies">
                <div class="inner-agile-w3l-part-head">
                    <h3 class="w3l-inner-h-title">{{ $item->name }}</h3>
                </div>
                <div class="latest-news-agile-info">
                    <div class="col-md-12 latest-news-agile-left-content">
                        <div class="wrapper">
                            <div class="main_card">
                                <div class="card_left">
                                    <div class="card_datails">
                                        <h1>{{ $item->name }}</h1>
                                        <div class="card_cat">
                                            <p class="year">Sản xuất: {{ $item->released }}</p>
                                            <p class="genre">Thể loại: {{ $item->name }} </p>
                                            <p class="time">Thời gian: {{ $item->timing }}</p>
                                            <p class="status">Trạng thái: {{ $item->status }}</p>
                                            <p class="national">Quốc gia: {{ $item->national }}</p>

                                        </div>
                                        <p class="disc">
                                            {{ $item->description }}
                                        </p>
                                        <p class="director">
                                            Đạo diễn: {{ $item->director }}
                                        </p>
                                        <div class="social-btn">
                                            <!-- WATCH TRAILER-->
                                            <button>
                                                <p>SEE TRAILER</p>
                                            </button>
                                            <!-- GET-->
                                            <button>
                                                <p>WATCHING</p>
                                            </button>
                                            <!--USERS RATINGS-->
                                            <button>
                                                <p>
                                                    View: {{ $item->view }}
                                                </p>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <div class="card_right">
                                    <div class="img_container">
                                        <img src="../{{ $item->link_img }}" alt="{{ $item->link_img }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="response">
                            <h4>Responses</h4>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/admin.jpg" alt="">
                                    </a>
                                    <h5><a href="#">Admin</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of
                                        passages of Lorem Ipsum available,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.There are many
                                        variations of passages of Lorem Ipsum available.</p>
                                    <ul>
                                        <li>October 15, 2016</li>
                                        <li><a href="single.html"><i class="fa fa-reply" aria-hidden="true"></i>
                                                Reply</a>
                                        </li>
                                    </ul>
                                    <div class="media response-info">
                                        <div class="media-left response-text-left">
                                            <a href="#">
                                                <img class="media-object" src="images/admin.jpg" alt="">
                                            </a>
                                            <h5><a href="#">Admin</a></h5>
                                        </div>
                                        <div class="media-body response-text-right">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
                                                variations of passages of Lorem Ipsum available,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.There are
                                                many variations of passages of Lorem Ipsum available.</p>
                                            <ul>
                                                <li>November 02, 2016</li>
                                                <li><a href="single.html"><i class="fa fa-reply" aria-hidden="true"></i>
                                                        Reply</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/admin.jpg" alt="">
                                    </a>
                                    <h5><a href="#">Admin</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of
                                        passages of Lorem Ipsum available,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.There are many
                                        variations of passages of Lorem Ipsum available.</p>
                                    <ul>
                                        <li>November 03, 2016</li>
                                        <li><a href="single.html"><i class="fa fa-reply" aria-hidden="true"></i>
                                                Reply</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <h3 class="agile_w3_title"> Latest <span>Movies</span></h3>

                        <div class="w3_agile_latest_movies">
                            <div id="owl-demo" class="owl-carousel owl-theme">
                                @foreach ($related_to as $item)
                                    <div class="item">
                                        <div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
                                            <a href="/movie/{{ $item->slug }}" class="hvr-sweep-to-bottom"><img
                                                    src="../{{ $item->link_img }}" title="Movies Pro"
                                                    class="img-responsive" alt=" " />
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i>
                                                </div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="/movie/{{ $item->slug }}">{{ $item->name }}</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>{{ $item->released }}</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
                                                                        aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben one">
                                                <p>{{ $item->status }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
    </div>
    @endforeach
@endsection
