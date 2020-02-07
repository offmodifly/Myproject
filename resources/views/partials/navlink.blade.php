@if(Request::route()->getName() != "home")
<a href="{{ url('/')}}">Home</a>
@endif
@if(Request::route()->getName() != "contact")
<a href="{{ url('/contact')}}">Contact</a>
@endif
@if(Request::route()->getName() != "about")
<a href="{{url('/about')}}">About</a>
@endif
