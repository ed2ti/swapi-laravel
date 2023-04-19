<topnavbar>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('show') }}">
                <img src="{{ asset('img/star-wars-logo.png') }}" alt="..." height="36">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/people">
                            <img class="img" height="36" src="{{ asset('img/people.png') }}"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="People">
                            <span class="span">People</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/starships">
                            <img class="img" height="36" src="{{ asset('img/starships.png') }}">
                            <span class="span">StarShips</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/planets">
                            <img class="img" height="36" src="{{ asset('img/planets.png') }}">
                            <span class="span">Planets</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</topnavbar>
