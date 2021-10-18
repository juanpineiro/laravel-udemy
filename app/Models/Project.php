<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected  $fillable = ['title','url','description'];  //Esta propiedad permite definir los campos que pueden asignarse masivamente
    protected $guarded = ['id','approve','created_at', 'updated_at']; //Esta propiedad define los campos que no queremos que se asignen masivamente
    //Se puede definir manualmente la propiedad table
    //protected $table = 'projects';

    public function getRouteKeyName(){
    	return 'url';
    }
}
