@extends('layout')
@section('title','Productos')
@section('content')




<div class="container">
   <div class="d-flex justify-content-between align-items-center">
    <h1 class="display-6 mb-0">@lang('Products') | Vista Lista</h1> 
    {{-- Union de if y forech --}}
    
    @auth
    
    <a class="btn btn-primary" href="{{route('products.create')}}">Agregar un nuevo producto</a>
    @endauth
   </div>
    <hr>
       <p class="lead text-secondary">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae commodi, nobis 
    </p>
<ul class="list-group">
    @forelse ($product as $item)
    <li class="list-group-item border-0 mb-3 shadow-sm">
        <a class=" text-secondary d-flex justify-content-between align-items-center" href="{{route('products.show',$item)}}">
            <span class=" font-weight-bold">
                {{$item->name}}
            </span>
            <span class="text-black-50">
              {{$item->price}}
          </span>
            <span class="text-black-50">
                {{$item->created_at->format('d/m/Y')}}
            </span>
         
        </a>
        
    </li> 
    @empty
    <li>No existen elementos por mostrar</li>
    @endforelse
    {{$product->links()}}
</ul>
<hr>
<h1 class="display-6 mb-0">@lang('Products') | Vista Tabla</h1> 
<hr>
<table class="table">
    <thead class="table-primary">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Descripcion</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $product as $item )
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->description}}</td>
          
          </tr>
        @endforeach
     
    </tbody>
  </table>
  

</div>
@endsection