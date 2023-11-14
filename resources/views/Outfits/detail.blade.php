@extends('layout.main')
@section('content')
    <h2>Outfit Details</h2>
    <div class="form">
        <div class="form-group">
            <label for="">Category</label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $outfit->Category }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $outfit->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Brands</label>
            <input type="text" class="form-control" name="class" id="class" value="{{ $outfit->brands }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Gear Perks</label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{ $outfit->perks }}"
                disabled>
        </div>
        <div class="form-group">
            <label for="">Prices</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $outfit->prices }}"
                disabled>
        </div>
    </div>
@endsection
