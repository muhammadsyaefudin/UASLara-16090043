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
                <!-- section title -->
                <div class="section-title">
                    <h2 class="title">Trending Posts</h2>
                    <!-- tab nav -->
                    <ul class="tab-nav pull-right">
                        <li class="active"><a data-toggle="tab" href="#tab1">All</a></li>
                        <li><a data-toggle="tab" href="#tab1">News</a></li>
                        <li><a data-toggle="tab" href="#tab1">Sport</a></li>
                        <li><a data-toggle="tab" href="#tab1">Music</a></li>
                        <li><a data-toggle="tab" href="#tab1">Business</a></li>
                        <li><a data-toggle="tab" href="#tab1">Lifestyle</a></li>
                    </ul>
                    <!-- /tab nav -->
                </div>
                <!-- /section title -->
            @foreach($artikel as $artikel)

                <!-- ARTICLE -->
                <article class="article row-article">
                    <div class="article-img">
                        <a href="{{route('artikel.detail',$artikel->slug)}}">
                            <img src="{{asset('uploads/artikel/'.$artikel->gambar)}}" alt="" width="350" height="300">
                        </a>
                    </div>
                    <div class="article-body">
                        <ul class="article-info">
                            <li class="article-category"><a href="#">News</a></li>
                            <li class="article-type"><i class="fa fa-file-text"></i></li>
                        </ul>
                        <h3 class="article-title"><a href="{{route('artikel.detail',$artikel->slug)}}">{{$artikel->judul}}</a></h3>
                        <ul class="article-info">
                            <li><i class="fa fa-clock-o"></i>{{$artikel->created_at}}</li>
                        </ul>
                        {{str_limit($artikel->konten, 100, '....')}}
                        <br>
                        <a href='{{route('artikel.detail',$artikel->slug)}}' class="btn btn-danger">Read More  <i class="fa fa-paper-plane"></i></a>
                    </div>
                </article>
                <!-- /ARTICLE -->
            @endforeach

                <!-- pagination -->
                <div class="article-pagination">
                    <ul>
                        <li class="active"><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- /pagination -->
            </div>
            <!-- /Main Column -->

            <!-- Aside Column -->
            <div class="col-md-4">
                <!-- article widget -->
                <div class="widget">
                    <div class="widget-title">
                        <h2 class="title">New Post</h2>
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
                                <img src="{{asset('uploads/artikel/'.$pop->gambar)}}" alt="">
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
        <!-- /ROW -->

    </div>
    <!-- /CONTAINER -->
</div>
<!-- /SECTION -->

@endsection