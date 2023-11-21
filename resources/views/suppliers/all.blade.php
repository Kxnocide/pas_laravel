@extends('layout.main')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Suppliers</th>
                <th>Product</th>
                <th>Dates</th>
                <th>Shops</th>
                <th>Prices</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
            <tr>
            <td>{{$supplier ['id'] }}</td>
                <td>{{$supplier ['suppliers'] }}</td>
                <td>{{$supplier ['product'] }}</td>
                <td>{{$supplier ['dates'] }}</td>
                <td>{{$supplier ['shops'] }}</td>
                <td>{{$supplier ['prices'] }}</td>
                <td>
                <a href="/suppliers/detail/{{$supplier['id']}}" class="badge bg-info">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection