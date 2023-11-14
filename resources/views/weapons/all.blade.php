@extends('layout.main')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Types</th>
                <th>Name</th>
                <th>Variants</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($weapons as $weapon)
            <tr>
            <td>{{$weapon ['id'] }}</td>
                <td>{{$weapon ['type'] }}</td>
                <td>{{$weapon ['nama'] }}</td>
                <td>{{$weapon ['variants'] }}</td>
                <td>{{$weapon ['description'] }}</td>
                <td>
                <a href="/weapon/detail/{{$weapon['id']}}" class="badge bg-info">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection