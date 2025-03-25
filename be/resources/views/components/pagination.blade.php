@if ($paginator->hasPages())
    <nav>
        <ul class="pagination pg-primary">
            @if ($paginator->onFirstPage())
                {{-- <li class="disabled page-item"><span>« Trước</span></li> --}}
                <li class="page-item">
                    <span class="page-link" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                    </span>
                </li>
            @else
                {{-- <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">« Trước</a></li> --}}
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
            @endif
            @foreach ($paginator->links()['elements'] as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        {{-- @if ($page == $paginator->currentPage())
                            <li class="page-item active"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                        @else --}}
                            <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        {{-- @endif --}}
                    @endforeach
                @endif
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                {{-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Sau »</a></li> --}}
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            @else
            <li class="page-item">
                <span class="page-link" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                </span>
            </li>
            @endif
        </ul>
    </nav>
@endif
