<!DOCTYPE HTML>
<html>
<head>
<title>Belame</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="css/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.11.1.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
</head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <!-- logo -->  <a class="navbar-brand" href="{{ url('/') }}"><h1><img src="images/pop.png" alt="" /></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="top-search">
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                    <input type="submit" value=" ">
                </form>
            </div>
            <div class="header-top-right">

                <div class="signin">
                    <a href="{{ route('register') }}">Daftar</a>
                    
                </div>
                <div class="signin">
                    <a href="{{ route('login') }}">Masuk</a>
                    
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </nav>
    
        <div class="col-sm-3 col-md-2 sidebar">
            <div class="top-navigation">
                <div class="t-menu">MENU</div>
                <div class="t-img">
                    <img src="images/lines.png" alt="" />
                </div>
                <div class="clearfix"> </div>
            </div>
            <br>
            <br>
                <div class="drop-navigation drop-navigation">
                  <ul class="nav nav-sidebar">
                      <li><a href="{{'home'}}" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Profil</a></li>
                      <li><a href="{{'favorite'}}" class="user-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>Favorit</a></li>
                      <li><a href="history.html" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>Riwayat</a></li>
                      <li><a href="#" class="menu1"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>Pelajaran<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
                        <ul class="cl-effect-2">
                            <li><a href="movies.html">Matematika</a></li>                                             
                            <li><a href="movies.html">Fisika</a></li>
                            <li><a href="movies.html">Biologi</a></li> 
                        </ul>
                        <!-- script-for-menu -->
                        <script>
                            $( "li a.menu1" ).click(function() {
                            $( "ul.cl-effect-2" ).slideToggle( 300, function() {
                            // Animation complete.
                            });
                            });
                        </script>
                    
                  </ul>
                  <!-- script-for-menu -->
                        <script>
                            $( ".top-navigation" ).click(function() {
                            $( ".drop-navigation" ).slideToggle( 300, function() {
                            // Animation complete.
                            });
                            });
                        </script>
                    <div class="side-bottom">
                        <!-- <div class="side-bottom-icons">
                            <ul class="nav2">
                                <li><a href="#" class="facebook"> </a></li>
                                <li><a href="#" class="facebook twitter"> </a></li>
                                <li><a href="#" class="facebook chrome"> </a></li>
                                <li><a href="#" class="facebook dribbble"> </a></li>
                            </ul>
                        </div> -->

                        <div class="copyright">
                            <p>Copyright © 2018 belame</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="main-grids">
                <div class="recommended">
                    <div class="recommended-grids">
                        <div class="recommended-info">
                            <h3>Direkomendasikan</h3>
                        </div>
                        <script src="js/responsiveslides.min.js"></script>
                         <script>
                            // You can also use "$(window).load(function() {"
                            $(function () {
                              // Slideshow 4
                              $("#slider3").responsiveSlides({
                                auto: true,
                                pager: false,
                                nav: true,
                                speed: 500,
                                namespace: "callbacks",
                                before: function () {
                                  $('.events').append("<li>before event fired.</li>");
                                },
                                after: function () {
                                  $('.events').append("<li>after event fired.</li>");
                                }
                              });
                        
                            });
                          </script>
                        <div  id="top" class="callbacks_container">
                            <ul class="rslides" id="slider3">
                                <li>
                                    <div class="animated-grids">
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bel4.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">

                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 4)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">John</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">2 menyukai</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="{{'show4'}}"><img src="images/contoh.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">

                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="{{'show4'}}" class="title">Belajar bahasa inggris</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">Dini</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">1 menyukai</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bel6.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">

                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 6)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">John</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">2 menyukai</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bl1.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">

                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar matematika (part 1)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">Dini</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">0 menyukai</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="animated-grids">
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bl2.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>4:42</p>
                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar matematika (part 2)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">Dini</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">2 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bl3.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>6:14</p>
                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar matematika (part 3)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">Dini</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">2 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bl4.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>2:34</p>
                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar matematika (part 4)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">Dini</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">2 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bl5.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>5:12</p>
                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar matematika (part 5)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">Dini</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">1 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="animated-grids">
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bel7.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>4:42</p>
                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 7)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">John</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">2 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bl6.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>6:14</p>
                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar matematika (part 6)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">Dini</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">2 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bl8.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>2:34</p>
                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar matematika (part 8)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">Dini</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">2 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bl7.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>5:12</p>
                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar matematika (part 7)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">Dini</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">1 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="animated-grids">
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bel 5.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>4:42</p>
                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 5)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">John</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">2 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bel4.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>6:14</p>
                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 4)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">John</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">2 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bl4.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>2:34</p>
                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar matematika (part 4)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">Dini</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">2 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bl3.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>5:12</p>
                                                </div>
                                                <div class="clck small-clck">
                                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="resent-grid-info recommended-grid-info">
                                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 3)</a></h5>
                                                <div class="slid-bottom-grids">
                                                    <div class="slid-bottom-grid">
                                                        <p class="author author-info"><a href="#" class="author">Dini</a></p>
                                                    </div>
                                                    <div class="slid-bottom-grid slid-bottom-right">
                                                        <p class="views views-info">1 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="recommended">
                    <div class="recommended-grids">
                        <div class="recommended-info">
                            <h3>Matematika</h3>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bl1.jpg" alt="" /></a>
                                <div class="time small-time">
                                    <p>2:34</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar matematika (part 1)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">Dini</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bl2.jpg" alt="" /></a>
                                <div class="time small-time">
                                    <p>3:02</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar matematika (part 2)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">Dini</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bl3.jpg" alt="" /></a>
                                <div class="time small-time">
                                    <p>1:34</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar matematika (part 3)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">Dini</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bl4.jpg" alt="" /></a>
                                <div class="time small-time">
                                    <p>2:09</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar matematika (part 4)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">Dini</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="recommended-grids">
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bl4.jpg" alt="" /></a>
                                <div class="time small-time">
                                    <p>6:34</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar matematika (part 4)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">Dini</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bl5.jpg" alt="" /></a>
                                <div class="time small-time">
                                    <p>7:34</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar matematika (part 5)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">Dini</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bl6.jpg" alt="" /></a>
                                <div class="time small-time">
                                    <p>6:09</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar matematika (part 6)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">Dini</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bl7.jpg" alt="" /></a>
                                <div class="time small-time">
                                    <p>9:04</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar matematika (part 7)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">Dini</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="recommended">
                    <div class="recommended-grids">
                        <div class="recommended-info">
                            <h3>Bahasa Inggris</h3>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bel2.jpg" alt="" /></a>
                                <div class="time small-time">
                                    <p>7:30</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 2)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">John</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bel1.jpg" alt="" /></a>
                                <div class="time small-time">
                                    <p>9:34</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 1)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">John</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bel2.jpg" alt="" /></a>
                                <div class="time small-time">
                                    <p>5:34</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 2)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">John</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bel3.jpg" alt="" /></a>
                                <div class="time small-time">
                                    <p>6:55</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 3)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">John</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="recommended-grids">
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bel2.jpg" alt=""></a>
                                <div class="time small-time">
                                    <p>7:30</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 2)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">John</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bel1.jpg" alt=""></a>
                                <div class="time small-time">
                                    <p>9:34</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 1)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">John</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bel4.jpg" alt=""></a>
                                <div class="time small-time">
                                    <p>5:34</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 4)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">John</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/bel3.jpg" alt=""></a>
                                <div class="time small-time">
                                    <p>6:55</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="single.html" class="title">Belajar bahasa inggris (part 3)</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">John</a></p></li>
                                    <li class="right-list"><p class="views views-info">2 views</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            /
            <!-- //footer -->
        </div>
        <div class="clearfix"> </div>
    <div class="drop-menu">
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
          <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
        </ul>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>