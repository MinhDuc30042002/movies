<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Movies Pro</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Movies Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up -->
    <link href="{{ asset('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
    <link href="{{ asset('css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/zoomslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!--/web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
</head>

<body>
    <!--/main-header-->
    <!--/banner-section-->
    <div id="demo-1"
        data-zs-src='["{{ asset('images/2.jpg') }}", "{{ asset('images/1.jpg') }}", "{{ asset('images/3.jpg') }}","{{ asset('images/4.jpg') }}"]'
        data-zs-overlay="dots">
        <div class="demo-inner-content">
            <!--/header-w3l-->
            <div class="header-w3-agileits" id="home">
                <div class="inner-header-agile">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h1><a href="/"><span>M</span>ovies <span>P</span>ro</a></h1>
                        </div>
                        <!-- navbar-header -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/">Trang chủ</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thể loại <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <li>
                                            @foreach ($cate as $item)
                                                <div class="col-sm-4">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a
                                                                href="/the-loai/{{ $item->slug }}">{{ $item->category }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            @endforeach
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="series.html">tv - series</a></li>
                                <li><a href="news.html">news</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">quốc gia <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <li>
                                            <div class="col-sm-4">
                                                <ul class="multi-column-dropdown">
                                                    <li><a href="genre.html">Asia</a></li>
                                                    <li><a href="genre.html">France</a></li>
                                                    <li><a href="genre.html">Taiwan</a></li>
                                                    <li><a href="genre.html">United States</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="multi-column-dropdown">
                                                    <li><a href="genre.html">China</a></li>
                                                    <li><a href="genre.html">HongCong</a></li>
                                                    <li><a href="genre.html">Japan</a></li>
                                                    <li><a href="genre.html">Thailand</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="multi-column-dropdown">
                                                    <li><a href="genre.html">Euro</a></li>
                                                    <li><a href="genre.html">India</a></li>
                                                    <li><a href="genre.html">Korea</a></li>
                                                    <li><a href="genre.html">United Kingdom</a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/login') }}">đăng nhập</a></li>
                                <li><a href="contact.html">liên hệ</a></li>
                            </ul>

                        </div>
                        <div class="clearfix"> </div>
                    </nav>
                    <div class="w3ls_search">
                        <div class="cd-main-header">
                            <ul class="cd-header-buttons">
                                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                            </ul> <!-- cd-header-buttons -->
                        </div>
                        <div id="cd-search" class="cd-search">
                            <form action="/search" method="post">
                                <input name="search" type="search" placeholder="Search...">
                                @csrf
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            <!--//header-w3l-->
            <!--/banner-info-->
            <div class="baner-info">
                <h3>Xem phim tại <span>M</span>ovies <span>P</span>ro</h3>
                <h4>Mang cả rạp phim đến nhà bạn</h4>
            </div>
            <!--/banner-ingo-->
        </div>
    </div>

    @yield('content')
    <!--/footer-bottom-->
    <div class="contact-w3ls" id="contact">
        <div class="footer-w3lagile-inner">
            <h2>Đăng ký để trở thành thành viên <span>Movies Pro</span></h2>
            <p class="para">Mang cả rạp phim đến nhà bạn chỉ với một cú click</p>
            <div class="footer-contact">
                <form action="#" method="post">
                    <input type="email" name="Email" placeholder="Nhập địa chỉ email" required=" ">
                    <input type="submit" value="Đăng ký">
                </form>
            </div>
            <div class="footer-grids w3-agileits">
                <div class="col-md-4 footer-grid">
                    <h4>Năm sản xuất</h4>
                    <ul>
                        <li><a href="#" title="Release 2016">2016</a></li>
                        <li><a href="#" title="Release 2015">2015</a></li>
                        <li><a href="#" title="Release 2014">2014</a></li>
                        <li><a href="#" title="Release 2013">2013</a></li>
                        <li><a href="#" title="Release 2012">2012</a></li>
                        <li><a href="#" title="Release 2011">2011</a></li>
                    </ul>
                </div>
                <div class="col-md-4 footer-grid">
                    <h4>Thể loại</h4>
                    <ul class="w3-tag2">
                        @foreach ($cate as $item)
                            <li><a href="/genre/{{ $item->slug }}">{{ $item->category }} </a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4 footer-grid">
                    {{-- <h4>Phim mới</h4>
                    <ul class="w3-tag2">
                        @foreach ($latest_movies as $item)
                            <li><a href="/movie/{{ $item->slug }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul> --}}


                </div>
                <div class="clearfix"> </div>
            </div>
            <h3 class="text-center follow">Connect <span>Us</span></h3>
            <ul class="social-icons1 agileinfo">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>

        </div>

    </div>
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
            style="opacity: 1;"> </span></a>

    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <!-- Dropdown-Menu-JavaScript -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //Dropdown-Menu-JavaScript -->


    <script type="text/javascript" src="{{ asset('js/jquery.zoomslider.min.js') }}"></script>
    <!-- search-jQuery -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/simplePlayer.js') }}"></script>
    <script>
        $("document").ready(function() {
            $("#video").simplePlayer();
        });
    </script>
    <script>
        $("document").ready(function() {
            $("#video1").simplePlayer();
        });
    </script>
    <script>
        $("document").ready(function() {
            $("#video2").simplePlayer();
        });
    </script>
    <script>
        $("document").ready(function() {
            $("#video3").simplePlayer();
        });
    </script>

    <!-- pop-up-box -->
    <script src="{{ asset('js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
    <!--//pop-up-box -->

    <div id="small-dialog1" class="mfp-hide">
        <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
    </div>
    <div id="small-dialog2" class="mfp-hide">
        <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
    </div>
    <script>
        $(document).ready(function() {
            $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <script src="{{ asset('js/easy-responsive-tabs.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds
                autoPlay: true,
                navigation: true,

                items: 5,
                itemsDesktop: [640, 4],
                itemsDesktopSmall: [414, 3]

            });

        });
    </script>

    <!--/script-->
    <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            				var defaults = {
            		  			containerID: 'toTop', // fading element id
            					containerHoverID: 'toTopHover', // fading element hover id
            					scrollSpeed: 1200,
            					easingType: 'linear' 
            		 		};
            				*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--end-smooth-scrolling-->
    <script src="{{ asset('js/bootstrap.js') }}"></script>



</body>

</html>
