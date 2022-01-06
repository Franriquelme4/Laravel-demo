@extends('layout')
@section('title','Portafolio')
@section('content')
   <h1>Portafolio</h1> 

    

{{-- Union de if y forech --}}
@auth
    
<a href="{{route('project.create')}}">Crear proyecto nuevo</a>
@endauth
@forelse ($projects as $item)
    <li><a href="{{route('project.show',$item)}}">{{$item->title}}</a></li> 
@empty
    <li>No existen elementos por mostrar</li>
@endforelse
{{$projects->links()}}
@endsection