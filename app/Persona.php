<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Socio;
use App\Cajera;
class Persona extends Model
{
    protected $table = 'personas';
    public function socio(){
      return $this->hasOne(Socio::class);
    }
    public function cajera(){
      return $this->hasOne(Cajera::class);
    }
}
