@extends('layouts.app')

@section('content')
    <div style="height: 60px;border-bottom: 3px solid #B9500B;font-size: 190%; text-align:center">
        <p><img src="/images/str.png" alt="STR">Strength</p>
    </div>
    <div class="row justify-content-md-center">
        @foreach($str_h as $hero)
            <div style="display: inline-block;margin: 1px;">
                <img src="{{$hero->port_url}}" alt="{{$hero->name}}" style="width:120px">
            </div>  
        @endforeach
    </div>
    <div style="height: 60px;border-bottom: 3px solid #167C13;font-size: 190%; text-align:center">
        <p><img src="/images/agi.png" alt="AGI">Agility</p>
    </div>
    <div class="row justify-content-md-center">
        @foreach($agi_h as $hero)
            <div style="display: inline-block;margin: 1px;">
                <img src="{{$hero->port_url}}" alt="{{$hero->name}}" style="width:120px">
            </div>  
        @endforeach
    </div>
    <div style="height: 60px;border-bottom: 3px solid #257DAE;font-size: 190%; text-align:center">
        <p><img src="/images/int.png" alt="INT">Intelligence</p>
    </div>
    <div class="row justify-content-md-center">
        @foreach($int_h as $hero)
            <div style="display: inline-block;margin: 1px;">
                <img src="{{$hero->port_url}}" alt="{{$hero->name}}" style="width:120px">
            </div>  
        @endforeach
    </div>
@endsection
