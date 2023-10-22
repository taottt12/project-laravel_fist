@extends('vitri.layout')
@section('content')
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 9 CRUD (Create, Read, Update and Delete)</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/vitri/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        Add New
                    </a>
                    <br />
                    <br />
                    <form action="{{ route('vitri.index') }}" method="GET">
                        <input type="text" name="query" style="border-radius: 7px; width: 850px; margin-right: 20px;" placeholder="Search...">
                        <button type="submit" style="background-color: red; width: 75px; height: 40px; border-radius: 6px;">Search</button>
                    </form>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Mô tả</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vitri as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->mota }}</td>


                                    <td>
                                        <a href="{{ url('/vitri/' . $item->MaVT) }}" title="View vitri"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/vitri/' . $item->MaVT . '/edit') }}" title="Edit vitri"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/vitri' . '/' . $item->MaVT) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete vitri" onclick="return confirm" (Confirm delete?)><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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