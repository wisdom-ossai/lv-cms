<div class="widget widget-search">

    <form name="search" novalidate method="GET" action="">
        <fieldset>
            <input id="s" type="search" name="search" placeholder="" value="{{request()->query('search')}}" required>
            <label for="s">Search</label>
            <span></span>
            <!-- <input type="submit" name="submit" value=""> -->
        </fieldset>
    </form>

</div><!-- widget-search -->

<div class="widget widget-archives">

    <h6 class="widget-title">Tags</h6>

    @foreach($tags as $tag)
    <a class="badge badge-pill badge-secondary" href="{{route('tag.single', $tag->id)}}">{{$tag->name}}</a>
    @endforeach
</div><!-- widget-archives -->

<div class="widget widget-categories">

    <h6 class="widget-title">Categories</h6>

    <ul>
        @foreach($categories as $category)
        <li><a href="{{route('category.single', $category->id)}}">{{ $category->name}}</a></li>
        @endforeach
    </ul>

</div><!-- widget-categories -->

<div class="widget widget-recent-posts">

    @if($latestPosts->count())
    <h6 class="widget-title">Latest Posts</h6>
    @endif

    <ul>
        @foreach($latestPosts as $post)
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
<div class="widget widget-recent-comments">

    <h6 class="widget-title">Recent comments</h6>

    <ul>
        <li><a href="#">Cristinne </a> on <a href="#">Good Investments</a> <span>2 min ago</span></li>
        <li><a href="#">Michael </a> on <a href="#">Best Vines</a> <span>3 min ago</span></li>
        <li><a href="#">Louise </a> on <a href="#">The Black Sea</a> <span>4 min ago</span></li>
        <li><a href="#">Damon </a> on <a href="#">Banking Strategies</a> <span>5 min ago</span></li>
    </ul>

</div><!-- widget-recent-comments -->
