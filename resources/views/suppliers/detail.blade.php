@extends('layout.main')
@section('content')
    <h2>Supplier Detail</h2>
    <div class="form">
        <div class="form-group">
            <label for="">Suppliers</label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $supplier->suppliers }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Product</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $supplier->product }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Dates</label>
            <input type="text" class="form-control" name="class" id="class" value="{{ $supplier->dates }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Shops</label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{ $supplier->shops }}"
                disabled>
        </div>
        <div class="form-group">
            <label for="">Prices</label>
            <input type="text" class="form-control" name="class" id="class" value="{{ $supplier->prices }}" disabled>
        </div>
    </div>
@endsection
