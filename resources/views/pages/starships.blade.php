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
                            <th scope="col">model</th>
                            <th scope="col">MGLT</th>
                            <th scope="col">passengers</th>
                            <th scope="col">starship_class</th>
                            <th scope="col">hyperdrive_rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $value)
                            <tr>
                                <td>{{ $value['name'] }}</td>
                                <td>{{ $value['model'] }}</td>
                                <td>{{ $value['MGLT'] }}</td>
                                <td>{{ $value['passengers'] }}</td>
                                <td>{{ $value['starship_class'] }}</td>
                                <td>{{ $value['hyperdrive_rating'] }}</td>
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
