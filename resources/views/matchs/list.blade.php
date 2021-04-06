@extends('layouts.app')

@section('content')
<div style="height: 60px;border-bottom: 3px solid #000000;font-size: 190%; text-align:center; margin-bottom:10px">
    <p>Matches</p>
</div>
@if ($matches->isEmpty())
    <div class="row justify-content-center">
        <h5>There is no matches yet.</h5>
    </div>
@else
@foreach ($matches as $match)
<div class="container">
</div>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header" style="text-align:center">
        <a href="/matches/{{$match->id}}" style="align-content: right">Match ID: {{$match->id}}</a>
        </div>
        <div class="card-body" style="align-content: center">
        <p style="text-align: center">{{$match->ruser->name}} vs {{$match->duser->name}} </p>
        </div>
        </div>
    </div>
</div>
</div>   
@endforeach
<div class="row justify-content-center">{{ $matches->links() }}</div>
@endif
@endsection