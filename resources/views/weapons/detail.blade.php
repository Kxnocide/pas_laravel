@extends('layout.main')
@section('content')
    <h2>Weapon Detail</h2>
    <div class="form">
        <div class="form-group">
            <label for="">Types</label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $weapon->type }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $weapon->nama }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Variants</label>
            <input type="text" class="form-control" name="class" id="class" value="{{ $weapon->variants }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{ $weapon->description }}"
                disabled>
        </div>
    </div>
@endsection
