@extends('phongban.layout')
@section('content')
<div class="container">
    <div class="card" style="margin:20px;">
        <div class="card-header">Phòng ban Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Tên phòng ban : {{ $phongban->TenPB }}</h5>
                <h5 class="card-title">Địa chỉ: {{ $phongban->DiaChi }}</h5>
                <h5 class="card-title">Ngày thành lập : {{ $phongban->NgayTL }}</h5>
            </div>
            </hr>
        </div>
    </div>
</div>
@endsection