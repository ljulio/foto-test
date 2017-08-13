<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Propertie extends Model
{
    protected $fillable = ['titulo', 'descripcion','foto','user_id'];


    public function getPropertieUser(){


    	return $this->belongsTo('App\User');


    }

}
