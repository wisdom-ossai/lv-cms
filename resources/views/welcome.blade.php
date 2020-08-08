@extends('layouts.front')

@section('title')
Welcome
@endsection

@section('page-header-text')

<i class="decode-icon-resume wow tada"></i>
<h1>Blog &amp; News</h1>

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)

            <div class="blog-article">

                <div class="blog-article-thumbnail">
                    <a href="{{ route('post.single', $post->id) }}"><img src="{{$post->img_url}}" alt=""></a>
                </div><!-- blog-article-thumbnail -->

                <h4 class="blog-article-title"><a href="{{ route('post.single', $post->id) }}">{{ $post->title }}</a></h4>

                <ul class=" blog-article-details">
                    <li class="date"><i class="decode-icon-time"></i> <a href="#">{{date('d-m-Y', strtotime($post->published_at))}}</a></li>
                    <li class="author"><i class="decode-icon-edit"></i> by <a href="#">{{$post->user->name}}</a></li>
                    <lI class="category"><i class="decode-icon-layers"></i> in <a href="#">{{ $post->category->name}}</a></lI>
                    <li class="comments"><i class="decode-icon-chat"></i> <a href="#">{{$post->comments->count()}} Comment{{$post->comments->count() <2 ? '' : 's'}} </a></li>
                </ul> <!-- blog-article-details -->

                <div class="blog-article-content">

                    <p>{{$post->description}}</p>

                    <a href="#">See more</a>

                </div><!-- blog-article-content -->

            </div><!-- blog-article -->
            @endforeach

        </div><!-- col -->
        <div class="col-md-4">

            <div class="widget widget-search">

                <form name="search" novalidate method="get" action="#">
                    <fieldset>
                        <input id="s" type="search" name="search" placeholder="" required>
                        <label for="s">Search</label>
                        <span></span>
                        <input type="submit" name="submit" value="">
                    </fieldset>
                </form>

            </div><!-- widget-search -->

            <div class="widget widget-archives">

                <h6 class="widget-title">Archives</h6>

                <ul>
                    <li><a href="#">September 2017</a></li>
                    <li><a href="#">August 2017</a></li>
                    <li><a href="#">July 2017</a></li>
                </ul>

            </div><!-- widget-archives -->

            <div class="widget widget-categories">

                <h6 class="widget-title">Categories</h6>

                <ul>
                    @foreach($categories as $category)
                    <li><a href="#">{{ $category->name}}</a></li>
                    @endforeach
                </ul>

            </div><!-- widget-categories -->

            <div class="widget widget-recent-posts">

                <h6 class="widget-title">Latest Posts</h6>

                <ul>
                    @foreach($posts as $post)
                    <li>
                        <img src="{{ $post->img_url}}" width="120" alt="">
                        <a class="post-title" href="#">{{ $post->title }}</a>
                        <div class="post-details">
                            by <a class="post-author" href="#">{{$post->user->name}}</a>
                            <a class="post-date" href="#">{{date('d-m-Y', strtotime($post->published_at))}}</a>
                        </div><!-- post-details -->
                    </li>
                    @endforeach

                </ul>

            </div><!-- widget-recent-posts -->

            <div class="widget widget-flickr">

                <h6 class="widget-title">Flickr</h6>

                <div class="flickr-photos">
                    <script src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user_set&amp;set=72157685386175133"></script>
                </div><!-- flickr-photos -->

            </div><!-- widget-flickr -->

            <div class="widget widget-recent-comments">

                <h6 class="widget-title">Recent comments</h6>

                <ul>
                    <li><a href="#">Cristinne </a> on <a href="#">Good Investments</a> <span>2 min ago</span></li>
                    <li><a href="#">Michael </a> on <a href="#">Best Vines</a> <span>3 min ago</span></li>
                    <li><a href="#">Louise </a> on <a href="#">The Black Sea</a> <span>4 min ago</span></li>
                    <li><a href="#">Damon </a> on <a href="#">Banking Strategies</a> <span>5 min ago</span></li>
                </ul>

            </div><!-- widget-recent-comments -->

        </div><!-- col -->
    </div><!-- row -->
</div><!-- container -->

{{$posts->links()}}
@endsection

@section('paging')
@endsection
