<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
   protected $table = 'kandidat';

   public function foto(){
    return $this->belongsTo('App\Album', 'id_album', 'id');
   }
}
