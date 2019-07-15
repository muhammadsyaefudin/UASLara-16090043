<!-- Owl Carousel 1 -->
<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
    <!-- ARTICLE -->
    @foreach($headers as $head)
    <article class="article thumb-article">
        <div class="article-img">
            <a href="#">
            <img src="{{asset('uploads/artikel/'.$head->gambar)}}" alt="" width="700" height="400">
            </a>
        </div>
        <div class="article-body">
            <ul class="article-info">
                <li class="article-category"><a href="#">News</a></li>
                <li class="article-type"><i class="fa fa-camera"></i></li>
            </ul>
            <h2 class="article-title"><a href="{{route('artikel.detail',$head->slug)}}">{{$head->judul}}</a></h2>
            <ul class="article-meta">
                <li><i class="fa fa-clock-o"></i>{{$head->created_at}}</li>
                <li><i class="fa fa-comments"></i> 33</li>
            </ul>
        </div>
    </article>
    <!-- /ARTICLE -->
@endforeach
</div>
<!-- /Owl Carousel 1 -->