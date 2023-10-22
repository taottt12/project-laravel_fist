@extends('nhanvien.layout')
@section('content')
<div class="container">
  <div class="card" style="margin:20px;">
    <div class="card-header">Students Page</div>
    <div class="card-body">
      <div class="card-body">
        <h5 class="card-title">Tên nhân viên : {{ $nhanvien->TenNV }}</h5>
        <p class="card-text">Vị trí : {{ $nhanvien->MaVT }}</p>
        <p class="card-text">Phòng ban : {{ $nhanvien->MaPB }}</p>
        <p class="card-text">Lương : {{ $nhanvien->Luong }}</p>
        <p class="card-text">Ngày vào làm : {{ $nhanvien->NgayVL }}</p>
      </div>
      </hr>
    </div>
  </div>
</div>
@endsection