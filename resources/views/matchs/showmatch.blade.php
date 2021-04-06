@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/minimap.css')}}">
<div class="container">
    <div class="row justify-content-center">
        <p>Match ID: {{$match->id}}</p>
    </div>
    <div class="row">
        <div class="col" style="background-color: #167C13">
            <p><img src="/images/radiant_ico.png" style="width: 42px">Radiant Team:<a href="">{{$users[0]->name}}</a></p>
        </div>
        <div class="col" style="background-color: #7c2216">
            <p><img src="/images/Dire_ico.png" style="width: 42px">Dire Team:<a href="">{{$users[1]->name}}</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table>
                <tr>
                    <td>
                        <p>Picks:</p>
                    </td>
                    @foreach ($picks as $pick)
                    @if ($pick->side == 1)
                        <td>
                            <img src="{{$pick->port_url}}" style="width: 70px">
                        </td>
                    @endif    
                    @endforeach
                </tr>
                <tr>
                    <td>
                        <p>Bans:</p>
                    </td>
                    @foreach ($bans as $ban)
                    @if ($ban->side==1)
                        <td>
                            <img src="{{$ban->port_url}}" style="width: 70px">
                        </td>
                    @endif  
                    @endforeach
                </tr>
            </table>
        </div>
        <div class="col">
            <table>
                <tr>
                    <td>
                        <p>Picks:</p>
                    </td>
                    @foreach ($picks as $pick)
                    @if ($pick->side == 2)
                        <td>
                            <img src="{{$pick->port_url}}" style="width: 70px">
                        </td>
                    @endif    
                    @endforeach
                </tr>
                <tr>
                    <td>
                        <p>Bans:</p>
                    </td>
                    @foreach ($bans as $ban)
                    @if ($ban->side==2)
                        <td>
                            <img src="{{$ban->port_url}}" style="width: 70px">
                        </td>
                    @endif  
                    @endforeach
                </tr>
            </table>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-15" id=minimap>
            <img style="width: 250px;border-radius: 10%" src="/images/minimap/map.png">
            @foreach ($picks as $pick)
            <img id="h_{{$pick->side}}_{{$pick->position}}" src="{{$pick->ico}}" style="width: 25px">   
            @endforeach
        </div>
    </div>
    @include('matchs.showvotes')
    @include('matchs.showcomments')
    @include('matchs.commentform')
    <div class="row">
        <div class="col-12" style="text-align: end ;background-color: #494747">
        <a href="javascript:history.back()">Volver</a>
        </div>
    </div>   
</div>
@endsection
