<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Persona;
class Socio extends Model
{
    protected $table='socios';
    public function persona(){
      return $this->belongsTo(Persona::class);
    }
}
