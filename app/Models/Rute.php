<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;

    protected $table = 'rutes';

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function image(){
        return $this->belongsTo('App\Models\image','image_id');
    }

}
