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
                            <th scope="col">climate</th>
                            <th scope="col">diameter</th>
                            <th scope="col">gravity</th>
                            <th scope="col">population</th>
                            <th scope="col">rotation period</th>
                            <th scope="col">surface water</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $value)
                            <tr>
                                <td>{{ $value['name'] }}</td>
                                <td>{{ $value['climate'] }}</td>
                                <td>{{ $value['diameter'] }}</td>
                                <td>{{ $value['gravity'] }}</td>
                                <td>{{ $value['population'] }}</td>
                                <td>{{ $value['rotation_period'] }}</td>
                                <td>{{ $value['surface_water'] }}</td>
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
