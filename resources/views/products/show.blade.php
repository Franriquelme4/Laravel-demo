@extends('layout')
@section('title',$product->title)
@section('content')


<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto ">
            <div class="bg-white p-5 shadow rounded">
                <h1>{{$product->name}}</h1>
                <p class="text-secondary">
                    {{$product->description}}
                </p>
                <p class="text-black-50">
                    {{$product->created_at->diffForHumans()}}
                </p>
                <div class="d-flex justify-content-between aling-items-center">

                    <a href="{{route('products.index')}}">Regresar</a>
                    
                    @auth
                    <div class="btn-group btn-group-sm">
                        
                        <a class="btn btn-info" href="{{route('products.edit',$product)}}">Editar</a><br>
                        <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a> 
                        
                    </div>
                    <form id="delete-project" method="POST" action="{{route('products.destroy',$product)}}" class="d-none">
                        @csrf
                        @method('DELETE')
                    </div>
                        
                </form>
                @endauth
            </div>
        </div>
    </div>     
</div>
@endsection