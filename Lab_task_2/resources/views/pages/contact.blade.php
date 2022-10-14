@extends('layouts.navbar')
@section('content')
<h2>Contact</h2>
@section('content')
   <form action="{{route('contactSubmit')}}"method="post">
   {{@csrf_field()}}

        <input type="email" placeholder="Enter email" name="email" value="{{old('email')}}">
        @error('email')
        <span>{{$message}}</span>
        @enderror
        <br><br>
        
        <textarea name="contact" id="" placeholder="Write Something.." cols="40" rows="7"></textarea>
        @error('contact')
        <span>{{$message}}</span>
        @enderror
        <br><br>
        
        <button>Submit</button>
   </form> 
@endsection