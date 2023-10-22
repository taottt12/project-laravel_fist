@extends('trangchu.layout')
@section('content')


<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 style="text-align: center; margin-top: 10px;">PHÒNG BAN</h2>
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên phòng ban</th>
                                    <th>Địa chỉ</th>
                                    <th>Ngày thành lập</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pb as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->TenPB }}</td>
                                    <td>{{ $item->DiaChi }}</td>
                                    <td>{{ $item->NgayTL }}</td>
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