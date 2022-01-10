<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');

    }
    public function index()
    {
        $product=Product::latest()->paginate();
        return view('products.index',compact('product'));
    }
    public function show(Product $product)
    {
        return view('products.show',['product'=> $product]);

    }
    public function create()
    {
        return view('products.create',[
            'product' => new Product
        ]);
    }
    public function store(CreateProductRequest $request)
    {
          //return()->only se seleccionan los atrubuto
        //request()->all() cuando los atributos name es igual que todos nombre de las columnas
        Product::create($request->validated());
     return redirect()->route('products.index')->with('status','Producto agregado correctamente');
    }
   
    public function edit(Product $product)
    {
        return view('products.edit',['product' => $product]);

    }
    public function update(Product $product,CreateProductRequest $request)
    {
        $product->update($request->validated());
        return redirect()->route('products.show',$product)->with('status','Producto actualizado correctamente');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('status',"Producto ha sido de baja");
    }
}
