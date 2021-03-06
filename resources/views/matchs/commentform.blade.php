@guest
<div class="row justify-content-center">
    <p>You must be logged in to leave a comment.</p>
</div>
@endguest
@auth
<div class="row justify-content-center">
    <form method="POST" action="{{route('commentnew')}}">
        @csrf
        <div class="row">
            <div class="col-sm-auto"><label>New comment.</label></div>
            <div class="col">
                <textarea name="comment_text" rows="3" cols="40" maxlength="250"></textarea>
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <input type="hidden" name="match_id" value="{{$match->id}}">
            </div>   
        </div>
        <div class="row">
            <div class="col" style="text-align: right">
                <input class="btn btn-primary" type='submit' name='post' value='Post'>
            </div>
        </div>
        <br>
    </form>
</div>    
@endauth