@if ($paginator->hasPages())
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <li class="active disabled" aria-disabled="true"><a href="#">@lang('pagination.previous')</a></li>
                @else
                <li class="active" aria-disabled="true"><a href="{{ $paginator->previousPageUrl() }}">@lang('pagination.previous')</a></li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <li><a href="#">2.</a></li>
                <li class="">
                    <a class="" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                </li>
                @else
                <li class="active disabled" aria-disabled="true">
                    <span class="">@lang('pagination.next')</span>
                </li>
                @endif
            </ul>
        </div><!-- col -->
    </div><!-- row -->
</div>
@endif
