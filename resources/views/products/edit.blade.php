@extends('layout')
@section('title','Productos | Editar')
@section('content')

@include('partials.validation-errors')
{{-- Union de if y forech --}}

<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto ">
        <form action="{{ route('products.update',$product)}}" method="POST" class="bg-white shadow rounded py-3 px-4">
            <h1 class="display-6">Editar producto</h1>
            @method('PATCH')
         @include('products._form',['btnTxt'=>"Actualizar"])
            
        </form>
    </div>
 </div>
 

@endsection