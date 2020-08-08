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

                @include('partials.post')

                <div class="blog-article-tags">
                    @foreach($post->tags as $tag)
                    <a class="badge badge-pill badge-secondary" href="{{route('tag.single', $tag->id)}}">{{$tag->name}}</a>
                    @endforeach
                </div>

                <div class="blog-article-author">

                    <img src="{{Gravatar::src($post->user->email)}}" alt="">

                    <div class="blog-article-author-details">

                        <h6>{{$post->user->name}} <small>Author</small></h6>

                        <p>{{$post->user->about}}</p>

                    </div><!-- blog-article-author-details -->

                </div><!-- blog-article-author -->

                <h6 class="commentlist-title">Comments ({{$post->comments->count()}})</h6>

                <ul class="commentlist">
                    @foreach($post->comments as $comment)
                    <li class="comment depth-1">
                        <div class="comment-body">

                            <div class="comment-meta">

                                <div class="comment-author">

                                    <img class="avatar" src="{{Gravatar::src($comment->email)}}" alt="">
                                    <a class="fn" href="#">{{ $comment->name }}</a>
                                    <span class="says">says:</span>

                                </div><!-- comment-author -->

                                <div class="comment-metadata">
                                    <a href="#">Sept 04, 2017</a>
                                </div><!-- comment-metadata -->

                            </div><!-- comment-meta -->

                            <div class="comment-content">

                                {{ $comment->comment }}

                            </div><!--  comment-content -->

                            <div class="reply">
                                <a class="comment-reply-link" href="#">Reply</a>
                            </div><!-- reply -->

                        </div><!-- comment-body -->
                    </li>
                    @endforeach
                </ul>

                <h6 class="commentform-title">Leave a message</h6>

                <form id="commentform" name="commentform" novalidate method="POST" action="{{ route('comments.create', $post->id) }}">
                    @csrf
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
                @include('partials.sidebar')
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

</div><!-- PAGE CONTENT -->

@endsection
