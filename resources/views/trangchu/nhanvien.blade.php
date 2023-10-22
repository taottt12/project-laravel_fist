@extends('trangchu.layout')
@section('content')

<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 style="text-align: center; margin-top: 10px;">NHÂN VIÊN</h2>
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên nhân viên</th>
                                    <th>Vị trí</th>
                                    <th>Phòng ban</th>
                                    <th>Ngày vào làm</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($nv as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->TenNV }}</td>
                                    <td>{{ $item->MaVT }}</td>
                                    <td>{{ $item->MaPB }}</td>
                                    <td>{{ $item->NgayVL }}</td>
                                    <td>{{ $item->detail }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection