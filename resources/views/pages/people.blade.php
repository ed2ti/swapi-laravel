@include('styles.header')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body class="antialiased">
    <main class='container'>
        @include('styles.topbar')
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Height</th>
                            <th scope="col">Mass</th>
                            <th scope="col">Hair Color</th>
                            <th scope="col">Skin Color</th>
                            <th scope="col">Eye Color</th>
                            <th scope="col">Birth Year</th>
                            <th scope="col">Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $value)
                            <tr>
                                <td>{{ $value['name'] }}</td>
                                <td>{{ $value['height'] }}</td>
                                <td>{{ $value['mass'] }}</td>
                                <td>{{ $value['hair_color'] }}</td>
                                <td>{{ $value['skin_color'] }}</td>
                                <td>{{ $value['eye_color'] }}</td>
                                <td>{{ $value['birth_year'] }}</td>
                                <td>{{ $value['gender'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @include('styles.pagination')
    </main>
</body>

</html>
