<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $guarded = array('id');
     
     public static $rules = array(
        'name' => 'required',
        'address' => 'required',
        'image' => 'required',
        'area' => 'required',
       
    );
    
     public function users()
    {
      return $this->hasMany('App\User');

    }
}
