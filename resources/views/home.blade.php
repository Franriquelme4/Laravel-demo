@extends('layout')
@section('title','home')
@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Desarrollo web</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo quo quibusdam hic aut autem suscipit dolore provident iure officia harum delectus dicta dolores adipisci tempore tempora, distinctio dolorem. Rerum, ab.</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}">Contactame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('project.index')}}">Portafolio</a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mt-4" src="/img/undraw_code_thinking_re_gka2.svg" alt="Desarrollo web">
        </div>
    </div>
</div>


    
@endsection