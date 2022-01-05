@extends('layout')
@section('title','Portafolio')
@section('content')
   <h1>Portafolio</h1> 

    

{{-- Union de if y forech --}}

@forelse ($portfolio as $item)
    <li>{{$item->title}}</li> 
@empty
    <li>No existen elementos por mostrar</li>
@endforelse
{{$portfolio->links()}}
@endsection