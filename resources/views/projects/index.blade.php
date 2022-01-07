@extends('layout')
@section('title','Portafolio')
@section('content')




<div class="container">
   <div class="d-flex justify-content-between align-items-center">
    <h1 class="display-6 mb-0">@lang('Projects')</h1> 
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

</div>
@endsection