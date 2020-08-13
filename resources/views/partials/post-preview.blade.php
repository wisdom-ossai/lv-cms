<div class="blog-article">

    <div class="blog-article-thumbnail">
        <a href="{{ route('post.single', $post->id) }}"><img src="{{ asset('storage/' . $post->img_url) }}" alt=""></a>
    </div><!-- blog-article-thumbnail -->

    <h4 class="blog-article-title"><a href="{{ route('post.single', $post->id) }}">{{ $post->title }}</a></h4>

    <ul class=" blog-article-details">
        <li class="date"><i class="decode-icon-time"></i> <a href="#">{{date('d-m-Y', strtotime($post->published_at))}}</a></li>
        <li class="author"><i class="decode-icon-edit"></i> by <a href="{{ route('post.single', $post->id) }}#author">{{$post->user->name}}</a></li>
        <lI class="category"><i class="decode-icon-layers"></i> in <a href="{{route('category.single', $post->category->id)}}">{{ $post->category->name}}</a></lI>
        <li class="comments"><i class="decode-icon-chat"></i> <a href="{{ route('post.single', $post->id) }}#commentlist">{{$post->comments->count()}} Comment{{$post->comments->count() <2 ? '' : 's'}} </a></li>
    </ul> <!-- blog-article-details -->

    <div class="blog-article-content">

        <p>{{$post->description}}</p>

        <a href="{{ route('post.single', $post->id) }}">See more</a>

    </div><!-- blog-article-content -->

</div><!-- blog-article -->
