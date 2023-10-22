@extends('vitri.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Mức lương</div>
    <div class="card-body">

        <form action="{{ url('vitri/' .$vitri->MaVT) }}" method="post">
            {!! csrf_field() !!}
            @method("POST")
            <input type="hidden" name="id" id="id" value="{{$vitri->MaVT}}" id="id" />
            <label>Mô tả</label></br>
            <input type="text" name="mota" id="mota" value="{{$vitri->mota}}" class="form-control"></br>

            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
@endsection