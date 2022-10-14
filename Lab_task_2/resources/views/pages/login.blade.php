@extends('layouts.navbar')

@section('content')
   <form action="{{route('loginSubmit')}}"method="post">
      {{@csrf_field()}}
        <input type="text" placeholder="Enter username" name="uname" value="{{old('uname')}}">
        @error('uname')
        <span>{{$message}}</span>
        @enderror
        <br><br>
        <input type="password" placeholder="Enter password" name="password">
        @error('password')
        <span>{{$message}}</span>
        @enderror
        <br><br>
        <button>Login</button>
   </form> 

@endsection

