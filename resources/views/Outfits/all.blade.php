@extends('layout.main')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Name</th>
                <th>Brands</th>
                <th>Perks</th>
                <th>Prices</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($outfits as $outfit)
            <tr>
            <td>{{$outfit ['id'] }}</td>
                <td>{{$outfit ['Category'] }}</td>
                <td>{{$outfit ['name'] }}</td>
                <td>{{$outfit ['brands'] }}</td>
                <td>{{$outfit ['perks'] }}</td>
                <td>{{$outfit ['prices'] }}</td>
                <td>
                <a href="/outfit/detail/{{$outfit['id']}}" class="badge bg-info">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection