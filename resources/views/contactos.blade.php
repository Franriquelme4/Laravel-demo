
@extends('layout')

@section('title','Contactos')

@section('content')
  <h1>{{ __('Contact')}}</h1> 

<div class="container">
  {{-- @if ($errors->any()) --}}
    {{-- @foreach ($errors->all() as $error) --}}
        {{-- <p>{{$error}}</p> --}}
    {{-- @endforeach --}}
      
  {{-- @endif --}}
  <form action="{{route('contact')}}" method="POST">
    @csrf
    <label for="input1">Name</label><br>
    <input id="input1" type="text" name="name" value="{{ old('name')}}"><br>
    {!! $errors->first('name','<small>:message</small><br>') !!}
    
    <label for="input2">Lastname</label><br>
    <input id="input2" type="text" name="lastname" value="{{ old('lastname')}}"><br>
    {!! $errors->first('lastname','<small>:message</small><br>') !!}
   
    <label for="input4">Email</label><br>
    <input id="input4" type="text" name="email" value="{{ old('email')}}"><br>
    {!! $errors->first('email','<small>:message</small><br>') !!}


    <label for="input3">Subject</label><br>
    <input id="input3" type="text" name="subject" value="{{ old('subject')}}"><br>
    {!! $errors->first('subject','<small>:message</small><br>') !!}



    <label for="input4">Description</label><br>
    <textarea name="description" id="input4" cols="30" rows="10"></textarea><br>
    {!! $errors->first('description','<small>:message</small><br>') !!}


<button>Enviar </button>
</form>
</div>

  
@endsection
