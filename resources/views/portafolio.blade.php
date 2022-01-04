@extends('layout')
@section('title','Portafolio')
@section('content')
   <h1>Portafolio</h1> 

    
@if ($portfolio)   
@foreach ($portfolio as $item)
<li>{{$item['title']}}</li>
@endforeach
@else
 <p>No posee elementos</p>
@endif

{{-- Union de if y forech --}}

@forelse ($portfolio as $item)
    <li>{{$item['title']}}</li> 
@empty
    <li>No existen elementos por mostrar</li>
@endforelse
@endsection