@extends('layouts.navbar')
@section('content')

@foreach($json as $item)
{{$item}}
@endforeach

<h2>Products</h2>
<p>This is our product page</p>
@endsection