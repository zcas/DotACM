<div class="container" style="padding-top:10px">
    <hr>
    <div class="row justify-content-center">
        <h3>Comments</h3>
    </div>
    <hr>
    @if ($comments->isEmpty())
    <div class="row justify-content-center" style="padding-top: 20px">
        <p>Be the first to leave a comment.</p>
    </div>
    <hr>
    @else
    <ul class="media-list">
        @foreach ($comments as $comment)
        <li class="media" style="padding-bottom: 5px;padding-top: 5px;border-bottom:1px dashed grey;">
            <a href="/user/{{$comment->id}}" class="pull-left">
                <img src="/images/avatars/avatar_{{$comment->avatar}}.jpg" style="width:64px; height:64px; border-radius:50%">
            </a>
            <div class="media-body" style="padding-left:10px">
                <strong>{{$comment->name}}</strong>
                <div>
                    <p style="background-color: grey;display:inline-block;border-radius:5px;padding:5px">
                        {{$comment->comment_text}}
                    </p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    <div class="row justify-content-center">{{ $comments->links() }}</div>  
    @endif  
</div>