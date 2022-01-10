@extends('layout')
@section('title','Agregar nuevo producto')
@section('content')
 
@include('partials.validation-errors')

{{-- Union de if y forech --}}
<div class="row">
   <div class="col-12 col-sm-10 col-lg-6 mx-auto ">
      <form action="{{ route('products.store')}}" method="post" class="bg-white shadow rounded py-3 px-4">
         <h1 class="display-6">Agregar un nuevo producto</h1>
    
            @include('products._form',['btnTxt'=>'Guardar'])
  
         </form>
   </div>
</div>

@endsection


 