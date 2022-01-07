@extends('layout')
@section('title','Portafolio')
@section('content')




<div class="container">
   <div class="d-flex justify-content-between align-items-center">
    <h1 class="display-6 mb-0">@lang('Projects') | Vista Lista</h1> 
    {{-- Union de if y forech --}}
    
    @auth
    
    <a class="btn btn-primary" href="{{route('project.create')}}">Crear proyecto nuevo</a>
    @endauth
   </div>
    <hr>
       <p class="lead text-secondary">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae commodi, nobis 
    </p>
<ul class="list-group">
    @forelse ($projects as $item)
    <li class="list-group-item border-0 mb-3 shadow-sm">
        <a class=" text-secondary d-flex justify-content-between align-items-center" href="{{route('project.show',$item)}}">
            <span class=" font-weight-bold">
                {{$item->title}}
            </span>
            <span class="text-black-50">
                {{$item->created_at->format('d/m/Y')}}
            </span>
                
        </a>
    </li> 
    @empty
    <li>No existen elementos por mostrar</li>
    @endforelse
    {{$projects->links()}}
</ul>
<hr>
<h1 class="display-6 mb-0">@lang('Projects') | Vista Tabla</h1> 
<hr>
<table class="table">
    <thead class="table-primary">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titulo</th>
        <th scope="col">URL</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Tiempo de Creacion</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $projects as $item )
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->title}}</td>
            <td>{{$item->url}}</td>
            <td>{{$item->description}}</td>
            <td> {{$item->created_at->diffForHumans()}}</td>
          </tr>
        @endforeach
     
    </tbody>
  </table>
  

</div>
@endsection