@extends('layout')
@section('title','Crear ')
@section('content')
 
@include('partials.validation-errors')

{{-- Union de if y forech --}}
<h1>Crear un nuevo proyecto</h1>
<form action="{{ route('project.store')}}" method="post">
    
   @include('projects._form',['btnTxt'=>'Guardar'])
  
</form>
@endsection