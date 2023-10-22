@extends('mucluong.layout')
@section('content')
<div class="container">
    <div class="card" style="margin:20px;">
        <div class="card-header">Mức lương Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Mức thấp : {{ $mucluong->Mucthap }}</h5>
                <h5 class="card-title">Mức cao : {{ $mucluong->Muccao }}</h5>
            </div>
            </hr>
        </div>
    </div>
</div>
@endsection