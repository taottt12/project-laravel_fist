@extends('nhanvien.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New Nhân Viên</div>
  <div class="card-body">

    <form action="{{ url('nhanvien') }}" method="post">
      {!! csrf_field() !!}

      <label>Tên nhân viên</label></br>
      <input type="text" name="TenNV" id="TenNV" class="form-control"></br>
      <label>Vị trí</label></br>
      <select class="form-control" name="MaVT" id="MaVT" required>
        @foreach($vitri as $vitri)
        <option value="{{ $vitri->MaVT }}">{{ $vitri->mota }}</option>
        @endforeach
      </select>
      <label>Phòng ban</label></br>
      <select class="form-control" name="MaPB" id="MaPB" required>
        @foreach($phongban as $phongban)
        <option value="{{ $phongban->MaPB }}">{{ $phongban->TenPB }}</option>
        @endforeach
      </select>
      <label>Lương</label></br>
      <input type="text" name="Luong" id="Luong" class="form-control"></br>
      <label>Ngày vào làm</label></br>
      <input type="text" name="NgayVL" id="NgayVL" class="form-control"></br>

      <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop