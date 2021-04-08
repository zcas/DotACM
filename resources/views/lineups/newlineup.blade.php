@extends('layouts.app')

@section('content')
@guest
<div class = "container">
    <p>You must be logged in to use this feature</p>    
</div>    
@endguest
@auth
@include('lineups.lineupscripts')
<link rel="stylesheet" href="/css/newlineup.css">
<!--modal-->
<div class="modal" id="incompleteFieldModal" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 id="titleModal">Error: Missing fields</h5>
            <button class="close" data-dismiss="modal" aria-label="Cerrar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="alert alert-warning">
                <h6>Fill all the fields!</h6>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-warning" type="button" data-dismiss="modal">
                Close
            </button>
        </div>
    </div>
</div>
</div>
<!--fin modal-->
<div class="container">
    <div class="row">
        <div class="col-auto" id="lista-heroes">
            <input type="text" id="myInput" onkeyup="listFilter()" placeholder="Search for heroes..">
            <ul id = "myUL">
                @foreach ($heroes as $hero)
                <li><a id="{{$hero->id}}" href="#" onclick="pick('{{$hero->id}}','{{$hero->ico}}','{{$hero->port_url}}');return false;"><img src="{{$hero->ico}}"> {{$hero->name}}</a></li>                    
                @endforeach
            </ul>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-auto">
                    <h4>Lineup Title:</h4>
                </div>
                <div class="col-auto">
                    <input type="text" name="title" id="lineup_title" style="width: 380px">
                </div>
            </div>
            <div class="row" id="lineupbox">
                <div class="herobox box1" id="pick0"></div>
                <div class="herobox box2" id="pick1"></div>
                <div class="herobox box3" id="pick2"></div>
                <div class="herobox box4" id="pick3"></div>
                <div class="herobox box5" id="pick4"></div>
            </div>
            <div class="row" id="pcontent">
                <div class="mappositions">
                    <img style="width: 350px;border-radius: 10%" src="/images/minimap/map.png" draggable="false">
                </div>
                <div id="icodiv">
                    <div class="heromapico hero1" id="ico0">
                    </div>
                    <div class="heromapico hero2" id="ico1">
                    </div>
                    <div class="heromapico hero3" id="ico2">
                    </div>
                    <div class="heromapico hero4" id="ico3">
                    </div>
                    <div class="heromapico hero5" id="ico4">
                    </div>
                </div>
                <div id="posicodiv">
                    <div class="posIcoMap pos1" id="position1" ondrop="drop(event)" ondragover="allowDrop(event)">
                    </div>
                    <div class="posIcoMap pos2" id="position2" ondrop="drop(event)" ondragover="allowDrop(event)">
                    </div>
                    <div class="posIcoMap pos3" id="position3" ondrop="drop(event)" ondragover="allowDrop(event)">
                    </div>
                    <div class="posIcoMap pos4" id="position4" ondrop="drop(event)" ondragover="allowDrop(event)">
                    </div>
                    <div class="posIcoMap pos5" id="position5" ondrop="drop(event)" ondragover="allowDrop(event)">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class ="row">
            <div class="col">
                <textarea id="lineUpDescription" rows="3" cols="40" maxlength="250"></textarea>
            </div>
        </div>
    </div>
    <div>
        @csrf
        <button id="enviarlnup" type="button" onclick="loadXMLDoc();">Upload</button>
    </div>
</div>  
@endauth
@endsection