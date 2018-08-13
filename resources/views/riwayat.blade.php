@extends('test')
@section('content')

    <div class="main-grids">
        <div class="recommended">
            <div class="recommended-grids">
                <div class="recommended-info">
                    <h3>Riwayat</h3>
                </div>
                <div class="col-md-3 resent-grid recommended-grid">
                    <div class="resent-grid-img recommended-grid-img">
                        <a href="single.html"><img src="images/contoh2.jpg" alt="" /></a>
                        <div class="time small-time">
                        </div>
                        <div class="clck small-clck">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="resent-grid-info recommended-grid-info video-info-grid">
                        <h5><a href="single.html" class="title">Belajar matematika</a></h5>
                        <ul>
                            <li><p class="author author-info"><a href="#" class="author">ewaldo</a></p></li>
                            <li class="right-list"><p class="views views-info">1 menyukai</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 resent-grid recommended-grid">
                    <div class="resent-grid-img recommended-grid-img">
                        <a href="{{'show4'}}"><img src="images/contoh.jpg" alt="" /></a>
                        <div class="time small-time">

                        </div>
                        <div class="clck small-clck">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="resent-grid-info recommended-grid-info video-info-grid">
                        <h5><a href="single.html" class="title">Belajar Bahasa Inggris</a></h5>
                        <ul>
                            <li><p class="author author-info"><a href="#" class="author">Dini</a></p></li>
                            <li class="right-list"><p class="views views-info">1 menyukai</p></li>
                        </ul>
                    </div>
                </div>


                <div class="clearfix"> </div>
            </div>

        </div>



    </div>

@endsection