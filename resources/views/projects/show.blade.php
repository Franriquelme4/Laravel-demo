@extends('layout')
@section('title',$projects->title)
@section('content')
@auth
    
<a href="{{route('project.edit',$projects)}}">Editar</a><br>

<form method="POST" action="{{route('project.destroy',$projects)}}">
    @csrf
    @method('DELETE')
    <button>Eliminar</button>
</form>
@endauth
{{ $projects}}

@endsection