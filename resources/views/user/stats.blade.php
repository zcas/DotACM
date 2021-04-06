<div class="container">
    <div class="row">
        <div class="col">
            <h3>User's Info</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <ul>
                <li>Nickname: {{$user->name}}</li>
                <li>Member since: {{ date('d M Y', $user->created_at->timestamp) }}</li>
                <li>Matches played:  {{$totalmatch}} </li>
                <li>Lineups created: {{$totallineup}} </li>
                <li>Total comments: {{$totalcomments}}</li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <h4>Last Match</h4>
        </div>
    </div>
    @if (!empty($lastmatch))
    <div>
        <div class="row">
            <div class="col">
                <p>Match Nº {{$lastmatch->id}}: {{$lmruser->name}} vs {{$lmduser->name}}</p>
            </div>
    </div>
    <div class="row" style="padding-bottom: 40px">
        @foreach ($lmpicks as $lmpick)
            <div class="col-auto" style="padding: 0px">
                <img src="{{$lmpick->port_url}}" alt="{{$lmpick->name}}" style="width: 70px;padding-top:0px">
            </div>
        @endforeach
    </div>
    </div> 
    @else
        <div class="row">
            <p>- No match registered yet -</p>
        </div>
    @endif
</div>
<div class="container">
    <div class="row">
        <h4>Last Lineup</h4>
    </div>
    @if (!empty($lastlineup))
    <div class="row">
        <p>Lineup Nº {{$lastlineup->id}}: {{$lastlineup->title}}</p>
    </div>
    <div class="row">
        @foreach ($lastlineuppicks as $lastlineuppick)
        <div class="col-auto" style="padding: 0px">
            <img src="{{$lastlineuppick->port_url}}" alt="{{$lastlineuppick->name}}" style="width: 70px;padding-top:0px">
        </div>
        @endforeach
    </div>
    @else
    <div class="row">
        <p>- No Lineup registered yet -</p>
    </div>
    @endif
</div>