@if(Auth::check())
    {{user()->name}}
    {{user()->email}}
@endif
