<div class="card">
    <div class="card-body">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="pagination">
                <!-- Previous -->
                @if ($page == 1)
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ url($resource . '/' . $page - 1) }}"> Previous </a>
                    </li>
                @endif
                <!-- Pages -->
                @for ($i = 1; $i <= $pages; $i++)
                    @if ($i == $page)
                        <li class="page-item active">
                            <a class="page-link" href="{{ url($resource . '/' . $i) }}">{{ $i }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ url($resource . '/' . $i) }}">{{ $i }}</a>
                        </li>
                    @endif
                @endfor
                <!-- Next -->
                @if ($page == $pages)
                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ url($resource . '/' . $page + 1) }}"> Next </a>
                    </li>
                @endif
            </ul>
            <form class="ms-4 d-flex input-group w-auto" method="POST" action="{{ route('search') }}">
                @csrf

                <input name="search" type="search" class="form-control" placeholder="Type a name" aria-label="Search" />
                <input name="resource" type="hidden" value="{{$resource}}" />
                <button class="btn btn-outline-primary" type="submit" >
                    Search
                </button>
            </form>
        </nav>
    </div>
</div>
