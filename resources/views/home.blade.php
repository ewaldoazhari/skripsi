@extends('test')
@section('content')


<div class="main-grids">
                <div class="top-grids">
                    <div class="recommended-info">
                        <h3>Baru dilihat</h3>
                    </div>
                    <div class="col-md-4 resent-grid recommended-grid slider-top-grids">
                        <div class="resent-grid-img recommended-grid-img">
                            <a href="{{'show'}}"><img src="images/bel1.jpg" alt="" /></a>
                            <div class="time">
                                <p>3:04</p>
                            </div>
                            <div class="clck">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="resent-grid-info recommended-grid-info">
                            <h3><a href="single.html" class="title title-info">Belajar bahasa inggris (part 1)</a></h3>
                            <ul>
                                <li><p class="author author-info"><a href="#" class="author">John</a></p></li>
                                <li class="right-list"><p class="views views-info">2 views</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 resent-grid recommended-grid slider-top-grids">
                        <div class="resent-grid-img recommended-grid-img">
                            <a href="single.html"><img src="images/bel2.jpg" alt="" /></a>
                            <div class="time">
                                <p>7:23</p>
                            </div>
                            <div class="clck">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="resent-grid-info recommended-grid-info">
                            <h3><a href="single.html" class="title title-info">Belajar bahasa inggris (part 2)</a></h3>
                            <ul>
                                <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                                <li class="right-list"><p class="views views-info">4 views</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 resent-grid recommended-grid slider-top-grids">
                        <div class="resent-grid-img recommended-grid-img">
                            <a href="single.html"><img src="images/bel3.jpg" alt="" /></a>
                            <div class="time">
                                <p>4:04</p>
                            </div>
                            <div class="clck">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="resent-grid-info recommended-grid-info">
                            <h3><a href="single.html" class="title title-info">Belajar bahasa inggris (part 3)</a></h3>
                            <ul>
                                <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                                <li class="right-list"><p class="views views-info">7 views</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="recommended">
                    <div class="recommended-grids">
                        <div class="recommended-info">
                            <h3>Rekomendasi</h3>
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
                                                    <p>7:34</p>
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
                                                <a href="single.html"><img src="images/bel5.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>6:23</p>
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
                                                        <p class="views views-info">1 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bel6.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>2:45</p>
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
                                                        <p class="views views-info">2 views</p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                                            <div class="resent-grid-img recommended-grid-img">
                                                <a href="single.html"><img src="images/bl1.jpg" alt="" /></a>
                                                <div class="time small-time slider-time">
                                                    <p>4:34</p>
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
                                                        <p class="views views-info">2</p>
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

@endsection