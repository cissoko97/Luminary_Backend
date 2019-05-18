<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Luminar extends Model
{
    protected $fillable = ['name','category','description','imgSrc','distance','discoveryYear'];

    //Relation de la classe luminar
    
    public function category(){
        //return $this->hasOne();
    }

    //section pour les scopes de luminar
    public function scopeFindByCategory($query , $category){
        return $query->where('','=', $category);
    }
}
