@extends('layout')
@section('title','Portafolio | Editar')
@section('content')

@include('partials.validation-errors')
{{-- Union de if y forech --}}

<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto ">
        <form action="{{ route('project.update',$projects)}}" method="POST" class="bg-white shadow rounded py-3 px-4">
            <h1 class="display-6">Editar un proyecto</h1>
            @method('PATCH')
         @include('projects._form',['btnTxt'=>"Actualizar"])
            
        </form>
    </div>
 </div>
 

@endsection