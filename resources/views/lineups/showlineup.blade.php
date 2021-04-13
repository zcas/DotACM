@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/minimap.css')}}">
<div class="container">
    <div class="row">
        <div class="col-auto" style="padding-right:0px">
            <h3>{{$lineup->title}} </h3>
        </div>
        <div class="col" style="padding-top: 7px;padding-left:0px;">
            <i> &nbsp; by {{$user->name}}</i>
        </div>
        @include('lineups.showvotes')
    </div>
    <hr>
    <div class="row">
        <div class="col-7">
            <h4>Picks</h4>
            <ul style="list-style: none">
            @foreach ($lineup_picks as $lineup_pick)
                <li style="padding-bottom: 5px;"><img src="{{$lineup_pick->port_url}}" style="width: 80px"> &nbsp; {{$lineup_pick->name}} - Pos: {{$lineup_pick->position}}</li> 
            @endforeach
            </ul>
        </div>
        <div class="row justify-content-center" style="padding-top:50px">
        <div class="col-15-auto" id=minimap>
            <img style="width: 250px;border-radius: 10%" src="/images/minimap/map.png">
            @foreach ($lineup_picks as $lineup_pick)
            <img id="h_1_{{$lineup_pick->position}}" src="{{$lineup_pick->ico}}" style="width: 25px">   
            @endforeach
        </div>
        </div> 
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <div class="media" style="padding-bottom: 5px;padding-top: 5px;">
                    <a href="/user/{{$user->id}}" class="pull-left">
                         <img src="/images/avatars/avatar_{{$user->avatar}}.jpg" style="width:64px; height:64px; border-radius:50%">
                    </a>
                    <div class="media-body" style="padding-left:10px">
                        <strong>{{$user->name}}</strong>
                        <div>
                            <p style="background-color: grey;display:inline-block;border-radius:5px;padding:5px">
                                {{$lineup->description}}
                            </p>
                        </div>
                    </div>
                </div> 
            </div>
    </div>
    @include('lineups.showcomments')
    @include('lineups.lineupcommentform')
</div>
@endsection