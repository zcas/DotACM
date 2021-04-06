@extends('layouts.app')

@section('content')
<div style="height: 60px;border-bottom: 3px solid #000000;font-size: 190%; text-align:center; margin-bottom:10px">
    <p>Lineups</p>
</div>
@auth
    <div class = "container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="/newlineup">New Lineup</a>
            </div>
        </div>
    </div>
@endauth
@if ($lineups->isEmpty())
    <div class="row justify-content-center">
        <h5>There is no lineups yet.</h5>
    </div>
@else
@foreach ($lineups as $lineup)
<div class="container">
</div>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header" style="text-align:center">
        <a href="/lineups/{{$lineup->id}}" style="align-content: right">Title: {{$lineup->title}}</a>
        </div>
        <div class="card-body" style="align-content: center">
        <p style="text-align: center"></p>
        </div>
        </div>
    </div>
</div>
</div>   
@endforeach
<div class="row justify-content-center">{{ $lineups->links() }}</div>
@endif
@endsection