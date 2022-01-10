@csrf

<div class="form-group">
    <label for="name">Nombre del producto</label><br>
    <input class="form-control bg-light shadow-sm border-0" id="name" type="text" name="name" value="{{old('name',$product->name)}}">
</div>

<div class="form-group">
    <label for="price">Precio</label><br>
    <input class="form-control bg-light shadow-sm border-0" id="price" type="number" name="price" value="{{old('price',$product->price)}}">
</div>

<div class="form-group">
    <label for="description">Descripcion del producto</label><br>
    <input class="form-control bg-light shadow-sm border-0" id="description" type="text" name="description" value="{{old('description',$product->description)}}">
</div>


<button class="btn btn-primary btn-lg btn-block mt-2">{{$btnTxt}}</button>
<a class="btn btn-link btn-block" href="{{route('products.index')}}">Cancelar</a>
    
   
  