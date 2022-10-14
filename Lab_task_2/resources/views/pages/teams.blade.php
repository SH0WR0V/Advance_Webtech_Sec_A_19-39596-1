@extends('layouts.navbar')
@section('content')

<h2>Teams</h2>
<p>This is our teams page</p>

<table class="table table-border">
    <tr>
        <th>UserName</th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Password</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->uname}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->dob}}</td>
        <td>{{$user->password}}</td>  
    </tr>
    @endforeach

</table>
@endsection