@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="height: 60px;border-bottom: 3px solid #000000;font-size: 190%; margin-bottom:10px">
        <p>{{$user->name}}'s Profile</p>
    </div>
    <div class="row">
        <div class="col-auto">
            <img src="/images/avatars/avatar_{{$user->avatar}}.jpg" style="width: 150px; height:150px; float: left; border-radius:50%">
        </div>
        <div class="col">
            @include('user.stats') 
        </div>
    </div>
</div>
@endsection