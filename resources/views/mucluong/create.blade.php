@extends('mucluong.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Mức Lương</div>
    <div class="card-body">

        <form action="{{ url('mucluong') }}" method="post">
            {!! csrf_field() !!}

            <label>Mức thấp</label></br>
            <input type="text" name="Mucthap" id="Mucthap" class="form-control"></br>
            <label>mức cao</label></br>
            <input type="text" name="Muccao" id="Muccao" class="form-control"></br>

            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop