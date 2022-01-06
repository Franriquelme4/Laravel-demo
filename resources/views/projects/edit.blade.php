@extends('layout')
@section('title','Portafolio | Editar')
@section('content')

@include('partials.validation-errors')

{{-- Union de if y forech --}}
<h1>Editar un proyecto</h1>
<form action="{{ route('project.update',$projects)}}" method="POST">
  
    @method('PATCH')
 @include('projects._form',['btnTxt'=>"Actualizar"])
    
</form>
@endsection