@extends('layout')
@section('title','About')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-12 col-lg-6">
         <img class="img-fluid mt-4" src="/img/undraw_winter_designer_a-2-m7.svg" alt="Desarrollo web">
     </div> 
       <div class="col-12 col-lg-6">
         <h1 class="display-4 text-primary">@lang('About')</h1>
           <p class="lead text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo quo quibusdam hic aut autem suscipit dolore provident iure officia harum delectus dicta dolores adipisci tempore tempora, distinctio dolorem. Rerum, ab.</p>
           <a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}">Contactame</a>
           <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('project.index')}}">Portafolio</a>
       </div>
       
   </div>
</div>


  
@endsection
