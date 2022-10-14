@extends('layouts.navbar')

@section('content')
   <form action="{{route('registrationSubmit')}}"method="post">
   {{@csrf_field()}}
        <input type="text" placeholder="Enter username" name="uname" value="{{old('uname')}}">
        @error('uname')
        <span>{{$message}}</span>
        @enderror
        <br><br>
        <input type="email" placeholder="Enter email" name="email" value="{{old('email')}}">
        @error('email')
        <span>{{$message}}</span>
        @enderror
        <br><br>
        <input type="date" placeholder="Enter date of birth" name="dob" value="{{old('dob')}}">
        @error('dob')
        <span>{{$message}}</span>
        @enderror
        <br><br>
        <input type="password" placeholder="Enter password" name="password">
        @error('password')
        <span>{{$message}}</span>
        @enderror
        <br><br>
        <button>Register</button>
   </form> 
@endsection


