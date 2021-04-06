@extends('layouts.app')

@section('content')
@include('user.profilescripts')
<div class="container">
    <div class="row" style="height: 60px;border-bottom: 3px solid #000000;font-size: 190%; margin-bottom:10px">
        <p>{{$user->name}}'s Profile</p>
    </div>
    <div class="row">
        <div class="col-auto">
            <div class="row">
                <img src="/images/avatars/avatar_{{$user->avatar}}.jpg" style="width: 150px; height:150px; float: left; border-radius:50%">
            </div>
            <div class="row" id="editoption" style="visibility: hidden">
                @include('user.changeavatar')
            </div>
        </div>
        <div class="col">
            @include('user.stats') 
        </div>
        <div class="col-auto justify-content-right" style="position: relative">
            <i id="editcontrol" class="fa fa-edit" onclick="showEditOptions()" style="visibility:visible;position:absolute"></i>
            <i id="closeditcontrol" class="fa fa-close" onclick="hideEditOptions()" style="visibility:hidden;position:absolute"></i>
        </div>
    </div>
</div>
@endsection