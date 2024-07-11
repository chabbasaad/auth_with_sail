g
<div>
    <h1>Welcome to the Dashboard! {{Auth::user()->name}}</h1>
    <p>This is the main page of your dashboard.</p>

    <form method="POST" action="{{route('logout')}}">
        @csrf
     <button type="submit">Logout</button>
    </form>
</div>


@if(session()->has('error'))
    <div>
      <b>{{session()->get('error')}}</b>
    </div>
@endif
