@csrf
<label for="">Nombre del proyecto <br>
    <input type="text" name="title" value="{{old('title',$projects->title)}}">
</label>
<br>
<label for="">URL del proyecto <br>
    <input type="text" name="url" value="{{old('title',$projects->url)}}">
</label>
<br>
<label for="">descripccion de proyecto <br>
   
    <textarea name="description" id="" cols="30" rows="10">{{old('title',$projects->description)}}</textarea>
</label>
<br>
<button>{{$btnTxt}}</button>