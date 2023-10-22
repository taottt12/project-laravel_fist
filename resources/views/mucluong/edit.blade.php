@extends('mucluong.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Mức lương</div>
    <div class="card-body">

        <form action="{{ url('mucluong/' .$mucluong->MaML) }}" method="post">
            {!! csrf_field() !!}
            @method("POST")
            <input type="hidden" name="id" id="id" value="{{$mucluong->MaML}}" id="id" />
            <label>Mức thấp</label></br>
            <input type="text" name="Mucthap" id="Mucthap" value="{{$mucluong->Mucthap}}" class="form-control"></br>
            <label>Mức cao</label></br>
            <input type="text" name="Muccao" id="Muccao" value="{{$mucluong->Muccao}}" class="form-control"></br>

            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>
@endsection