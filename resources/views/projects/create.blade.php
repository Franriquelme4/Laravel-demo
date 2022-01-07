@extends('layout')
@section('title','Crear ')
@section('content')
 
@include('partials.validation-errors')

{{-- Union de if y forech --}}
<div class="row">
   <div class="col-12 col-sm-10 col-lg-6 mx-auto ">
      <form action="{{ route('project.store')}}" method="post" class="bg-white shadow rounded py-3 px-4">
         <h1 class="display-6">Crear un nuevo proyecto</h1>
    
            @include('projects._form',['btnTxt'=>'Guardar'])
  
         </form>
   </div>
</div>

@endsection


 