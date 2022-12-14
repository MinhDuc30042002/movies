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
        <div class="agile_featured_movies">
            <!--/agileinfo_tabs-->
            <div class="agileinfo_tabs">
                <!--/tab-section-->
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Ph??? bi???n</li>
                        <li>G???n ????y</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab1">
                            <div class="tab_movies_agileinfo">
                                <div class="w3_agile_featured_movies">
                                    <div class="col-md-5 video_agile_player">
                                        <div class="video-grid-single-page-agileits">
                                            <div data-video="f2Z65fobH2I" id="video"> <img src="images/11.jpg"
                                                    alt="" class="img-responsive" /> </div>
                                        </div>



                                        <div class="player-text">
                                            <p class="fexi_header">Force 2</p>
                                            <p class="fexi_header_para"><span class="conjuring_w3">Story
                                                    Line<label>:</label></span>Presenting the official trailer of Force 2
                                                starring John Abraham, Sonakshi Sinha and Tahir Raj Bhasin

                                                A film by Abhinay Deo, Produced by Vipul Amrutlal Shah, JA entertainment
                                                Pvt. Ltd....</p>
                                            <p class="fexi_header_para"><span>Release On<label>:</label></span>Sep 29, 2016
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-7 wthree_agile-movies_list">
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m1.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Swiss Army Man </a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m2.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Me Before you</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m3.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Deadpool</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m4.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Rogue One </a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m5.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Storks </a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m6.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Hopeless</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m7.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Mechanic</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m8.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Timeless</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="cleafix"></div>
                            </div>
                        </div>
                        <div class="tab2">
                            <div class="tab_movies_agileinfo">
                                <div class="w3_agile_featured_movies">
                                    <div class="col-md-5 video_agile_player">
                                        <div class="video-grid-single-page-agileits">
                                            <div data-video="fNKUgX8PhMA" id="video1"> <img src="images/22.jpg"
                                                    alt="" class="img-responsive" /> </div>
                                        </div>


                                        <div class="player-text">
                                            <p class="fexi_header">Me Before You </p>
                                            <p class="fexi_header_para"><span class="conjuring_w3">Story
                                                    Line<label>:</label></span>Me Before You Official Trailer #2 (2016) -
                                                Emilia Clarke, Sam Claflin Movie HD

                                                A girl in a small town forms an unlikely bond with a recently-paralyzed man
                                                she's taking care of....</p>
                                            <p class="fexi_header_para"><span>Release On<label>:</label></span>Feb 3, 2016
                                            </p>
                                            <p class="fexi_header_para">
                                                <span>Genres<label>:</label> </span>
                                                <a href="genre.html">Drama</a> |
                                                <a href="genre.html">Adventure</a> |
                                                <a href="genre.html">Family</a>
                                            </p>
                                            <p class="fexi_header_para fexi_header_para1"><span>Star
                                                    Rating<label>:</label></span>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-half-o"
                                                        aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="col-md-7 wthree_agile-movies_list">
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m9.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Inferno</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m10.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Now You See Me 2</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m11.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Warcraft</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m12.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Money Monster</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m13.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Ghostbuster</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m14.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Rambo 4</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m15.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">RoboCop</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m16.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">X-Men</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="cleafix"></div>
                            </div>
                        </div>
                        <div class="tab3">
                            <div class="tab_movies_agileinfo">
                                <div class="w3_agile_featured_movies">
                                    <div class="col-md-5 video_agile_player">
                                        <div class="video-grid-single-page-agileits">
                                            <div data-video="BXEZFd0RT5Y" id="video2"> <img src="images/44.jpg"
                                                    alt="" class="img-responsive" /> </div>
                                        </div>

                                        <div class="player-text">
                                            <p class="fexi_header">Storks </p>
                                            <p class="fexi_header_para"><span class="conjuring_w3">Story
                                                    Line<label>:</label></span>Starring: Andy Samberg, Jennifer Aniston, Ty
                                                Burrell Storks Official Trailer 3 (2016) - Andy Samberg Movie the company's
                                                top delivery stork, lands in hot water when the Baby Factory produces an
                                                adorable....... </p>
                                            <p class="fexi_header_para"><span>Release On<label>:</label></span>Aug 1, 2016
                                            </p>
                                            <p class="fexi_header_para">
                                                <span>Genres<label>:</label> </span>
                                                <a href="genre.html">Drama</a> |
                                                <a href="genre.html">Adventure</a> |
                                                <a href="genre.html">Family</a>
                                            </p>
                                            <p class="fexi_header_para fexi_header_para1"><span>Star
                                                    Rating<label>:</label></span>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-half-o"
                                                        aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="col-md-7 wthree_agile-movies_list">
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m1.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Swiss Army Man </a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m2.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Me Before you</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m3.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Deadpool</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m4.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Rogue One </a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m5.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Storks</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m6.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Hopeless</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m7.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Mechanic</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-o"
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                        <div class="w3l-movie-gride-agile">
                                            <a href="single.html" class="hvr-sweep-to-bottom"><img src="images/m8.jpg"
                                                    title="Movies Pro" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                        aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="single.html">Timeless</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>2016</p>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="cleafix"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--//tab-section-->
            <h3 class="agile_w3_title"> Phim M???i <span>Nh???t</span></h3>
            <!--/movies-->
            <div class="w3_agile_latest_movies">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    @foreach ($latest_movies as $item)
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
                                <a href="/movie/{{ $item->slug }}" class="hvr-sweep-to-bottom"><img
                                        src="{{ $item->link_img }}" title="Movies Pro" class="img-responsive"
                                        alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <p><a href="/movie/{{ $item->slug }}">{{ $item->name }}</a></p>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>{{ $item->released }}</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-star-half-o"
                                                            aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                </li>
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
            <!--//movies-->
            <h3 class="agile_w3_title">Phim <span>????? Xu???t</span> </h3>
            <!--/requested-movies-->
            <div class="wthree_agile-requested-movies">
                @foreach ($requested_movies as $item)
                    <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                        <a href="/movie/{{ $item->slug }}" class="hvr-sweep-to-bottom"><img
                                src="{{ $item->link_img }}" title="Movies Pro" class="img-responsive" alt=" ">
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
            </div>
            <!--//requested-movies-->
            <!--/top-movies-->
            <h3 class="agile_w3_title">Top <span>L?????t Xem</span> </h3>
            <div class="top_movies">
                <div class="tab_movies_agileinfo">
                    <div class="w3_agile_featured_movies two">
                        <div class="col-md-7 wthree_agile-movies_list second-top">
                            @foreach ($top_movies as $item)
                                <div class="w3l-movie-gride-agile">
                                    <a href="/movie/{{ $item->slug }}" class="hvr-sweep-to-bottom"><img
                                            src="{{ $item->link_img }}" title="Movies Pro" class="img-responsive"
                                            alt=" ">
                                        <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                        <div class="w3l-movie-text">
                                            <p><a href="/movie/{{ $item->slug }}">{{ $item->name }}</a></p>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p>{{ $item->released }}</p>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>{{ $item->status }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-5 video_agile_player second-top">
                            <div class="video-grid-single-page-agileits">
                                <a href="/movie/{{ $top_1_movie->slug }}">
                                    <img src="{{ $top_1_movie->link_img }}" alt="Image movie"
                                        class="img-responsive" />
                                </a>
                            </div>

                            <div class="player-text two">
                                <a href="/movie/{{ $top_1_movie->slug }}">
                                    <p class="fexi_header">{{ $top_1_movie->name }}</p>
                                </a>
                                <p class="fexi_header_para"><span class="conjuring_w3">M?? t???<label>:</label></span>
                                    {{ $top_1_movie->description }}
                                </p>
                                <p class="fexi_header_para">
                                    <span>S???n xu???t<label>:</label></span>{{ $top_1_movie->released }}
                                </p>
                                <p class="fexi_header_para">
                                    <span>Qu???c gia<label>:</label></span>{{ $top_1_movie->national }}
                                </p>
                                <p class="fexi_header_para">
                                    <span>Th???i gian<label>:</label></span>{{ $top_1_movie->timing }}
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="cleafix"></div>
                </div>
            </div>

            <!--//top-movies-->
        </div>
    </div>
@endsection
