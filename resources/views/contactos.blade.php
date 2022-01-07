
@extends('layout')

@section('title','Contactos')

@section('content')
 


  {{-- @if ($errors->any()) --}}
    {{-- @foreach ($errors->all() as $error) --}}
        {{-- <p>{{$error}}</p> --}}
    {{-- @endforeach --}}
      
  {{-- @endif --}}
 @include('partials.session-status')
 
 <div class="container">

<div class="row">
  <div class="col-12 col-sm-10 col-lg-6 mx-auto ">

 <form action="{{route('contact')}}" method="POST" class="bg-white shadow rounded py-3 px-4">
    @csrf
    <h1 class="display-6">@lang('Contact')</h1>
    <hr>
    <div class="form-group">
      <label for="name">Nombre</label><br>
      <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" id="name" type="text" name="name" value="{{ old('name')}}" placeholder="Nombre..">
      @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
      @enderror

    </div>

    <div class="form-group">
      <label for="lastname">Apellido</label><br>
      <input class="form-control bg-light shadow-sm @error('lastname') is-invalid @else border-0 @enderror" id="lastname" type="text" name="lastname" value="{{ old('lastname')}}" placeholder="Apellido..">
      @error('lastname')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
      @enderror

    </div>

    <div class="form-group">
      <label for="email">Email</label><br>
      <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" id="email" type="text" name="email" value="{{ old('email')}}" placeholder="Email..">
      @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
      @enderror

    </div>

    <div class="form-group">
      <label for="subject">Asunto</label><br>
      <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror" id="subject" type="text" name="subject" value="{{ old('subject')}}" placeholder="Asunto..">
      @error('subject')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
      @enderror

    </div>
    <div class="form-group">
      <label for="description">Descripción</label><br>
      <textarea class="form-control bg-light shadow-sm @error('description') is-invalid @else border-0 @enderror" name="description" id="input4" cols="5" rows="3">{{ old('description')}}</textarea>
      @error('description')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
      @enderror

    </div>
  <button class="btn btn-primary btn-lg btn-block mt-2">Enviar</button>
    </div>
</form>

</div>
</div>




  
@endsection
