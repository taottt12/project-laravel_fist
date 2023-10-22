@extends('phongban.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Mức lương</div>
    <div class="card-body">

        <form action="{{ url('phongban/' .$phongban->MaPB) }}" method="post">
            {!! csrf_field() !!}
            @method("POST")
            <input type="hidden" name="id" id="id" value="{{$phongban->MaPB}}" id="id" />
            <label>Tên phòng ban</label></br>
            <input type="text" name="TenPB" id="TenPB" value="{{$phongban->TenPB}}" class="form-control"></br>
            <label>Địa chỉ</label></br>
            <input type="text" name="DiaChi" id="DiaChi" value="{{$phongban->DiaChi}}" class="form-control"></br>
            <label>Ngày thành lập</label></br>
            <input type="text" name="NgayTL" id="NgayTL" value="{{$phongban->NgayTL}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
@endsection