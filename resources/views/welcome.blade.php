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
            @forelse($posts as $post)
                @include('partials.post-preview')
            @empty
            <div class="container">
                <h5 class="text-center">No Result Found for <span class="text-danger"><em>{{request()->query('search') ?? 'this page'}}</em></span></h5>
            </div>
            @endforelse

        </div><!-- col -->
        <div class="col-md-4">
            @include('partials.sidebar')
        </div><!-- col -->
    </div><!-- row -->
</div><!-- container -->
@endsection

@section('paging')
{{$posts->appends(['search' => request()->query('search')])->links()}}
@endsection
