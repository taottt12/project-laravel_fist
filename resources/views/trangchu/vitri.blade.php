@extends('trangchu.layout')
@section('content')


<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 style="text-align: center; margin-top: 10px;">VỊ TRÍ</h2>
                    <div class="table-responsive">


                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên vị trí</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vt as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->mota }}</td>
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