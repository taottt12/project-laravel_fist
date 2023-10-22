@extends('vitri.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Vị Trí</div>
    <div class="card-body">

        <form action="{{ url('vitri') }}" method="post">
            {!! csrf_field() !!}

            <label>Mô tả</label></br>
            <input type="text" name="mota" id="mota" class="form-control"></br>

            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@endsection