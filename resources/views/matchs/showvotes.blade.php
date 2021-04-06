<div class="container">
    <div class="row">
        @guest
            <div class="col-auto" title="You must be logged in to vote." style="padding: 0px">
                <img src="/images/nonvoter.png" width="20px">
            </div>
            <div class="col" style="text-align: left">
                <p>Radiant Votes: {{$votes[0]}}</p>
            </div>
            <div class="col-auto" title="You must be logged in to vote." style="padding: 0px">
                <img src="/images/nonvoter.png" width="20px">
            </div>
            <div class="col-auto" style="text-align: right">
                <p>Dire Votes: {{$votes[1]}}</p>
            </div>
        @endguest
        @auth
        <!-- radiant vote-->
            @if (empty($authvoted))
                <form method="POST" action="{{route('votesnew')}}">
                    @csrf
                    <div class="col-auto" title="Vote for Radiant." style="padding: 0px">
                        <input type="hidden" name="user_id" value="{{Auth::id()}}">
                        <input type="hidden" name="match_id" value="{{$match->id}}">
                        <input type="hidden" name ="side" value='1'>
                        <input type="image" src="/images/rvote.png" alt="submit" width="20px" name='post' value='Post'>
                    </div> 
                </form>
            @elseif($authvoted->side == 1)
                <div class="col-auto" title="You already voted for Radiant." style="padding: 0px">
                    <img src="/images/voted.png" width="20px">
                </div>     
            @else
                <div class="col-auto" title="You already voted for Dire." style="padding: 0px">
                    <img src="/images/notvoted.png" width="20px">
                </div>
            @endif
            <div class="col" style="text-align: left">
                <p>Radiant Votes: {{$votes[0]}}</p>
            </div>
        <!-- dire vote-->
            @if (empty($authvoted))
            <form method="POST" action="{{route('votesnew')}}">
                @csrf
                <div class="col-auto" title="Vote for Dire." style="padding: 0px">
                    <input type="hidden" name="user_id" value="{{Auth::id()}}">
                    <input type="hidden" name="match_id" value="{{$match->id}}">
                    <input type="hidden" name ="side" value='2'>
                    <input type="image" src="/images/dvote.png" alt="submit" width="20px" name='post' value='Post'>
                </div> 
            </form>
            @elseif($authvoted->side == 2)
                <div class="col-auto" title="You already voted for Dire." style="padding: 0px">
                    <img src="/images/voted.png" width="20px">
                </div>
            @else
                <div class="col-auto" title="You already voted for Radiant." style="padding: 0px">
                    <img src="/images/notvoted.png" width="20px">
                </div>
            @endif
            <div class="col-auto" style="text-align: right">
                <p>Dire Votes: {{$votes[1]}}</p>
            </div>
        @endauth
</div>