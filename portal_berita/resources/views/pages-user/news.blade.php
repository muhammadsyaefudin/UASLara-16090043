@extends('frontend.default')
@section('content')

    <!-- SECTION -->
    <div class="section">
        <!-- CONTAINER -->
        <div class="container">
            <!-- ROW -->
            <div class="row">
                <!-- Main Column -->
                <div class="col-md-12">
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
                            <!-- row -->
                            <div class="row">
                                <!-- Column 1 -->
                                <div class="col-md-3 col-sm-6">
                                    @foreach($artikel as $art)
                                    <!-- ARTICLE -->
                                    <article class="article">
                                        <div class="article-img">
                                            <a href="{{route('artikel.detail',$art->slug)}}">
                                                <img src="{{asset('uploads/artikel/'.$art->gambar)}}" alt="">
                                            </a>
                                            <ul class="article-info">
                                                <li class="article-type"><i class="fa fa-camera"></i></li>
                                            </ul>
                                        </div>
                                        <div class="article-body">
                                            <h4 class="article-title"><a href="{{route('artikel.detail',$art->slug)}}">{{$art->judul}}</a></h4>
                                            <ul class="article-meta">
                                                <li><i class="fa fa-clock-o"></i>{{$art->created_at}}</li>
                                            </ul>
                                        </div>
                                    </article>
                                    <!-- /ARTICLE -->
                                        @endforeach
                                </div>
                                <!-- /Column 1 -->
                            </div>
                            <!-- /row -->
                </div>
                <!-- /Main Column -->
            </div>
            <!-- /ROW -->
        </div>
        <!-- /CONTAINER -->
    </div>
    <!-- /SECTION -->

    @endsection