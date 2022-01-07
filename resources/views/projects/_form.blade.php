@csrf

<div class="form-group">
    <label for="title">Nombre del proyecto</label><br>
    <input class="form-control bg-light shadow-sm border-0" id="title" type="text" name="title" value="{{old('title',$projects->title)}}">
</div>

<div class="form-group">
    <label for="url">URL del proyecto</label><br>
    <input class="form-control bg-light shadow-sm border-0" id="url" type="text" name="url" value="{{old('url',$projects->url)}}">
</div>

<div class="form-group">
    <label for="title">Descripcion del proyecto</label><br>
    <input class="form-control bg-light shadow-sm border-0" id="description" type="text" name="description" value="{{old('description',$projects->description)}}">
</div>


<button class="btn btn-primary btn-lg btn-block mt-2">{{$btnTxt}}</button>
<a class="btn btn-link btn-block" href="{{route('project.index')}}">Cancelar</a>
    
   
  