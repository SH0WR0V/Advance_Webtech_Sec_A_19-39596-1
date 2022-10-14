<h1>AIUB</h1>
<ul style="list-style-type: none;
  margin: 0;
  padding: 0;">
  <li><a href="{{route('login')}}">Login</a></li>
  <li><a href="{{route('registration')}}">Registration</a></li>
  <li><a href="{{route('home')}}">Home</a></li>
  <li><a href="{{route('product')}}">Product</a></li>
  <li><a href="{{route('teams')}}">Our teams</a></li>
  <li><a href="{{route('about')}}">About us</a></li>
  <li><a href="{{route('contact')}}">Contact us</a></li><br><br>
</ul>

<div>
    @yield('content')
</div>

<div>
    <h3>Copyright AIUB 2022</h3> 
</div>