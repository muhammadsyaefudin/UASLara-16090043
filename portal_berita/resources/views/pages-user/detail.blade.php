@extends('frontend.default')

@section('content')
    <!-- SECTION -->
    <div class="section">
        <!-- CONTAINER -->
        <div class="container">
            <!-- ROW -->
            <div class="row">
                <!-- Main Column -->
                <div class="col-md-8">

                    <!-- breadcrumb -->
                    <ul class="article-breadcrumb">
                        <li><a href="{{route('user.home')}}">Home</a></li>
                        <li><a href="#">News</a></li>
                        <li>{{$artikel->judul}}</li>
                    </ul>
                    <!-- /breadcrumb -->

                    <!-- ARTICLE POST -->
                    <article class="article article-post">
                        <div class="article-share">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="article-main-img">
                            <img src="{{asset('uploads/artikel/'.$artikel->gambar)}}" alt="">
                        </div>
                        <div class="article-body">
                            <ul class="article-info">
                                <li class="article-category"><a href="#">News</a></li>
                                <li class="article-type"><i class="fa fa-file-text"></i></li>
                            </ul>
                            <h1 class="article-title">{{$artikel->judul}}</h1>
                            <ul class="article-info">
                                <li><i class="fa fa-clock-o"></i>{{$artikel->created_at}}</li>
                            </ul>
                            <p>{{$artikel->konten}}</p>
                        </div>
                    </article>
                    <!-- /ARTICLE POST -->
                </div>

                <!-- Aside Column -->
                <div class="col-md-4">
                    <!-- article widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h2 class="title">Most Read</h2>
                        </div>

                        <!-- owl carousel 3 -->
                        <div id="owl-carousel-3" class="owl-carousel owl-theme center-owl-nav">
                            <!-- ARTICLE -->
                            <article class="article">
                                <div class="article-img">
                                    <a href="{{route('artikel.detail',$artikel->slug)}}">
                                        <img src="{{asset('uploads/artikel/'.$artikel->gambar)}}" alt="">
                                    </a>
                                    <ul class="article-info">
                                        <li class="article-type"><i class="fa fa-file-text"></i></li>
                                    </ul>
                                </div>
                                <div class="article-body">
                                    <h4 class="article-title"><a href="#">{{$artikel->judul}}</a></h4>
                                    <ul class="article-info">
                                        <li><i class="fa fa-clock-o"></i>{{$artikel->created_at}}</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /ARTICLE -->
                        </div>
                        <!-- /owl carousel 3 -->
                    @foreach($popular as $pop)
                        <!-- ARTICLE -->
                        <article class="article widget-article">
                            <div class="article-img">
                                <a href="{{route('artikel.detail',$pop->slug)}}">
                                    <img src="{{asset('uploads/artikel/'.$pop->gambar)}}" alt="" width="60" height="60">
                                </a>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="{{route('artikel.detail',$pop->slug)}}">{{$pop->judul}}</a></h4>
                                <ul class="article-info">
                                    <li><i class="fa fa-clock-o"></i>{{$pop->created_at}}</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->
                        @endforeach
                        <!-- ARTICLE -->
                    {{--<article class="article widget-article">
                        <div class="article-img">
                            <a href="#">
                                <img src="./img/img-widget-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="article-body">
                            <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                <li><i class="fa fa-comments"></i> 33</li>
                            </ul>
                        </div>
                    </article>--}}
                    <!-- /ARTICLE -->
                    </div>
                    <!-- /article widget -->
                </div>
                <!-- /Aside Column -->

            </div>
        </div>
    </div>

@endsection