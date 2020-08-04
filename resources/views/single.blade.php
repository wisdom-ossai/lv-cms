@extends('layouts.front')

@section('title')
{{$post->title}}
@endsection

@section('page-header-text')

<i class="decode-icon-resume wow tada"></i>
<h1>{{$post->title}}</h1>

@endsection

@section('content')

<!-- PAGE CONTENT -->
<div id="page-content">

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="blog-article">

                    <div class="blog-article-thumbnail">
                        <a href="/"><img src="{{$post->img_url}}" alt=""></a>
                    </div><!-- blog-article-thumbnail -->

                    <h4 class="blog-article-title"><a href="#">{{$post->description}}</a></h4>

                    <ul class="blog-article-details">
                        <li class="date"><i class="decode-icon-time"></i> <a href="#">{{$post->published_at}}</a></li>
                        <li class="author"><i class="decode-icon-edit"></i> by <a href="#">{{$post->user->name}}</a></li>
                        <lI class="category"><i class="decode-icon-layers"></i> in <a href="#">{{$post->category->name}}</a></lI>
                        <li class="comments"><i class="decode-icon-chat"></i> <a href="#">3 Comments</a></li>
                    </ul><!-- blog-article-details -->

                    <div class="blog-article-content">
                        {!! $post->content !!}
                    </div><!-- blog-article-content -->

                </div><!-- blog-article -->

                <div class="blog-article-tags">
                    @foreach($post->tags as $tag)
                        <a class="badge badge-pill badge-secondary" href="#">{{$tag->name}}</a>
                    @endforeach
                </div>

                <div class="blog-article-author">

                    <img src="{{Gravatar::src($post->user->email)}}" alt="">

                    <div class="blog-article-author-details">

                        <h6>{{$post->user->name}} <small>Author</small></h6>

                        <p>{{$post->user->about}}</p>

                    </div><!-- blog-article-author-details -->

                </div><!-- blog-article-author -->

                <h6 class="commentlist-title">Comments (2)</h6>

                <ul class="commentlist">
                    <li class="comment depth-1">
                        <div class="comment-body">

                            <div class="comment-meta">

                                <div class="comment-author">

                                    <img class="avatar" src="http://milothemes.com/decode/images/blog/blog-post/avatar-2.jpg" alt="">
                                    <a class="fn" href="#">Steve Jhonson</a>
                                    <span class="says">says:</span>

                                </div><!-- comment-author -->

                                <div class="comment-metadata">
                                    <a href="#">Sept 04, 2017</a>
                                </div><!-- comment-metadata -->

                            </div><!-- comment-meta -->

                            <div class="comment-content">

                                <p>Morbi accumsan odio lacus, sollicitudin pulvinar magna vulputate sed. Aliquam
                                    non rutrum massa, sed dictum magna. Cum sociis natoque penatibus et magnis dis
                                    parturient montes.</p>

                            </div><!--  comment-content -->

                            <div class="reply">
                                <a class="comment-reply-link" href="#">Reply</a>
                            </div><!-- reply -->

                        </div><!-- comment-body -->
                    </li>
                    <li class="comment depth-1">
                        <div class="comment-body">

                            <div class="comment-meta">

                                <div class="comment-author">

                                    <img class="avatar" src="http://milothemes.com/decode/images/blog/blog-post/avatar-3.jpg" alt="">
                                    <a class="fn" href="#">Cristinne Smith</a>
                                    <span class="says">says:</span>

                                </div><!-- comment-author -->

                                <div class="comment-metadata">
                                    <a href="#">Jun 04, 2016</a>
                                </div><!-- comment-metadata -->

                            </div><!-- comment-meta -->

                            <div class="comment-content">

                                <p>Accumsan odio lacus, sollicitudin pulvinar magna vulputate sed. Aliquam non
                                    rutrum massa, sed dictum magna. Cum sociis natoque penatibus et magnis dis
                                    parturient montes.</p>

                            </div><!--  comment-content -->

                            <div class="reply">
                                <a class="comment-reply-link" href="#">Reply</a>
                            </div><!-- reply -->

                        </div><!-- comment-body -->
                    </li>
                </ul>

                <h6 class="commentform-title">Leave a message</h6>

                <form id="commentform" name="commentform" novalidate method="post" action="#">
                    <fieldset>

                        <p class="commentform-author">
                            <input id="name" class="col-12" type="text" name="name" placeholder="" required>
                            <span></span>
                            <label for="name">Name</label>
                        </p>

                        <p class="commentform-email">
                            <input id="email" class="col-12" type="text" name="email" placeholder="" required>
                            <span></span>
                            <label for="email">E-mail</label>
                        </p>

                        <p class="commentform-url">
                            <input id="url" class="col-12" type="text" name="url" placeholder="" required>
                            <span></span>
                            <label for="url">URL</label>
                        </p>

                        <p class="commentform-comment">
                            <textarea id="comment" class="col-12" name="comment" rows="6" cols="25" placeholder="" required></textarea>
                            <span></span>
                            <label for="comment">Comment</label>
                        </p>

                        <p class="commentform-submit">
                            <button class="btn btn-default btn-outline waves waves-dark" id="submit" type="submit" name="submit" value="">Send comment <i class="decode-icon-cursor"></i></button>
                        </p>

                    </fieldset>
                </form>

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
                        <li>
                            <img src="http://milothemes.com/decode/images/blog/blog-post/image-6.jpg" alt="">
                            <a class="post-title" href="#">A simple blog post</a>
                            <div class="post-details">
                                by <a class="post-author" href="#">Jane Smith</a>
                                <a class="post-date" href="#">Sept 10, 2017</a>
                            </div><!-- post-details -->
                        </li>
                        <li>
                            <img src="http://milothemes.com/decode/images/blog/blog-post/image-7.jpg" alt="">
                            <a class="post-title" href="#">A way to see things in design</a>
                            <div class="post-details">
                                by <a class="post-author" href="#">Jane Smith</a>
                                <a class="post-date" href="#">Sept 07, 2017</a>
                            </div><!-- post-details -->
                        </li>
                        <li>
                            <img src="http://milothemes.com/decode/images/blog/blog-post/image-8.jpg" alt="">
                            <a class="post-title" href="#">Why is this industry big?</a>
                            <div class="post-details">
                                by <a class="post-author" href="#">Jane Smith</a>
                                <a class="post-date" href="#">Sept 05, 2017</a>
                            </div><!-- post-details -->
                        </li>
                        <li>
                            <img src="http://milothemes.com/decode/images/blog/blog-post/image-9.jpg" alt="">
                            <a class="post-title" href="#">Good investment in 2017</a>
                            <div class="post-details">
                                by <a class="post-author" href="#">Jane Smith</a>
                                <a class="post-date" href="#">Sept 01, 2017</a>
                            </div><!-- post-details -->
                        </li>
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

                <div class="widget widget-text">

                    <h6 class="widget-title">Your add here</h6>

                    <div>

                        <img src="http://milothemes.com/decode/images/blog/blog-post/image-10.jpg" alt="">

                    </div>

                </div><!-- widget-text -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

</div><!-- PAGE CONTENT -->


@endsection

@section('paging')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <ul class="pagination">
                <li class="active"><a href="#">1.</a></li>
                <li><a href="#">2.</a></li>
                <li><a href="#">3.</a></li>
                <li><a href="#">4.</a></li>
            </ul>

        </div><!-- col -->
    </div><!-- row -->
</div><!-- container -->
@endsection
