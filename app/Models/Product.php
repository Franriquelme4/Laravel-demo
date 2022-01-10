<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //protected $fillable = ['title','url','description']; // muestra todos los campos que se pueden modificar en la database
protected $guarded = ['id']; //Muestra cuales son los que no se pueden modificiar 
public function getRouteKeyName()
{
    return 'id';
}

}
