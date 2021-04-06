<link rel="stylesheet" href="/css/avatarpick.css">
<div class="container" style="z-index: 999">
    <div class="dropdown">
      <input type="checkbox" id="dropdown-selector" class="dropdown-input"/> 
      <label for="dropdown-selector" class="label-dropdown">Change Avatar <span class="fa fa-caret-down"></span></label>
      <ul class="dropdown-content">
          <ul class="dropdown-avatar">
            @foreach ($avatars as $avatar)
            <li class="avatar-items">
                <form method="POST" action="{{route('changeavatar')}}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <input type="hidden" name="avatar" value="{{$avatar->id}}">
                    <input type="image" src="/images/avatars/avatar_{{$avatar->id}}.jpg" style="width: 64px;height: 64px;border-radius:50%;float:left"  alt="submit" name="post" value="Post">
                </form>
            </li>
            @endforeach  
        </ul>
      </ul>
    </div>
  </div>