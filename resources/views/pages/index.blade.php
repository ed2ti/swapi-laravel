<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('styles.header')

<body class="antialiased">
    <main class='container'>
        @include('styles.topbar')
        <div class="card">
            <div class="card-body">
                <p>SWAPI stands for "Star Wars API". It is a free, open-source web service that provides access to data from
                    the Star Wars universe, including information on characters, planets, films, species, vehicles, and
                    more.</p>

                <p>SWAPI is designed to be easy to use for developers who want to integrate Star Wars data into their own
                    applications. The API is based on RESTful principles, which means that developers can use standard HTTP
                    requests to retrieve data in various formats, including JSON and XML.</p>

                <p>The data provided by SWAPI is sourced from various official Star Wars sources, such as the films, books,
                    and
                    other media. The information is organized into different endpoints, each representing a different type
                    of
                    data, such as people, planets, or vehicles.</p>

                <p>SWAPI has become a popular resource for Star Wars fans and developers who want to create Star Wars-themed
                    applications, websites, or games. It has also been used in educational settings to teach programming
                    concepts, such as API usage and data manipulation.</p>
            </div>
        </div>
    </main>
</body>

</html>
