@guest
<div class="col-auto" style="position: relative;">
    <div style="position:absolute;top:-15px;right:20px;" title="You must be logged in to vote."> 
        <img src="/images/nonvoter.png" style="width: 10px;height: 10px;">
    </div>
    <div style="position:absolute;top:5px;right:20px;">
        <p>{{$totalvotes}}</p>
    </div>
    <div style="position:absolute;top:20px;right:20px;" title="You must be logged in to vote.">
        <img src="/images/nonvoter.png" style="width: 10px;height: 10px;transform: rotate(-180deg);"> 
    </div>   
</div> 
@endguest
@auth
@if (empty($authvoted))
<div class="col-auto" style="position: relative;">
    <div style="position:absolute;top:-15px;right:20px;">
        <form method="POST" action="{{route('lineupvotesnew')}}">
            @csrf
            <div class="col-auto" title="Upvote" style="padding: 0px">
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <input type="hidden" name="lineup_id" value="{{$lineup->id}}">
                <input type="hidden" name ="upvote" value='1'>
                <input type="image" src="/images/rvote.png" style="width: 10px;height: 10px;" alt="submit" name='post' value='Post'>
            </div> 
        </form>
    </div>
    <div style="position:absolute;top:5px;right:20px;">
        <p>{{$totalvotes}}</p>
    </div>
    <div style="position:absolute;top:20px;right:20px;">
        <form method="POST" action="{{route('lineupvotesnew')}}">
            @csrf
            <div class="col-auto" title="Downvote" style="padding: 0px">
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <input type="hidden" name="lineup_id" value="{{$lineup->id}}">
                <input type="hidden" name ="upvote" value='0'>
                <input type="image" src="/images/dvote.png" style="width: 10px;height: 10px;transform: rotate(-180deg);" alt="submit" name='post' value='Post'>
            </div>
        </form>
    </div>   
</div>
@elseif($authvoted->upvote)
<div class="col-auto" style="position: relative;">
    <div style="position:absolute;top:-15px;right:20px;" title="You already Upvoted.">
        <img src="/images/rvote.png" style="width: 10px;height: 10px;">
    </div>
    <div style="position:absolute;top:5px;right:20px;">
        <p>{{$totalvotes}}</p>
    </div>
    <div style="position:absolute;top:20px;right:20px;" title="You already Upvoted.">
        <img src="/images/nonvoter.png" style="width: 10px;height:10px;transform: rotate(-180deg);">
    </div>   
</div>
@else
<div class="col-auto" style="position: relative;" title="You already Downvoted.">
    <div style="position:absolute;top:-15px;right:20px;">
        <img src="/images/nonvoter.png" style="width: 10px;height: 10px;">
    </div>
    <div style="position:absolute;top:5px;right:20px;padding:0px;">
        <p>{{$totalvotes}}</p>
    </div>
    <div style="position:absolute;top:20px;right:20px;" title="You already Downvoted.">
        <img src="/images/dvote.png" style="width: 10px;height:10px;transform: rotate(-180deg);">
    </div>   
</div>
@endif
@endauth
