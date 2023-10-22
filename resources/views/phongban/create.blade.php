@extends('phongban.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Vị Trí</div>
    <div class="card-body">

        <form action="{{ url('phongban') }}" method="post">
            {!! csrf_field() !!}

            <label>Tên phòng ban</label></br>
            <input type="text" name="TenPB" id="TenPB" class="form-control"></br>
            <label>Địa chỉ</label></br>
            <input type="text" name="DiaChi" id="DiaChi" class="form-control"></br>
            <label>Ngày thành lập</label></br>
            <input type="text" name="NgayTL" id="NgayTL" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop