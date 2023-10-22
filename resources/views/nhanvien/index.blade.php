@extends('nhanvien.layout')
@section('content')
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 9 CRUD (Create, Read, Update and Delete)</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/nhanvien/create') }}" class="btn btn-success btn-sm" title="Add New Nhân viên">
                        Add New
                    </a>
                    <br />
                    <br />
                    <form action="{{ route('nhanvien.index') }}" method="GET">
                        <input type="text" name="query" style="border-radius: 7px; width: 850px; margin-right: 20px;" placeholder="Search...">
                        <button type="submit" style="background-color: red; width: 75px; height: 40px; border-radius: 6px;">Search</button>
                    </form>
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên nhân viên</th>
                                    <th>Vị trí</th>
                                    <th>Phòng ban</th>
                                    <th>Lương</th>
                                    <th>Ngày vào làm</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($NV as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->TenNV }}</td>
                                    <td>{{ $item->mota }}</td>
                                    <td>{{ $item->TenPB }}</td>
                                    <td>{{ $item->Luong }}</td>
                                    <td>{{ $item->NgayVL }}</td>
                                    <!-- <td>{{ $item->img }}</td> -->

                                    <td>{{ $item->detail }}</td>


                                    <td>
                                        <a href="{{ url('/nhanvien/' . $item->id) }}" title="View nhanvien"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/nhanvien/' . $item->id . '/edit') }}" title="Edit nhanvien"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/nhanvien' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete nhanvien" onclick="return confirm" (Confirm delete?)><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
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